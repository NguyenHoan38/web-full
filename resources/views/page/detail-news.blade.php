@extends('master')
@section('content')
<div class="container">
    	<div class="detail-new col-lg-12">
            @if(Session::get('website_language')=='vi')
    		<h4>{{$news->tieude}}</h4>
    		<p>{{$news->mota}}</p>
    		<img src="project1/images/{{$news->hinh}}" width="100%">
    		<span><i class="far fa-clock"></i>{{__('Đăng lúc')}} :{{$news->created_at}}</span>
    		<br>
    		{!!$news->noidung!!}
            @else 
            <h4>{{$news->tieude_en}}</h4>
            <p>{!!$news->mota_en!!}</p>
            <img src="project1/images/{{$news->hinh}}" width="100%">
            <span><i class="far fa-clock"></i> {{__('Đăng lúc')}}:{{$news->created_at}}</span>
            <br>
            {!!$news->noidung_en!!}
            @endif
    		<hr>    		

    	</div>
    	<div class="sidebar">
    		<h1><i class="fas fa-newspaper"></i> {{__('Tin nôi bật')}} </h1>
    		@if(isset($news_nb))
    			@foreach ($news_nb as $nbt)
	    		<div class="sidebar-content">
	    			<div class="row">
	    				<div class="col-lg-3"><a href="{{route('detail_news',$nbt->id)}}"><img src="project1/images/{{$nbt->hinh}}" width="100%" height="170px"></a>
                        </div>
	    				<div class="col-lg-9 sidebar-content-text ">
                            @if(Session::get('website_language')=='vi')
	    					<h4>{{$nbt->tieude}}</h4>
	    					<span>Đăng lúc:{{$nbt->created_at}}</span>
	    					<p>{!!$nbt->mota!!}</p>
                            @else
                            <h4>{{$nbt->tieude_en}}</h4>
                            <span>Đăng lúc:{{$nbt->created_at}}</span>
                            <p>{!!$nbt->mota_en!!}</p>
                            @endif
	    				</div>
	    			</div>
	    			<hr>		
	    		</div>
	    		@endforeach
 			@endif
    	
    		</div>    		    		
    	</div>
    </div>
@endsection