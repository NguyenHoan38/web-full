@extends('master')
@section('content')
  <section class="container ">
	  <div class="row">
       
        <div class=" col-lg-6 col-md-12 col-sm-12 story">
           @if(Session::get('website_language')=='vi')
          <p class="Title">{!!$trademark[0]['tieude']!!}</p>
          {!!$trademark[0]['noidung']!!}
          @else
          <p class="Title">{!!$trademark[0]['tieude_en']!!}</p>
          {!!$trademark[0]['noidung_en']!!}
          @endif
          <a href="{{route('thuonghieu')}}">{{__('Chi tiết')}}</a>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  content-right">
          <div class="col-lg-12 content-right-title">
            <div class="row">
              <div class=" col-lg-3 col-md-4 col-sm-4"><img src="project1/images/la.png" width="100%" height="60px"></div>
              <div class=" col-lg-9 col-md-8 col-sm-8s ">
                @if(Session::get('website_language')=='vi')
                  {!!$trademark[0]['mota']!!}
                 @else
                   {!!$trademark[0]['mota_en']!!}
                 @endif 
              </div>
            </div>
          </div>
          <div class="row">
         

            <div class="col-lg-12 content-right"><img src="project1/images/{{$trademark[0]['image']}}" width="100%"></div>

          </div>  
        </div>
        <div class="col-lg-12">
          <div class="row">
           <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="col-lg-12">
                <img src="project1/images/banhkem.png" width="100%">
                <p class="text-center Title">{{__('NHỎ NHƯNG')}} <br> <span>{{__('Bền vững')}}</span></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="content-right-menu" >
                  <ul>
                    <li>{{__('Kiến thức và chuyên môn sâu sắc')}}</li>
                    <li>{{__('Kinh nghiệm vững vàng')}}</li>
                    <li>{{__('Nỗ lực không ngừng cải tiến và khác biệt')}}</li>
                    <li>{{__('Con người tâm huyết')}}</li>
                    <li>{{__('Quản trị hiệu quả')}}</li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 detail" style="">
          <div class="row">
            @if(Session::get('website_language')=='vi')
              <div class="col-lg-3 col-md-6 col-sm-12 detail1">
               <h3 class="text-center" >{{$products[3]['name']}}</h3>
               <img class=" detail1-img d-lg-none d-xl-block  d-md-none d-sm-none d-none" src="project1/images/detail-n.png" >
               <div class="detail3-border d-lg-block d-xl-none  d-md-none d-sm-none d-none"></div>
               <p class="text-center"><a href="{{route('detailproduct',$products[3]['id'])}}"><img  class=" detail1-img1" src="project1/images/{{$products[3]['image']}}" width="detailproduct222px" height="222px"></a></p>
              </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail2">
              <h3 class="text-center" >{{$products[2]['name']}}</h3>
              <div class="detail2-border d-lg-block d-xl-block  d-md-none d-sm-none d-none"></div>
              <p class="text-center"><a href="{{route('detailproduct',$products[2]['id'])}}"><img src="project1/images/{{$products[2]['image']}}" width="222px" height="222px"></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail3">
              <h3 class="text-center" >{{$products[1]['name']}}</h3>
              <div class="detail3-border d-lg-block d-xl-block  d-md-none d-sm-none d-none"></div>
              <p class="text-center"><a href="{{route('detailproduct',$products[1]['id'])}}"><img class=" detail3-img-ct" src="project1/images/{{$products[1]['image']}}" width="222px" height="222px"></a></p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail4">
              <h3 class="text-center" >{{$products[0]['name']}}</h3>
              <div class="detail4-border d-lg-block d-xl-block  d-md-none d-sm-none d-none"></div>
               <p class="text-center"><a href="{{route('detailproduct',$products[0]['id'])}}"><img class="" src="project1/images/{{$products[0]['image']}}" width="222px" height="222px"></a></p>
              
             
            </div>
            @else
              <div class="col-lg-3 col-md-6 col-sm-12 detail1">
               <h3 class="text-center" >{{$products[3]['name_en']}}</h3>
               <img class=" detail1-img d-lg-none d-xl-block  d-md-none d-sm-none d-none" src="project1/images/detail-n.png" >
               <div class="detail3-border d-lg-block d-xl-none  d-md-none d-sm-none d-none"></div>
               <p class="text-center"><a href="{{route('detailproduct',$products[3]['id'])}}"><img  class=" detail1-img1" src="project1/images/{{$products[3]['image']}}" width="detailproduct222px" height="222px"></a></p>
              </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail2">
              <h3 class="text-center" >{{$products[2]['name_en']}}</h3>
              <div class="detail2-border d-lg-block d-xl-block  d-md-none d-sm-none d-none"></div>
              <p class="text-center"><a href="{{route('detailproduct',$products[2]['id'])}}"><img src="project1/images/{{$products[2]['image']}}" width="222px" height="222px"></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail3">
              <h3 class="text-center" >{{$products[1]['name_en']}}</h3>
              <div class="detail3-border d-lg-block d-xl-block  d-md-none d-sm-none d-none"></div>
              <p class="text-center"><a href="{{route('detailproduct',$products[1]['id'])}}"><img class=" detail3-img-ct" src="project1/images/{{$products[1]['image']}}" width="222px" height="222px"></a></p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail4">
              <h3 class="text-center" >{{$products[0]['name_en']}}</h3>
              <div class="detail4-border d-lg-block d-xl-block  d-md-none d-sm-none d-none"></div>
               <p class="text-center"><a href="{{route('detailproduct',$products[0]['id'])}}"><img class="" src="project1/images/{{$products[0]['image']}}" width="222px" height="222px"></a></p>
              
             
            </div>
            @endif
          </div>  
        </div>
        <div class="container  index-news">
          <div class="row">
          <div class=" col-lg-6 col-md-12 col-sm-12 col-12  news">
            <div class="row">
                          <div class=" col-lg-2 col-md-2 col-sm-2 col-2" ><img src="project1/images/la.png" width="100%"></div>
            <div class="ol-lg-10 col-md-10 col-sm-10 col-10"><h3>{{__('TIN TỨC')}}</h3></div>
                @if(isset($news))
                  @foreach($news as $new)
                    <div class="col-lg-12 news-title">
                      @if(Session::get('website_language')=='vi')
                      <h5>{{$new->tieude}}</h5>
                      <p>{{$new->mota}}</p>
                      @else
                      <h5>{{$new->tieude_en}}</h5>
                      <p>{{$new->mota_en}}</p>
                      @endif
                      <ul style="display: table-footer-group;">
                        <li style="display: initial; margin-right: 30px"><i class="far fa-calendar-alt"></i> {{$new->created_at}}</li>
                        <li style="display: initial;"><a href="{{route('detail_news',$new->id)}}">{{__('Xem tiếp')}}   >></a> </li>
                      </ul >
                      <hr style="background: #80bf42;;">
                    </div>
                  @endforeach
                @endif
          <div class="paginate">{{$news->links()}}</div>
          </div>
            </div>

          <div class="col-lg-6 col-md-12 col-sm-12 col-12 news-image">
            <div class="row">
              <div class="news-image-bottom">
              <a href="{{route('detail_news',$news_view[0]['id'])}}" ><img src="project1/images/{{$news_view[0]['hinh']}}" width="100%"></a>
              </div>
              @if(Session::get('website_language')=='vi')
              <h3 style="padding-top: 10px;">{{$news_view[0]['tieude']}}</h3>
              @else
                <h3 style="padding-top: 10px;">{{$news_view[0]['tieude_en']}}</h3>
                @endif
              <ul>
                <li><i class="fas fa-eye"></i> {{$news_view[0]['luotxem']}} {{__('lượt xem')}} </li>
                <li><i class="fab fa-facebook-f"></i> 114 {{__('chia sẻ')}}</li>
                <li><i class="far fa-clock"></i> {{$news_view[0]['created_at']}}</li>
              </ul>
            </div>

          </div>
        </div>
        </div>
        <div class="container  management">
          <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 management1">
            <div class="row">
              <div class="col-lg-8 col-lg-7 col-md-7 col-sm-7 col-7">
                <img src="project1/images/ceo1.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br> {{__('CEO Công ty BĐS ABC')}} </p>
                </div>
           
               

              </div>
              <div class="col-lg-4 col-md-5 col-sm-5 col-5  management1-title ">
                
                <p> {{__('Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải')}}</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 management2">
            <div class="row">
              <div class="col-lg-8 col-lg-7 col-md-7 col-sm-7 col-7">
                <img src="project1/images/ceo2.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>{{__('CEO Công ty BĐS ABC')}} </p>
                </div>
           
               

              </div>
              <div class="col-lg-4 col-md-5 col-sm-5 col-5 management1-title2 ">
                
                <p> {{__('Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải')}}</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 management3">
            <div class="row">
              <div class=" col-lg-8 col-md-7 col-sm-7 col-7 ">
                <img src="project1/images/ceo5.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>{{__('CEO Công ty BĐS ABC')}} </p>
                </div>
           
               

              </div>
              <div class="col-lg-4 col-lg-4 col-md-5 col-sm-5 col-5  management1-title3 ">
                
                <p> {{__('Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải')}}</p>
                
              </div>
            </div>
          </div>
          </div>


        </div>
      </div>
    </section>  
@endsection
