<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Auth;
use Illuminate\Http\Request;

class HobbyController extends Controller
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

        $hobbyIDs = $request->name;

        $user->hobbies()->syncWithoutDetaching($hobbyIDs);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobby $hobby)
    {
        $user = Auth::user();

        $user->hobbies()->detach($hobby);

        return back();
    }
}
