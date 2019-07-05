<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\New1;	
use Session;
use App\Trademark;
class PageController extends Controller
{
   public function master()
   {
   	return view('master');
   }
   public function index()
   {
   	$slides = Slide::all();
     // var_dump(Session::get('website_language'));
   	$products = Product::orderBY('id','desc')->take(4)->get();
  	$news = New1::orderBY('id','desc')->paginate(4);
    $news_view = New1::orderBY('luotxem','desc')->take(1)->get();
    $trademark = Trademark::all();
   	return view('page.index',compact('slides','news','products','news_view','trademark'));
   }
 
   public function lienhe()
   {
    $slides = Slide::all();
    return view('page.lienhe',compact('slides'));
   }
   public function thuonghieu()
   {
    $trademark = Trademark::all();
    // dd($trademark);
    $slides = Slide::all();
    return view('page.thuonghieu',compact('slides','trademark'));
   }
  public function timkiem(Request $request)
   {
    $slides = Slide::all();
    $tukhoa = $request->search;
    // dd($tukhoa);
    $timkiem_product = Product::where('name','like',"%$tukhoa%")->paginate(6);
    
    $timkiem_news = New1::where('tieude','like',"%$tukhoa%")->paginate(6);
// dd( $timkiem_news);
    return view('page.search',compact('timkiem_product','timkiem_news','tukhoa','slides'));  
   }
    public function changelanguage($language)
    {
      Session::put('website_language',$language);
      return redirect()->back();
    }

}
