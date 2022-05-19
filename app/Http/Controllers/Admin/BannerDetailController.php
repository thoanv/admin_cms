<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannerDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerDetailRequest;
use App\Http\Requests\UpdateBannerDetailRequest;

class BannerDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBannerDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerDetail  $bannerDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BannerDetail $bannerDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerDetail  $bannerDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerDetail $bannerDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerDetailRequest  $request
     * @param  \App\Models\BannerDetail  $bannerDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerDetailRequest $request, BannerDetail $bannerDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerDetail  $bannerDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerDetail $bannerDetail)
    {
        //
    }
}
