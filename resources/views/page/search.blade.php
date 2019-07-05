@extends('master')
@section('content')
	 <div class="container-fluid">
    	<div class="container">
    	@if(count($timkiem_product)>0 || count($timkiem_news)>0 )
        <div class="row">
        	@if(count($timkiem_product)>0)
	          <div class="content-product-search col-lg-12">

	            <div class="product-search col-lg-12">
	            	 <h2>TÌM KIẾM <strong>{{$tukhoa}}</strong> </h2>	
	            <p>  Tìm Thấy  {{count($timkiem_product)}} Sản Phẩm</p>
	            <hr>
	              <div class="row">
	              	@foreach ($timkiem_product as $product)
		                <div class="col-lg-4 item">
		                  <div class="item-content">
		                    <p class="text-center"><img src="project1/images/{{$product->image}}" width="100%"height="250px;"></p>
		                    <h4 class="text-center">{{$product->name}}</h4>
		                    <p class="text-center"><a href="{{route('detailproduct',$product->id)}}" >Chi tiêt ></a></p>
		                  </div>
		                </div>
		            @endforeach
	              </div>
	            </div>
	            <div class="paginate">{{$timkiem_product->links()}}</div>
	            <hr>
	          </div>
	        @else
          	@endif
        	@if(count($timkiem_news)>0)
	          <div class="content-product-search col-lg-12">
	           {{--  <h2>TÌM KIẾM {{$tukhoa}} </h2> --}}

	            <div class="product-search col-lg-12">
	            		            <p>  Tìm Thấy  {{count($timkiem_news)}} tin</p>
	            <hr>
	              <div class="row">
	              	@foreach($timkiem_news as $news)
		            <div class="col-lg-4 item">
			            <div class="item-content">
			              <p class="text-center"><img src="project1/images/{{$news->hinh}}" width="100%"height="250px;"></p>
			              <h4 class="text-center">{{$news->tieude}}</h4>
			              <p class="text-center"><a href="{{route('detail_news',$news->id)}}" >Chi tiêt ></a></p>
			            </div>
		          	</div>
		          	@endforeach
	              </div>
	                 <div class="paginate">{{$timkiem_news->links()}}</div>
	            </div>
	          </div>
	          @else 
	        @endif  
        </div>
        @elseif(count($timkiem_product)==0 && count($timkiem_news)==0 ) 
        <h3 class="kq-h3">Không tìm thấy kết quả phù hợp!</h3>
        @endif
      </div>
    </div> 	
@endsection

