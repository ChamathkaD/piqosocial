<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\Language;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts()->latest()->get();

        $photos = Auth::user()->photos()->latest()->get();

        return view('profile.index', [
            'posts' => $posts,
            'photos' => $photos,
            'user' => Auth::user(),
        ]);
    }

    public function about()
    {
        $works = Auth::user()->works;

        $educations = Auth::user()->educations;

        $address = Auth::user()->address;

        return view('profile.about', [
            'works' => $works,
            'educations' => $educations,
            'address' => $address,
        ]);
    }

    public function friends()
    {
        return view('profile.friends');
    }

    public function videos()
    {
        return view('profile.videos');
    }

    public function aboutDetails()
    {
        return view('profile.about-details.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function updateAboutDetails(Request $request)
    {
        #validations.
        $validated = $request->validate([
            'profile_photo' => ['nullable', 'mimes:png,jpg,jpeg', 'max:1024'],
            'cover_photo' => ['nullable', 'mimes:png,jpg,jpeg', 'max:5120'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'nic_name' => ['nullable', 'string', 'max:100'],
            'username' => ['nullable', 'string', 'max:100'],
            'bio' => ['nullable', 'string'],
        ]);

        $user = Auth::user();

        # upload profile photo and store database.
        if ($request->hasFile('profile_photo')) {

            if ($request->file('profile_photo')->isValid()) {

                $profilePhoto = $request->file('profile_photo');

                $user->updateProfilePhoto($profilePhoto);

            }

        }

        # upload cover photo and store database.
        $this->uploadPhoto($request, 'cover_photo', $user, 'cover_photo_path', 'cover-photos');

        # update other relevant data.
        $user->forceFill([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'nic_name' => $validated['nic_name'],
            'username' => $validated['username'],
            'bio' => $validated['bio'],
        ])->save();

        return back();
    }

    public function deleteProfilePhoto()
    {
        $user = Auth::user();

        $user->deleteProfilePhoto();

        return back();
    }
    
    public function deleteCoverPhoto()
    {
        $user = Auth::user();

        Storage::disk('public')->delete($user->cover_photo_path);

        $user->forceFill([
            'cover_photo_path' => null,
        ])->save();

        return back();
    }

    protected function uploadPhoto($request, $input, $user, $column, $path)
    {
        if ($request->hasFile($input)) {

            if ($request->file($input)->isValid()) {

                $profilePhoto = $request->file($input);

                if ($user->{$column}) {
                    
                    if (Storage::disk('public')->exists($user->{$column})) {

                        Storage::disk('public')->delete($user->{$column});

                    }

                } 

                $user->forceFill([
                    $column => $profilePhoto->storePublicly($path, ['disk' => 'public']),
                ])->save();
            }
        }
    }

    public function updateContact(Request $request)
    {
        $user = Auth::user();

        $hobbies = Hobby::all();

        $languages = Language::all();

        if ($request->isMethod('PUT')) {

            $validated = $request->validate([
                'phone' => ['nullable', 'digits:10'],
                'email' => ['required', Rule::unique('users', 'phone')->ignore(Auth::id())],
                'gender' => ['required'],
            ]);

            $user->phone = $validated['phone'];
            $user->email = $validated['email'];
            $user->gender = $validated['gender'];
            $user->save();

            return back();
        }

        return view('profile.contact.create', [
            'user' => $user,
            'hobbies' => $hobbies,
            'languages' => $languages,
        ]);
    }

    public function updatePassword(Request $request)
    {
        if ($request->isMethod('PUT')) {

            $validated = $request->validate([
                'current_password' => ['required', 'current_password:web'],
                'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
            ]);

            $user = Auth::user();
            $current_password = $validated['current_password'];

            # update password
            if (isset($current_password) && Hash::check($current_password, $user->password)) {

                $user->forceFill([
                    'password' => Hash::make($validated['password'])
                ])->save();
            }

            return back();
        }

        return view('profile.password.edit');
    }
}
