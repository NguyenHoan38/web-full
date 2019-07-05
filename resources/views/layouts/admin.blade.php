
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
     <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title>Dashboard | DrFood Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="http://admin.cmc.paditech.com/css/prism.css">
    <!-- Ionicons -->
<!--
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/ionicons/css/ionicons.min.css">
-->
    <!-- Theme style -->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/dist/css/AdminLTE.min.css?v=3.1">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/dist/css/skins/skin-blue.min.css">


    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/plugins/iCheck/line/blue.css">
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/plugins/iCheck/all.css">


    <!--bootstrap tab-->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/tag/bootstrap-tagsinput.css">
    <!--edit css-->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/css/style.css?v=1.0.3">

    <!-- Include Date Range Picker -->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/plugins/datatables/dataTables.bootstrap.css">

    <!-- css viewbox -->
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/plugins/viewbox/viewbox.css">

    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/dist/css/bootstrap-datetimepicker.min.css" />
    
    <link href="http://admin.cmc.paditech.com/admin-lte/plugins/select2/select2.css?v=1" rel="stylesheet" />
    <link href="http://admin.cmc.paditech.com/admin-lte/plugins/waitMe/waitMe.css" rel="stylesheet" />

    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/dist/css/custom.css">
    <link rel="stylesheet" type="text/css" href="http://admin.cmc.paditech.com/css/loading.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css">

    
    <link rel="stylesheet" type="text/css" href="http://admin.cmc.paditech.com/admin-lte/plugins/fancybox/dist/jquery.fancybox.min.css">

    <link rel="stylesheet" type="text/css" href="http://admin.cmc.paditech.com/css/prism.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <meta name="csrf-token" content="KkOx78LBVai7eVKkeP0XoI0PHaXeMKEi0gPpDBPO" />
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/css/jobs_cates.css">
    <link rel="stylesheet" href="http://admin.cmc.paditech.com/admin-lte/css/style_v2.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
<style>
    .dataTables_empty{display:none}
</style>
<a href="{{route('index')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>D</b>R</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>DrFood</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <i class="fas fa-align-justify"></i>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                                        <i class="fas fa-user"></i>
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->

                </a>
                                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest 
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
      
                </ul>
            </li>
        </ul>
    </div>
</nav>
        </header>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
                        <img src="project1/images/logo2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Admin DrFood</p>
            <!-- Status -->
           <!--  <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
                                                                                <li class="">
                        <a href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i> <span>Bảng điều khiển</span></a>
                    </li>

                                                                                                                                                                    <li class="  treeview ">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span>Quản lý tin tức</span>
                                                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                                                    </a>
                                                <ul class="treeview-menu">
                            <li class=""><a href="{{route('adminnews')}}">Danh sách tin tức</a></li><li >
                        </ul>
                                            </li>
                       <li class="  treeview ">
                        <a href="#">
                           <i class="fab fa-product-hunt"></i> 
                           <span>Quản lý sản phẩm</span>
                             <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                                                    </a>
                                                <ul class="treeview-menu">
                            <li class=""><a href="#"></a></li><li class=""><a href="{{route('adminproduct')}}">Danh sách sản phẩm</a></li>

                        </ul>
                      </li>
                       <li class="  treeview ">
                        <a href="#">
                          <i class="fas fa-map-marker-alt"></i>
                           <span>Quản lý liên hệ</span>
                             <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                                                    </a>
                                                <ul class="treeview-menu">
                            <li class=""><a href="#"></a></li><li class=""><a href="{{route('admincontact')}}">Thông tin liên hệ</a></li>
                            <li class=""><a href="#"></a></li><li class=""><a href="{{route('contact-all')}}">Khách liên hệ</a></li>

                        </ul>
                      </li>

                           <li class="">
                        <a href="{{route('adminthuonghieu')}}"><i class="fas fa-copyright"></i></i> <span>Quản lý thương hiệu</span></a>
                    </li>        
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->        </aside>
      

     @yield('content')
        </div>

        <footer class="main-footer">
            <!-- To the right -->
<div class="pull-right hidden-xs">
</div>
<!-- Default to the left -->
<strong>Copyright &copy; 2018 <a href="#">DrFood Admin</a>.</strong>        </footer>
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
    </div>

    <div aria-hidden="false" aria-labelledby="mySmallModalLabel" role="dialog" class="modal fade in" id="detailModal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 id="finishModalLabel" class="modal-title"></h4>
                </div>
                <div id='modal_content' class="modal-body"></div>
            </div>
        </div>
    </div>


    <div id="print_data" style="display: none"></div>

    <div id="f_loading_message" style="display: none;" class="loadingView">
        <p>
            <b>
                <b>
                    <b>
                        <img alt="loading" class="loadingv2" src="http://admin.cmc.paditech.com/img/loading_blue.gif">
                        <span id="f_loading_title">đang tải...</span>&nbsp;&nbsp;&nbsp;
                        <a old="#" href="#" onclick="return dialog.hide();" class="canc">đóng</a>
                    </b>
                </b>
            </b>
        </p>
    </div>

    <!-- jQuery 3 -->
    <script src="http://admin.cmc.paditech.com/admin-lte/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="http://admin.cmc.paditech.com/admin-lte/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/jqueryValidation/jquery.validate.min.js"></script>
    <script src="http://admin.cmc.paditech.com/js/notify.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    

    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


    <script src="http://admin.cmc.paditech.com/js/prism.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/fancybox/dist/jquery.fancybox.min.js"></script>

    <!--Icheck-->
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/iCheck/icheck.min.js"></script>
    <!--bootstrap tab-->
    <script src="http://admin.cmc.paditech.com/admin-lte/tag/bootstrap-tagsinput.js"></script>
    <!-- Select 2 -->
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/select2/select2.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/dist/js/moment-with-locales.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/dist/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Include Date Range Picker -->
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/waitMe/waitMe.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/dist/js/adminlte.min.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/dist/js/custom.js?v=1"></script>
    <script src="http://admin.cmc.paditech.com/js/init.js?v=2"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/viewbox/jquery.viewbox.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/gdoc/jquery.gdocsviewer.min.js"></script>
    <!--chart js-->
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/chartjs/Chart.min.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/flot/jquery.flot.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/flot/jquery.flot.resize.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/flot/jquery.flot.pie.js"></script>
    <script src="http://admin.cmc.paditech.com/admin-lte/plugins/flot/jquery.flot.categories.js"></script>
    <script src="http://admin.cmc.paditech.com/js/googlemap.js" type="text/javascript"></script>
   <script type="text/javascript" language="javascript" src="project1/admin-news/ckeditor/ckeditor.js" ></script>
    
    <script src="http://admin.cmc.paditech.com/js/chartjs/Chart.min.js"></script>

    <script type="text/javascript">
        var label_claims = '2018-08,2018-09,2018-10,2018-11,2018-12,2019-01,2019-02,2019-03,2019-04,2019-05,2019-06,2019-07';

        var areaChartData = {
            labels  : label_claims.split(','),
            datasets: [
                {
                    label               : 'Doanh thu theo tháng',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : JSON.parse('[0,0,0,0,0,0,0,0,0,0,256,0]'),
                }
            ]
        }


        //- BAR CHART -
        //-------------
        var barChartCanvas                   = $('#contractChart').get(0).getContext('2d');
        var barChart                         = new Chart(barChartCanvas);
        var barChartData                     = areaChartData;
        barChartData.datasets[0].fillColor   = '#00a65a';
        barChartData.datasets[0].strokeColor = '#00a65a';
        barChartData.datasets[0].pointColor  = '#00a65a';


        var barChartOptions                  = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero        : true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines      : true,
            //String - Colour of the grid lines
            scaleGridLineColor      : 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth      : 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines  : true,
            //Boolean - If there is a stroke on each bar
            barShowStroke           : true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth          : 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing         : 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing       : 1,
            //String - A legend template
            legendTemplate          : '',
            //Boolean - whether to make the chart responsive
            responsive              : true,
            maintainAspectRatio     : true
        }

        barChartOptions.datasetFill = true;

        barChart.Bar(barChartData, barChartOptions);

        var data = JSON.parse('[{"label":"Mi\u1ec1n B\u1eafc","color":"#F7464A","value":233},{"label":"Mi\u1ec1n Trung","color":"#46BFBD","value":0},{"label":"Mi\u1ec1n Nam","color":"#FDB45C","value":0},{"label":"Nh\u1eadt B\u1ea3n","color":"#DFF2800","value":4},{"label":"M\u1ef9","color":"#0080FF","value":12}]');
        var ctx = document.getElementById('chart-pie-area').getContext('2d');
        var myPieChart = new Chart(ctx).Pie(data,{
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke : true,

            //String - The colour of each segment stroke
            segmentStrokeColor : "#fff",

            //Number - The width of each segment stroke
            segmentStrokeWidth : 2,

            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout : 50, // This is 0 for Pie charts

            //Number - Amount of animation steps
            animationSteps : 100,

            //String - Animation easing effect
            animationEasing : "easeOutBounce",

            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate : true,

            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale : false,
            responsive   : true,
            legend: {
                display: true,
                labels: {
                    fontColor: "#000080",
                }
            }
        });

        $("#do_legend").html(myPieChart.generateLegend());
    </script>

    <style>
        #do_legend{
            width:100%;
        }

        #do_legend> ul{
            padding: 0;
            text-align: center;
        }


        #do_legend {
            width:100%;
            bottom:10%;
        }
        #do_legend li {
            cursor: pointer;
            margin: 4px 3px;
            display: inline-table;
        }
        #do_legend li span {
            position: relative;
            padding: 3px 10px;
            border-radius: 13px;
            //color: white;
            z-index: 2;
            font-size: 11px;
        }

        #do_legend{
            height: 62px;
            overflow-y: auto;
        }

        .donut-area{
            height:calc(100% - 62px)
        }
    </style>




    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. -->
</body>
</html>
