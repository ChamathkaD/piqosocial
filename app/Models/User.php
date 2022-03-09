<?php

namespace App\Models;

use App\Traits\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasProfilePhoto;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url'
    ];

    /**
     * Get the user's full name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function fullName(): Attribute
    {
        return new Attribute(
            get: fn () => "{$this->first_name} {$this->last_name}"
        );
    }

    /**
     * Get the posts for the user.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the works for the user.
     */
    public function works()
    {
        return $this->hasMany(Work::class);
    }

    /**
     * Get the educations for the user.
     */
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * Get the address associated with the user.
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }

    /**
     * The hobbies that belong to the user.
     */
    public function hobbies()
    {
        return $this->belongsToMany(Hobby::class);
    }

    /**
     * The languages that belong to the user.
     */
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    /**
     * Get the photos for the user.
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
