<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\New1;
use App\Contact;
use App\Contact_info;
use App\Trademark;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\ProductRequest;
class AdminContronller extends Controller
{
    public function admin()
    {
        return view('admin-news.index');
    }
    public function product()
    {
    	$products = Product::all();
    	return view('admin-news.product.all',compact('products'));
    }

    public function getaddproduct()
    {

    	return view('admin-news.product.add');
    }
    public function postaddproduct(ProductRequest $request)
    {
    	$product = new Product;
    	$product->name = $request->title_vi;
    	$product->description = $request->summary_vi;
        $product->name_en = $request->title_en;
        $product->description_en = $request->summary_en;
        $file = $request->thumbnail;
    	$product->image = $file->getClientOriginalName();
		$file->move('project1/images', $file->getClientOriginalName());
    	$product->save();

    	return view('admin-news.product.add');
    }
    
 
    public function geteditproduct($id)
    {
    	$product = Product::find($id);
    	return view('admin-news.product.edit',compact('product'));
    }
    public function posteditproduct(ProductRequest $request,$id)
    {

    	$product = 	Product::find($id);

    	$product->name = $request->title_vi;
    	$product->description = $request->summary_vi;
        $product->name_en = $request->title_en;
        $product->description_en = $request->summary_en;
    	if (isset($request->thumbnail)) {
    		
    		 $file = $request->thumbnail;
    		
			$product->image = $file->getClientOriginalName();

			$file->move('project1/images', $file->getClientOriginalName());
    	}else{
    			// dd('hghch');
    		$product->image = $product->image;
    	}
    	
    	$product->save();
    	// dd('hfgdg');
    	return redirect('admin/product');
    }
    public function deleteproduct($id) 
    {
    	$product = 	Product::find($id);
    	$product->delete();
    	return redirect()->back();
    }
    
   // slide
   	public function slide()
   	{
   		$slides = Slide::all();
   		return view('admin-news.slide.all',compact('slides'));
   	}
   	    public function getaddslide()
    {

    	return view('admin-news.slide.add');
    }
    public function postaddslide(Request $request)
    {
    	$slide = new Slide;
    	$file = $request->thumbnail;
    	$slide->image = $file->getClientOriginalName();
		$file->move('project1/images', $file->getClientOriginalName());
    	$slide->save();
    	return redirect('admin/slide');
    }
    
  
    public function geteditslide($id)
    {
    	$slide = slide::find($id);
    	return view('admin-news.slide.edit',compact('slide'));
    }
    public function posteditslide(Request $request,$id)
    {

    	$slide = 	Slide::find($id);

    	if (isset($request->thumbnail)) {
    		
    		 $file = $request->thumbnail;
    		
			$slide->image = $file->getClientOriginalName();

			$file->move('project1/images', $file->getClientOriginalName());
    	}else{
    			// dd('hghch');
    		$slide->image = $slide->image;
    	}
    	
    	$slide->save();
    	// dd('hfgdg');
    	return redirect('admin/slide');
    }
    public function deleteslide($id) 
    {
    	$slide = Slide::find($id);
    	$slide->delete();
    	return redirect()->back();
    }
    //news
    public function news()
    {
    	$news = New1::all();
    	// dd($news);
    	return view('admin-news.news.all',compact('news'));
    }
    public function getaddnews()
    {

    	return view('admin-news.news.add');
    }
    public function postaddnews(NewsRequest $request)
    {
        // dd('dsdsdsd');
    	$news = new New1;
    	$news->tieude = $request->title_vi;
    	// dd($request->title_vi);	
    	$news->mota = $request->summary_vi;
       	$news->noidung = $request->data_vi;
       	// dd( $request->data_vi);
        $news->tieude_en = $request->title_en;
        // dd($request->title_en);  
        $news->mota_en = $request->summary_en;
        $news->noidung_en = $request->data_en;
        // dd( $request->data_vi);
    	$file = $request->thumbnail;
    	// dd($file);
    	$news->hinh = $file->getClientOriginalName();
		$file->move('project1/images', $file->getClientOriginalName());
		$news->noibat = $request->feature_status;
    	$news->luotxem = 0;

    	$news->save();
    	return redirect('admin/news');
    }
    
  
    public function geteditnews($id)
    {
        // dd('fsffsfs');
    	$news = New1::find($id);
        // dd($news);
    	return view('admin-news.news.edit',compact('news'));
    }
    public function posteditnews(NewsRequest $request,$id)
    {

    	$news = 	New1::find($id);

    	$news->tieude = $request->title_vi;
    	$news->mota = $request->summary_vi;
    	$news->noidung = $request->data_vi;
        // dd($request->data_vi);
        $news->tieude_en = $request->title_en;
        // dd($request->title_en);  
        $news->mota_en = $request->summary_en;
        $news->noidung_en = $request->data_en;
    	if (isset($request->thumbnail)) {
    		
    		 $file = $request->thumbnail;
    		
			$news->hinh = $file->getClientOriginalName();

			$file->move('project1/images', $file->getClientOriginalName());
    	}else{
    			// dd('hghch');
    		$news->hinh = $news->hinh;
    	}
    	$news->noibat = $request->feature_status;
    	// $news->luotxem = 0;
    	$news->save();
    	
        // return with('thanh cong');
    	return redirect('admin/news');
    }
    public function deletenews($id) 
    {
    	$news = 	New1::find($id);
    	$news->delete();
    	return redirect()->back();
    }
    public function test()
    {
        return view('layouts.admin');
    }

    public function allcontact()
    {
        $contact = Contact::all();
        return view('admin-news.contact.lienhe.all',compact('contact'));

    }


  public function geteditcontact()
  {
    $contacts = Contact::all();
    // dd($contact);
    return view('admin-news.contact.edit',compact('contacts'));
  }
  public function posteditcontact(Request $request,$id)
  { 
    $contact = Contact::find($id);
    $contact->address = $request->address;
    $contact->Hotline = $request->Hotline;
    $contact->Phone = $request->Phone;
    $contact->email = $request->email;
    $contact->web = $request->web;
    // dd($request->web);
    $contact->save();
    return with('thanh cong');
  }
  public function contact(Request $request)
  {
    $contact = new Contact_info;
    // dd('fzf');
    $contact->name =$request->name;

    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->address = $request->address;
    $contact->note = $request->note;
      // dd('fzfzf');
    $contact->save();

   return redirect()->back();
  }
  public function contactall()
  {
    $contacts = Contact_info::all();
    return view('admin-news.contact.all',compact('contacts'));
  }
  public function allthuonghieu()
  {
    $trademark =  Trademark::all();
    return view('admin-news.thuonghieu.all',compact('trademark'));
  }
  public function geteditthuonghieu($id)
  {
    $trademark = Trademark::find($id);
    return view('admin-news.thuonghieu.edit',compact('trademark'));
  }
    public function posteditthuonghieu(Request $request,$id)
    {

    $trademark = Trademark::find($id);
     $trademark->tieude = $request->title_vi;
      $trademark->mota = $request->summary_vi;
      $trademark->noidung = $request->data_vi;
     $trademark->tieude_en = $request->title_en;
      $trademark->mota_en = $request->summary_en;
      $trademark->noidung_en = $request->data_en;
        if (isset($request->thumbnail)) {
            
             $file = $request->thumbnail;
            
            $trademark->image = $file->getClientOriginalName();

            $file->move('project1/images', $file->getClientOriginalName());
        }else{
                // dd('hghch');
            $trademark->image = $trademark->image;
        }
    // dd('hjfhfh');
      $trademark->save();
     return redirect('admin/thuonghieu');
    }
    public function searchnews(Request $request)
    {
         $tukhoa = $request->name;
        $searchnews = New1::where('tieude','like',"%$tukhoa%")->orWhere('id',$tukhoa)->paginate(6);
      return view('admin-news.news.search',compact('searchnews'));  
        
    }
    public function searchproduct(Request $request)
    {
         $tukhoa = $request->name;
        $searchproduct = Product::where('name','like',"%$tukhoa%")->orWhere('id',$tukhoa)->paginate(6);
        dd($searchproduct);
      return view('admin-news.product.search',compact('searchproduct'));  
        
    }      
//       public function timkiem(Request $request)
//    {
//     $slides = Slide::all();
//     $tukhoa = $request->search;
//     // dd($tukhoa);
//     $timkiem_product = Product::where('name','like',"%$tukhoa%")->orWhere('id',$tukhoa)->paginate(6);
 
//     $timkiem_news = New1::where('tieude','like',"%$tukhoa%")->paginate(6);
// // dd( $timkiem_news);
//     return view('page.search',compact('timkiem_product','timkiem_news','tukhoa','slides'));  
   // }
}
