<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service extends Controller
{
    public function index(){
        $product = array();
            for($i = 1; $i<10; $i++){
                $product = array(
                "productName" => "product" .+$i,
                "productId" => $i
                );
                $products[] = (object)$product;
            }
        
        
        return view('product')->with('products', $products);
    }

}
