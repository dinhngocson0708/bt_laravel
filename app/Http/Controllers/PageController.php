<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;


class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::all();
        // return view('page.trangchu');
        $new_product = Product::all();
        $new_product_array = $new_product -> toArray();
        return view('Page.trangchu',compact('slide','new_product_array'));
    }
}
