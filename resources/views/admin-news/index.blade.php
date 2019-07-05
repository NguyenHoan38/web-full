@extends('layouts.admin')
@section('content')
	<!-- /.sidebar -->        </aside>
        <div class="content-wrapper">
                            <section class="content-header">
        <h1>
            Bảng điều khiển
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('index')}}"><i class="fas fa-tachometer-alt"></i></i> Trang chủ</a></li>
            <li class="active">Bảng điều khiển</li>
        </ol>
    </section>

    <section class="content">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header" style="cursor: move;">
                            <i class="fa fa-area-chart"></i>
                            <h3 class="box-title">Thống kê lượt xem</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="contractChart" style="height:292px;width:100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header" style="cursor: move;">
                            <i class="fa fa-area-chart"></i>
                            <h3 class="box-title">Thống kê lượt xem theo vùng miền</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="chart-pie-area" style="height:230px;width:100%"></canvas>
                                <div id="do_legend"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        </div>
@endsection