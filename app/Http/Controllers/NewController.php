<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
Use App\New1;
use Session;
class NewController extends Controller
{
	public function news()
	{
		// dd('ffs');
	$slides = Slide::all();
    $news = New1::paginate(6);
    // dd('fsfs');
    return view('page.news',compact('slides','news'));	
	}
   public function detail($id)
   {
       $newstKey = 'News1_' . $id;

        // Kiểm tra Session của sản phẩm có tồn tại hay không.
        // Nếu không tồn tại, sẽ tự động tăng trường view_count lên 1 đồng thời tạo session lưu trữ key sản phẩm.
        if (!Session::has($newstKey)) {
            New1::where('id', $id)->increment('luotxem');
            Session::put($newstKey, 1);
        }

   	  $slides = Slide::all();
   	  $news = New1::find($id);
   	  $news_nb = New1::where('id','<>',$id)->orWhere('noibat', 1)->orderBY('id','desc')->take(3)->get();
   	  // dd($news_nb);
   	  return view('page.detail-news',compact('slides','news','news_nb'));
   }

}
