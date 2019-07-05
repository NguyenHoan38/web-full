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
            Danh sách sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Lọc sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                              <form action="{{route('searchproduct')}}" method="post" ">
                                @csrf
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
                            </form>
                    </div>                    
                </div><!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-12">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Danh sách sản phẩm</h3>
                        <div class="pull-right">
                            <a class="btn btn-success btn-sm" href="{{route('addproduct')}}">Thêm sản phẩm</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover" id="post_table">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>

                                    <th class="actions">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $bv)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$bv->id}}</td>
                                        <td>
                                            <img style="width:100px" height="60px" src="project1/images/{{$bv->image}}">
                                        </td>
                                        <td>{{$bv->name}}</td>
                                        <td>{{$bv->description}}</td>
                                       
                                     
                                        <td>{{$bv->created_at}}</td>
                                        <td>
                                            <a href="{{route('editproduct',$bv->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"> Cập nhật</i></a>
                                                <a href="{{route('deleteproduct',$bv->id)}}" onclick="return confirm('Bạn có chắc chắn xoá bản ghi này?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"> Xoá</i></a>
                                        </td>
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