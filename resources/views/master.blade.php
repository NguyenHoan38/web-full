<!DOCTYPE html>
<html>
<head>
        <base href="{{asset('')}}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>web</title>
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="project1/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
        <link rel="stylesheet" href="project1/css/nga.min.css">
        <link rel="stylesheet" type="text/css" href="project1/css/font-pizzaro.css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
        <link rel="shortcut icon" href="project1/images/fav-icon.png">
        
      
        <link rel="stylesheet" type="text/css" href="project1/css/dat.css" media="all" />
        <link rel="stylesheet" type="text/css" href="project1/style/style.css">
        <!-- Script -->
        <script src="project1/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="project1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <script src="project1/js/angular-route.js"></script>
        <script src="project1/js/angular-animate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <script src="project1/js/ui-bootstrap-tpls-0.11.0.js"></script>
        <script src='project1/js/jquery.zoom.js'></script>
        <!-- Script của các thành viên -->
        <script type="text/javascript" src="project1/js/thinh.js"></script>
        <script type="text/javascript" src="project1/js/hoan.js"></script>
</head>
</head>
<body>
    @include('header')

     @yield('content')
  
    @include('footer')
</body>
</html>