
 <div id="carousel-home-t" class="carousel slide" data-ride="carousel">

            <?php $i=0;?>
            <ol class="carousel-indicators" style="bottom: 114px;">
              @if(isset($slides))
                @foreach ($slides as $slide)
                <li data-target="#carousel-home-t" data-slide-to="{{$i}}"@if($i==0) class="active">@else @endif</li>
                <?php $i++;?>
                @endforeach
              @endif 
            </ol>
                      <div class="test-h test1-h input" id="sidebar-menu">
                <h3 class="close-h" ><span class="test-h-span-h"><i class="fas fa-times-circle"></i> </span>Close</h3>

                <ul class="nav nav-sidebar  nav-vertical nav-uppercase" style="display: inherit">
                  <li>
                     <div class="vi-en" style="position: initial;width: 100%">
                                      <div class="vi">
                                        <p class="text-center"><a href="{!! route('change-language',['vi'])!!}" style="color:#333 ">VI</a></p>
                                      </div>

                                      <div class="en">
                                      <p class="text-center"><a href="{!! route('change-language',['en'])!!}" style="color:#333 ">EN</a></p>
                                      </div>
                                    </div>
                  </li>
                    <li>
                        <form action="{{route('timkiem')}}" class="form-search"  style="    width: 100%;
                                      background: #ececec;
                                      border-radius: 40px;padding-left: 5px;">
                                      @csrf
                                     <input type="text" placeholder="Tìm kiếm.." name="search" style="width: 85%; border: none; border-radius: 40px;  background: none">
                                  <button style="background: none;border: none;" type="submit"> <i class="fas fa-search" aria-hidden="true"></i></button>
                                  </form>
                    </li>
                  
                    <a href="{{route('index')}}"><li  >{{__('SẢN PHẨM')}}</li></a>
                     <a href="{{route('thuonghieu')}}"><li  >{{__('THƯƠNG HIỆU')}}</li></a>
                      <a href="{{route('product')}}"><li  >{{__('SẢN PHẨM')}}</li></a>
                       <a href="{{route('news')}}"><li  >{{__('TIN TỨC')}}</li></a>
                       <a href="{{route('lienhe')}}"><li  >{{__('LIÊN HỆ')}}</li></a>

                </ul>
    
            </div>
            <ol class="carousel-caption col-lg-12" style="padding-right: 50px;padding-left: 50px;width:100%; top: 25px;right:0px;left: 0px;height: 100px">
            <div class="col-lg-12">
               <div class="row">
                    <div class=" col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <a href="{{route('index')}}"><img src="project1/images/logo.png" width="100%"></a>
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <a href="{{route('index')}}" ><img src="project1/images/logo2.png" width="100%"></a>
                            </div>
                          
                        </div>
                    </div>
                     <div class="col-lg-9 col-md-6 col-sm-6 d-lg-none d-xl-block  d-md-none d-sm-none d-none">
                         <div class="row">
                             <div class="col-lg-10 menu" style="line-height: 50px;">
                                <ul class="menu-ul  ">

                                  <li><a href="{{route('index')}}">{{__('TRANG CHỦ')}}</a></li>
                                  <li><a href="{{route('thuonghieu')}}">{{__('THƯƠNG HIỆU')}}</a></li>
                                  <li><a href="{{route('product')}}">{{__('SẢN PHẨM')}}</a></li>
                                  <li><a href="{{route('news')}}">{{__('TIN TỨC')}}</a></li>
                                  <li><a href="{{route('lienhe')}}">{{__('LIÊN HỆ')}}</a></li>
                                </ul>
                                  <form action="{{route('timkiem')}}" class="input form-search" id="form-tk" style="    width: 100%;
                                      background: #fff;
                                      border-radius: 40px">
                                      @csrf
                                     <input type="text" placeholder="Tìm kiếm.." name="search" style="width: 90%;border:none;background: none;">
                                  <button style="background: none;border:none;" type="submit"> <i class="fas fa-search" aria-hidden="true"></i></button>
                                  </form>
                             </div>
                              <div class="col-lg-2 search-vi-en">
                                <div class="row">
                                  <div class="search col-lg-5">
                                                                          
                                          <i  id="search"class="fas fa-search" aria-hidden="true"></i>
                                  </div>
                                  <div class="col-lg-7 vi-en1">
                                    <div class="vi-en">
                                      <div class="vi">
                                        <p><a href="{!! route('change-language',['vi'])!!}" >VI</a> </p>
                                      </div>
                                      <div class="en">
                                      <p><a href="{!! route('change-language',['en'])!!}" >EN</a> </p>
                                      </div>
                                    </div>
                                  </div>
                                 </div>
                              </div>
                         </div>

                     </div>
                    
               
             
               <div class="col-lg-9 col-md-6 col-sm-6 col-6 d-xl-none">
                  <div id="menu-tn" class="header-button" style="float: right;">    
                     <i class="fas fa-bars"></i>
                    </div>
               </div>
         {{--     </div>
           </div> --}}
           </ol>
           {{-- menu co dinh --}}
                       <ol class="carousel-caption col-lg-12  menu-cd" style="padding-right: 50px;padding-left: 50px;width:100%; top: 0px;right:0px;left: 0px; z-index: 100">
            <div class="col-lg-12">
               <div class="row">
                    <div class=" col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <a href="{{route('index')}}"><img src="project1/images/logo.png" width="100%"></a>
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <a href="{{route('index')}}" ><img src="project1/images/logo2.png" width="100%"></a>
                            </div>
                          
                        </div>
                    </div>
                     <div class="col-lg-9 col-md-6 col-sm-6 d-lg-none d-xl-block  d-md-none d-sm-none d-none">
                         <div class="row">
                             <div class="col-lg-10 menu" style="line-height: 50px;">
                                <ul class="menu-ul  ">

                                  <li><a href="{{route('index')}}">{{__('TRANG CHỦ')}}</a></li>
                                  <li><a href="{{route('thuonghieu')}}">{{__('THƯƠNG HIỆU')}}</a></li>
                                  <li><a href="{{route('product')}}">{{__('SẢN PHẨM')}}</a></li>
                                  <li><a href="{{route('news')}}">{{__('TIN TỨC')}}</a></li>
                                  <li><a href="{{route('lienhe')}}">{{__('LIÊN HỆ')}}</a></li>
                                </ul>
                                  <form action="{{route('timkiem')}}" class="input form-search" id="form-tk1" style="    width: 100%;
                                      background: #fff;
                                      border-radius: 40px">
                                      @csrf
                                     <input type="text" placeholder="Tìm kiếm.." name="search" style="width: 90%;border:none;background: none">
                                  <button style="background: none;border:none;" type="submit"> <i class="fas fa-search" aria-hidden="true"></i></button>
                                  </form>
                             </div>
                              <div class="col-lg-2 search-vi-en">
                                <div class="row">
                                  <div class="search col-lg-5">
                                                                          
                                          <i  id="search1"class="fas fa-search" aria-hidden="true"></i>
                                  </div>
                                  <div class="col-lg-7 vi-en1">
                                    <div class="vi-en">
                                      <div class="vi">
                                        <p><a href="{!! route('change-language',['vi'])!!}" >VI</a> </p>
                                      </div>
                                      <div class="en">
                                      <p><a href="{!! route('change-language',['en'])!!}" >EN</a> </p>
                                      </div>
                                    </div>
                                  </div>
                                 </div> 
                              </div>
                         </div>

                     </div>
                     {{-- menu co dinh --}}

                     {{-- //meb  --}}
               
             
               <div class="col-lg-9 col-md-6 col-sm-6 col-6 d-xl-none">
                  <div id="menu-tn1" class="header-button" style="float: right;">    
                     <i class="fas fa-bars"></i>
                    </div>
               </div>
         {{--     </div>
           </div> --}}
           </ol>
            <ol class="carousel-indicators col-lg-6 col-md-6 col-sm-6 col-6 d-lg-none d-xl-block  d-md-none d-sm-none d-none" style="bottom: 330px;">
             
                <img src="project1/images/txt.png" width="100%">
            </ol>
            <ol class="carousel-indicators col-lg-6 col-md-6 col-sm-6 col-6 d-lg-none d-xl-block  d-md-none d-sm-none d-none"  style="bottom: 149px;
            left: 259px;">
               <img src="project1/images/text2.png" width="100%">
               
            </ol>
            <ol class="carousel-indicators col-lg-12 col-md-12 col-sm-12 col-12  " style="margin-right:0px;margin-left: 0px; bottom: -16px">
              <div class="row">
                 <img src="project1/images/2.png" width="100%">
              </div>
           
             
            </ol>
            <div class="carousel-inner">
                 <?php $i=0;?>
              @foreach ($slides as $slide)
              <div class="carousel-item @if($i==0) active @else @endif " >
                  <?php $i++;?>
                <img src="project1/images/{{$slide->image}}" width="100%">

              </div>
              @endforeach

            </div>
            <a class="carousel-control-prev" href="#carousel-home-t" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-home-t" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
     
<script type="text/javascript">
 $(document).ready(function () {
   $('#search').click(function(){
    // $('#form-tk').removeClass('input');
    //     $('.menu-ul').css("display",'none');
      // $('#input').css("display",'blook');  
      
      if ($('#form-tk').hasClass('input')) {
        $('#form-tk').removeClass('input');
        $('.menu-ul').css("display",'none');
      }else{
         $('#form-tk').addClass('input');
         $('.menu-ul').css("display",'');
      }
    
    });
   $('#search1').click(function(){
    // $('#form-tk').removeClass('input');
    //     $('.menu-ul').css("display",'none');
      // $('#input').css("display",'blook');  
      
      if ($('#form-tk1').hasClass('input')) {
        $('#form-tk1').removeClass('input');
        $('.menu-ul').css("display",'none');
      }else{
         $('#form-tk1').addClass('input');
         $('.menu-ul').css("display",'');
      }
    
    });
    $('#menu-tn').click(function(){
      // alert(2222);
      if ($('#sidebar-menu').hasClass('input')) {
        $('#sidebar-menu').removeClass('input');

      }else{
         $('#sidebar-menu').addClass('input');
       
      }
    
    });
        $('#menu-tn1').click(function(){
      // alert(2222);
      if ($('#sidebar-menu').hasClass('input')) {
        $('#sidebar-menu').removeClass('input');

      }else{
         $('#sidebar-menu').addClass('input');
       
      }
    
    });
    $('.close-h').click(function(){
      // alert(2222);
     
         $('#sidebar-menu').addClass('input');
       
      
    
    });
        
    $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.menu-cd').fadeIn();
            } else {
                $('.menu-cd').fadeOut();
            }
        });
    

 
 });

</script>
