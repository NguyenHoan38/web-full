@extends('layouts.admin')
@section('content')
     <div class="content-wrapper">
                            <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #d2d6de !important;
            border-radius: 0 !important;
            height: 100% !important;
        }
    </style>
    <section class="content-header">
        <h1>
            Danh sách người liên hệ
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
            <li class="active">Danh sách người liên hệ</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Lọc người liên hệ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                        <div class="col-md-8">
                            <div class="form-group no-margin remove-date">
                                
                                <input id="title" name="name" type="text" class="form-control" value="" >
                            </div>
                        </div>
                   

                        <div class="col-md-4">
                            <div class="form-group">
                               
                                <button type="submit" class="btn btn-primary btn-block" onclick="return filter()"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span> Tìm kiếm</button>
                            </div>
                        </div>
                    </div>                    </div><!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-12">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Danh sách người liên hệ</h3>
                       {{--  <div class="pull-right">
                            <a class="btn btn-success btn-sm" href="{{route('addnews')}}">Thêm bài viết</a>
                        </div> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover" id="post_table">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Ghi chú</th>
                                    <th>Ngày </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $bv)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$bv->id}}</td>
                                        <td>{{$bv->name}}</td>
                                        <td>{{$bv->email}}</td>
                                        <td>{{$bv->phone}}</td>
                                         <td>{{$bv->address}}</td>
                                          <td>{{$bv->note}}</td>
                                        
                                     
                                        <td>{{$bv->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!--table-responsive-->
                    </div><!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>


        </div>

@endsection