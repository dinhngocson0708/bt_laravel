<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Type_product;
use App\Models\Comment;

class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::all();
        // return view('page.trangchu');
        $new_product = Product::where('new',1)->paginate(8);
        $sanpham_khuyenmai=	Product::where('promotion_price','<>',0)->paginate(4);
        return view('Page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
       
    }
    public function getDetail(Request $request){
        $sanpham=Product::where('id',$request->id)->first();
        $splienquan=Product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);
        $comment=Comment::where('id_product',$request->id)->first();
        return view('page.chitiet_sanpham',compact('sanpham','splienquan','comment'));
    }

    public function getLoaiSp($type)
    {
        
        $sp_theoloai=Product::where('id_type',$type)->get();
        $sp_khac=Product::where('id_type','<>',$type)->paginate(3);

        $loai=Type_product::all();
        $loai_sp=Type_product::where('id',$type)->first();

        return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
}
