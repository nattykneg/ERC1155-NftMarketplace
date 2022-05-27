<?php

namespace App\Http\Controllers;

use App\Models\Nftigo;
use App\Models\NftView;
use App\Models\NftWishlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NftController extends Controller
{
    public function getNftExplore()
    {
        // wishlist total count == wlTotalCnts
        $wlTotalCnts = NftWishlist::select('nftId', DB::raw('count(*) as count'))
                                ->groupBy('nftId')
                                ->get();
        // all wishlist == wlAll
        $wlAll = NftWishlist::get();
        return view('frontend.nft-igo.index', compact('wlTotalCnts', 'wlAll'));
    }
    
    public function getNftDetail($nftId)
    {
        // view total count
        $viewTotalCnts = NftView::select('nftId', DB::raw('count(*) as count'))
                            ->where('nftId', $nftId)
                            ->groupBy('nftId')
                            ->get();
        // wishlist total count == wlTotalCnts
        $wlTotalCnts = NftWishlist::select('nftId', DB::raw('count(*) as count'))
                                ->groupBy('nftId')
                                ->get();
        // all wishlist == wlAll
        $wlAll = NftWishlist::get();
        $nftigo = Nftigo::where('nftId', $nftId)->first();
        return view('frontend.nft-igo.nft-detail', compact('wlTotalCnts', 'wlAll', 'nftigo', 'viewTotalCnts'));
    }
    
    public function getWalletDetail($walletId)
    {
        // wishlist total count == wlTotalCnts
        $wlTotalCnts = NftWishlist::select('nftId', DB::raw('count(*) as count'))
                                ->groupBy('nftId')
                                ->get();
        // all wishlist == wlAll
        $wlAll = NftWishlist::get();
        return view('frontend.nft-igo.wallet-detail', compact('wlTotalCnts', 'wlAll', "walletId"));
    }
}
