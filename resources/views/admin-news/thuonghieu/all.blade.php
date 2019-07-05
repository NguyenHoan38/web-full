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
            Danh sách thương hiệu
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
            <li class="active">Danh sách thương hiệu</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Danh sách thương hiệu</h3>
                      {{--   <div class="pull-right">
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
                                    <th>Ảnh đại diện</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                   {{--  <th>Nội dung</th> --}}
                                    <th class="actions">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trademark as $bv)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$bv->id}}</td>
                                        <td>
                                            <img style="width:100px" src="project1/images/{{$bv->image}}">
                                        </td>
                                        <td style="font-size: 18px;">{!!$bv->tieude!!}</td>
                                        <td style="font-size: 18px;">{!!$bv->mota!!}</td>
                                        
                                        <td>
                                            <a href="{{route('edithuonghieu',$bv->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"> Cập nhật</i></a>
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