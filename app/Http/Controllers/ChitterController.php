<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChitterPostRequest;
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
    public function index(): \Inertia\Response
    {
        return Inertia::render('Chitters/Index', [
            'chitters' => Chitter::with('user:id,name')->latest()->get()
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
     */
    public function store(ChitterPostRequest $request): Redirector|RedirectResponse|Application
    {
        $validated = $request->validated();

        $request->user()->chitters()->create($validated);

        return redirect(route('chitter.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ChitterPostRequest $request, Chitter $chitter): Redirector|Application|RedirectResponse
    {
        $this->authorize('update', $chitter);

        $validated = $request->validated();

        $chitter->update($validated);

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
