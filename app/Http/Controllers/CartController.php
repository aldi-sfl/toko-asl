<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    //
    public function cartindex($id)
    {
        # code...
        
        $product = product::find($id);
        return view('cart.cart', compact('product'));
    }
}
