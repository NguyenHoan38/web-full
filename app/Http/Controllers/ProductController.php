<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;

class ProductController extends Controller
{
   public function product()
   {
    $slides = Slide::all();
   	$products = Product::paginate(3);
   	return view('page.product',compact('products','slides'));
   }
   public function detail($id)
   {
   	$slides = Slide::all();
   	$chitiet = Product::find($id);
   	$splq = product::where('id','<>',$id)->orderBY('id','desc')->take(3)->get();
   	// dd($splq);
   	return view('page.detail-product',compact('slides','chitiet','splq'));
   }
}
