@extends('master')
@section('content')
	<section style="padding-top: 20px">
	   <div class="container product-content">
        <div class="row">
        	@if(isset($products))
        		@foreach ($products as $product)
            @if(Session::get('website_language')=='vi')
            	<div class="col-lg-4 item">
		            <div class="item-content">
		              <p class="text-center"><img src="project1/images/{{$product->image}}" width="100%"height="250px;"></p>
		              <h4 class="text-center">{{$product->name}}</h4>
		              <p class="text-center"><a href="{{route('detailproduct',$product->id)}}" >{{__('Chi tiết')}} </a></p>
		            </div>
		          </div>
            @else
              <div class="col-lg-4 item">
                <div class="item-content">
                  <p class="text-center"><img src="project1/images/{{$product->image}}" width="100%"height="250px;"></p>
                  <h4 class="text-center">{{$product->name_en}}</h4>
                  <p class="text-center"><a href="{{route('detailproduct',$product->id)}}" >{{__('Chi tiết')}} </a></p>
                </div>
              </div>   
            @endif  
		        @endforeach  
          @endif
          <div class="row text-center col-lg-12">
              <div class="col-lg-12">
                  <ul class="pagination" >
                   {{ $products->links()}}
                  </ul>
              </div>
          </div>
        </div>
      </div> <!-- dong the container -->
    </section>	  
@endsection