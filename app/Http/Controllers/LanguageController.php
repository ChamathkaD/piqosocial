<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $languageIDs = $request->languages;

        $user->languages()->syncWithoutDetaching($languageIDs);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        $user = Auth::user();

        $user->languages()->detach($language);

        return back();
    }
}
