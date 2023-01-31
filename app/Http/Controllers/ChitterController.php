<?php

namespace App\Http\Controllers;

use App\Models\Chitter;
use Illuminate\Http\Request;

class ChitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hello world';
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chitter  $chitter
     * @return \Illuminate\Http\Response
     */
    public function show(Chitter $chitter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chitter  $chitter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chitter $chitter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chitter  $chitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chitter $chitter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chitter  $chitter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chitter $chitter)
    {
        //
    }
}
