<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nftigo;
use App\Models\Nftprice;
use Sentinel;
use DateTime;

class AdminNftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$nfts = Nftigo::with('user')
            ->where('is_igo', false)    
            ->get();
    	return view('admin.nft.index', compact('nfts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nftprice = Nftprice::first();
        return view('admin.nft.create', compact('nftprice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Sentinel::getUser();

        $nftigo = new Nftigo;
        $nftigo->name            = $request->name;
        $nftigo->start_date_time = new DateTime();
        $nftigo->end_date_time   = new DateTime();
        $nftigo->currency        = $request->currency;
        $nftigo->about           = $request->about;
        $nftigo->stats           = $request->stats;
        $nftigo->price           = $request->price;
        $nftigo->nftId           = $request->nftId;
        $nftigo->created_by      = $user->id;
        $nftigo->save();

        return response()->json(['url'=>url('/admin-nft/create')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNftPrice(Request $request)
    {
        $nftprice = new Nftprice;
        $nftprice->price = $request->nftprice;
        $nftprice->save();

        return redirect('admin-nft/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNftPrice(Request $request)
    {
        $nftprice = Nftprice::where('id', $request->priceId)->first();
        $nftprice->price = $request->nftprice;
        $nftprice->save();

        return redirect('admin-nft/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
