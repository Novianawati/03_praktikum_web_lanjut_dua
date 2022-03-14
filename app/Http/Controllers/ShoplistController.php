<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoplist;

class ShoplistController extends Controller
{
    public function w(){
        $data = Shoplist::all();
        
        return view('wishlist', ['barang' => $data]);
    }
    
}
