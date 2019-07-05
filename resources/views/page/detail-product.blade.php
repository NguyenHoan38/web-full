@extends('master')
@section('content')
<section >
      <div class="container">
        <div class="col-lg-12 detail-product">
         <ul>
           <li> <a href="{{route('index')}}" >{{__('TRANG CHỦ')}} </a>
          </li>
            <li>></li>
            <li> {{__('CHI TIẾT SẢN PHẨM')}} :
              @if(Session::get('website_language')=='vi')
               {{$chitiet->name}}
               @else {{$chitiet->name_en}}
               @endif
            </li>
          </ul>
           <hr>

          <div class="row">
            <div class="col-lg-5 detail-product-img">
              <img src="project1/images/{{$chitiet->image}}" width="100%" height="300px">
            </div>
            <div class="col-lg-7">
              @if(Session::get('website_language')=='vi')
              <h4>{{$chitiet->name}}</h4>
              <p>{!!$chitiet->description!!}</p>
              @else
              <h4>{{$chitiet->name_en}}</h4>
              <p>{!!$chitiet->description_en!!}</p>
              @endif
            </div>
          
          </div>
            <hr>
        </div>
      <div class="product-nb">
        <h5><i class="fab fa-product-hunt"></i> {{__('Các sản phẩm khác')}} </h5>
        <div class="sidebar-content">
          <div class="row">
          @if(isset($splq))
          	@foreach($splq as $lp)
	          <div class="col-lg-4 item">
	            <div class="item-content">
	              <p class="text-center"><img src="project1/images/{{$lp->image}}" width="100%"height="250px;"></p>
                 @if(Session::get('website_language')=='vi')
	                 <h4 class="text-center name-product">{{$lp->name}}</h4>
                 @else
                     <h4 class="text-center name-product">{{$lp->name_en}}</h4>
                 @endif    
	              <p class="text-center"><a href="{{route('detailproduct',$lp->id)}}" >{{__('Chi tiết')}}  </a></p>
	            </div>
	          </div>
	         @endforeach 
	       @endif
          <hr>    
        </div>
       </div>

    </section>
@endsection