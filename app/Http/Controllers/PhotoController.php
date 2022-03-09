<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Auth::user()->photos()->get(['id', 'photo']);

        return view('profile.photos', [
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('posts.edit-photo', [
            'photo' => $photo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        if ($request->hasFile('photo')) {
            $newPhoto = $request->file('photo');
            Storage::disk('public')->delete($photo->photo);
        }

        $photo->update([
            'user_id' => Auth::id(),
            'description' => $request->input('body'),
            'photo' => $newPhoto->storePublicly('uploads/photos', ['disk' => 'public']),
            'status' => $request->boolean('status'),
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        Storage::disk('public')->delete($photo->photo);

        $photo->delete();

        return back();
    }
}
