<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $address = Auth::user()->address;

        return view('profile.address.create', [
            'address' => $address
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        # validation (customized validation error message and attribute name)
        $validated = $request->validate([
            'address' => 'required|string',
            'city' => 'nullable|string',
            'zip' => 'required|string',
            'status' => 'required|boolean',
        ], [
            'address.required' => 'Please enter your address here.'
        ], [
            'zip' => 'postal code'
        ]);


        # update user address
        Auth::user()->address()->updateOrCreate(
            [
                'user_id' => Auth::id(),
            ],
            $validated
        );

        return back();
    }

}
