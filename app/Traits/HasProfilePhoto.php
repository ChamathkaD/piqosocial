<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasProfilePhoto {
    
    /**
     * Update the user's profile photo.
     *
     * @param  \Illuminate\Http\UploadedFile  $photo
     * @return void
     */
    public function updateProfilePhoto(UploadedFile $photo)
    {
        tap($this->photo_path, function ($previous) use ($photo) {

            $this->forceFill([
                'photo_path' => $photo->storePublicly('profile-photos', ['disk' => 'public']),
            ]);

            if ($previous) {
                Storage::disk('public')->delete($previous);
            }

        });
    }

    /**
     * Delete the user's profile photo.
     *
     * @return void
     */
    public function deleteProfilePhoto()
    {
        Storage::disk('public')->delete($this->photo_path);

        $this->forceFill([
            'photo_path' => null,
        ])->save();
    }

    /**
     * Get the URL to the user's profile photo.
     *
     */
    protected function profilePhotoUrl(): Attribute
    {
        return new Attribute(
            get: fn() => $this->photo_path ?? $this->defaultProfilePhotoUrl()
        );
    }

    /**
     * Get the default profile photo URL if no profile photo has been uploaded.
     *
     * @return string
     */
    protected function defaultProfilePhotoUrl()
    {
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->fullname) . '&background=random&color=eafaf1&size=200';
    }

}