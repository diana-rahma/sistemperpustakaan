<?php

namespace App\Http\Controllers;

use App\Models\ko;
use App\Http\Requests\StorekoRequest;
use App\Http\Requests\UpdatekoRequest;

class KoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorekoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ko  $ko
     * @return \Illuminate\Http\Response
     */
    public function show(ko $ko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ko  $ko
     * @return \Illuminate\Http\Response
     */
    public function edit(ko $ko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekoRequest  $request
     * @param  \App\Models\ko  $ko
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekoRequest $request, ko $ko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ko  $ko
     * @return \Illuminate\Http\Response
     */
    public function destroy(ko $ko)
    {
        //
    }
}
