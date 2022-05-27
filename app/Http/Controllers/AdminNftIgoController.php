<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nftigo;
use Sentinel;

class AdminNftIgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$nftigos = Nftigo::get();
    	return view('admin.nft-igo.index', compact('nftigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.nft-igo.create');
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
        $nftigo->nftId          = $request->nftId;
        $nftigo->name           = $request->name;
        $nftigo->price          = $request->price;
        $nftigo->supply         = $request->supply;
        $nftigo->dividend       = $request->dividend;
        $nftigo->endDate        = $request->endDate;
        $nftigo->description    = $request->description;
        $nftigo->save();

        return response()->json(['url'=>url('/admin-nftigo/create')]);
    }

    public function uploadNftImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file ;

            $destinationPath = 'assets/nft/images/nftigo';

            $fileName = time() . '_' . rand('1000','99999') . '_' . $files->getClientOriginalName();

            $fileName=urlencode($fileName);

            $files->move(public_path($destinationPath), $fileName);

            $response = [
                'status' => true,
                'fileName' => $fileName
            ];

            return json_encode($response);
        } else {
            $response = [
                'status' => false
            ];

            return json_encode($response);
        }
        
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
