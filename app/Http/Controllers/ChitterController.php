<?php

namespace App\Http\Controllers;

use App\Models\Chitter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Inertia\Inertia;

class ChitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return Inertia::render('Chitters/Index', [

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        $request->user()->chitters()->create($validated);

        return redirect(route('chitter.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Http\Response
     */
    public function show(Chitter $chitter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chitter $chitter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chitter $chitter)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chitter $chitter)
    {
        //
    }
}
