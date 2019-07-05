@extends('master')
@section('content')
<section class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 map">
            <div style="width: 100%">
              
            </div>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.390969012019!2d105.79421634986647!3d20.976959394853438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acdad98f9c19%3A0x31cfe13242898ece!2zMzA0IENoaeG6v24gVGjhuq9uZywgUC4gVsSDbiBRdcOhbiwgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1562165572810!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen width="100%"></iframe>
          </div>
          <div class="col-lg-6">
            <div class="col-lg-12 info1">
            <div class="row">
              <div class="col-lg-3">
                <img src="project1/images/lgfooter3.png" alt="" width="100%">
              </div>
              <div class="col-lg-9">
                <p> <strong>{{__('Địa chỉ')}}:</strong>  79 Trương Định, P.Bến Thành, Quận 1, Tp Hồ Chí Minh.</p>
                <p><strong>Hotline: </strong>0913.83.95.92</p>
                <p><strong>{{__('Điện thoại')}}: </strong>0122.167.821 – 0122.167.922</p>
                <p><strong>Email: </strong>info@thietkewebthuonghieu.com</p>
                <p><strong>Web: </strong>thietkewebthuonghieu.com</p>
              </div>
            </div>
            </div>

            <h3 class="text-center">{{__('LIÊN HỆ VỚI CHÚNG TÔI')}}</h3>
            <div class="col-lg-12 form-info">
           
                <form action="{{route('contact-info')}}" method="post" class="row">
                     @csrf
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="name" placeholder="{{__('Họ và tên')}}" />
                  </div>
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="email" placeholder="Email" />
                  </div>
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="phone" placeholder="{{__('Số điện thoại')}}" />
                  </div>
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="address" placeholder="{{__('Địa chỉ')}}" />
                  </div>
                      <div class="form-group col-lg-12">
                         <textarea class="form-control" rows="3" name="note" placeholder="Ghi chú"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default email-buttom" style="margin: 0 auto;">{{__('Gửi')}} </button>
<!--                   <div class="form-group col-lg-6">
                      <input class="form-control" name="name_vi" placeholder="Họ và tên" />
                  </div> -->
                </form>
            
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection