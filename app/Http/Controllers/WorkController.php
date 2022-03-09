<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works = Auth::user()->works;

        $schools = Auth::user()->educations()->where('type', 'school')->get();

        $highSchools = Auth::user()->educations()->where('type', 'high school')->get();

        $universities = Auth::user()->educations()->where('type', 'university')->get();

        return view('profile.works.create', [
            'works' => $works,
            'schools' => $schools,
            'highSchools' => $highSchools,
            'universities' => $universities,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => ['required', 'string', 'max:30'],
            'position' => ['required', 'string', 'max:50'],
            'city' => ['nullable', 'string', 'max:25'],
            'description' => ['nullable', 'string'],
            'year' => ['nullable', 'date_format:Y'],
            'status' => ['required', 'boolean'],
        ]);

        Auth::user()->works()->create($validated);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('profile.works.edit', [
            'work' => $work
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $validated = $request->validate([
            'company' => ['required', 'string', 'max:30'],
            'position' => ['required', 'string', 'max:50'],
            'city' => ['nullable', 'string', 'max:25'],
            'description' => ['nullable', 'string'],
            'year' => ['nullable', 'date_format:Y'],
            'status' => ['required', 'boolean'],
        ]);

        $work->update($validated);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work->delete();

        return back();
    }
}
