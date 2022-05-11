<?php

namespace App\Http\Controllers;

use App\Models\ImageTracking;
use App\Http\Requests\StoreImageTrackingRequest;
use App\Http\Requests\UpdateImageTrackingRequest;

class ImageTrackingController extends Controller
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
     * @param  \App\Http\Requests\StoreImageTrackingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageTrackingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageTracking  $imageTracking
     * @return \Illuminate\Http\Response
     */
    public function show(ImageTracking $imageTracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageTracking  $imageTracking
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageTracking $imageTracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageTrackingRequest  $request
     * @param  \App\Models\ImageTracking  $imageTracking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageTrackingRequest $request, ImageTracking $imageTracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageTracking  $imageTracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageTracking $imageTracking)
    {
        //
    }
}
