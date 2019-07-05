@extends('master')
@section('content')
	        <div class="container-fluid d">

            <div class="container d">
                <div class="row">
                    <div class="container-gallary-d">
                    	@if(isset($news ))
                    		@foreach($news as $new)
		                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 test1-h">
		                            <div class="box-gallary-d">
		                                <div class="imgBox-gallary-d">
		                                    <img src="project1/images/{{$new->hinh}}" width="100%" height="100%">
		                                </div>
		                                <div class="content-gallary-d">
                                            @if(Session::get('website_language')=='vi')
		                                    <h2>{{$new->tieude}}</h2>
		                                    <p style="margin-bottom: 20px">{{$new->mota}}  </p>
                                            @else
                                            <h2>{{$new->tieude_en}}</h2>
                                            <p style="margin-bottom: 20px">{{$new->mota_en}}  </p>
                                            @endif
		                                    <p class="btn"><a href="{{route('detail_news',$new->id)}}">{{__('xem tin')}}</a></p>
		                                </div>
		                            </div>
		                        </div>
		                        @endforeach
  						@endif

                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination" >
                             {{ $news->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </dih >
@endsection