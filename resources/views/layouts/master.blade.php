<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Merchant</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ URL('/theme') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL('/theme') }}/font/css/font-awesome.min.css" rel="stylesheet">
    <!-- Customize include css -->
    @yield('css')
    <link href="{{ URL('/theme') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default no-margin position-nav toggle-navbar" style="width:100%">
        <!-- NAV -->
        <div class="">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>
        <div class="title-pages nav-info-merchant">
            <div class="row">
                <div class="col-sm-7 info-merchant">
                    <ul>
                        <li>1,999 thành viên</li>
                        <li>111,111 tin nhắn</li>
                        <li>89 ưu đãi</li>
                    </ul>
                </div>
                <div class="col-sm-5 nav-action">
                    <ul>
                        <li>Logout</li>
                        <li>Gói miễn phí</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        @yield('title')
        <!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.aside')
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->


        <div id="page-content-wrapper">
            <div class="container-fluid content">
                <!-- Content -->
                @yield('content')
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ URL('/theme') }}/js/jquery-1.11.2.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script src="{{ URL('/theme') }}/js/bootstrap.min.js"></script>
    <script src="{{ URL('/theme') }}/js/sidebar_menu.js"></script>
    <script src="{{ URL('/theme') }}/js/script.js"></script>
    <!-- Customize include js -->
    @yield('js')
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>
</body>

</html>
