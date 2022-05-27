<?php

namespace App\Http\Controllers;

use App\Models\NftWishlist;
use Illuminate\Http\Request;

class NftWishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->nftId || $request->walletAddress) {
            $is_exist = NftWishlist::where([
                'nftId' => $request->nftId,
                'walletAddress' => $request->walletAddress
            ]);

            if ($is_exist->count() == 0) {
                $nftWishlist = new NftWishlist;
                $nftWishlist->nftId          = $request->nftId;
                $nftWishlist->walletAddress  = $request->walletAddress;
                $nftWishlist->save();
    
                $response = [
                    'status' => true
                ];
            } else {
                $response = [
                    'status' => false
                ];
            }

            return json_encode($response);
        } else {
            $response = [
                'status' => false
            ];

            return json_encode($response);
        }
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
     * @param  \App\NftWishlist  $nftWishlist
     * @return \Illuminate\Http\Response
     */
    public function show(NftWishlist $nftWishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NftWishlist  $nftWishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(NftWishlist $nftWishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NftWishlist  $nftWishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NftWishlist $nftWishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NftWishlist  $nftWishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(NftWishlist $nftWishlist)
    {
        //
    }
}
