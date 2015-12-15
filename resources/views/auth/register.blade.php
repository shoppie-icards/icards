<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iCards - Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL('theme') }}/css/bootstrap.min.css">
        <link href="{{ URL('/theme') }}/font/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL('theme') }}/assets/login/css/form-elements.css">
        <link rel="stylesheet" href="{{ URL('theme') }}/assets/login/css/style.css">

    </head>

    <body>
        <div class="top-content">
            
            <div class="inner-bg" style="background: url('theme/assets/login/bg_all.png');">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <h2><i class="fa fa-key"></i> Đăng ký tài khoản <span>iCards</span></h2>
                            </div>
                            <div class="form-bottom">
                                <form class="form-signin" id="myForm" action="{{ URL('register') }}" method="post">
                                    @include('layouts.alert')
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Tài khoản</label>
                                        <input type="text" name="username" value="{{ old('username') }}" placeholder="Tên tài khoản ..." class="form-username form-control" id="form-username">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Mật khẩu</label>
                                        <input type="password" name="password" value="{{ old('password') }}" placeholder="Mật khẩu ..." class="form-username form-control" id="form-username">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Xác nhận mật khẩu</label>
                                        <input type="password" name="repassword" value="{{ old('repassword') }}" placeholder="Xác nhận mật khẩu ..." class="form-username form-control" id="form-username">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Tài khoản</label>
                                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email ..." class="form-username form-control" id="form-username">
                                    </div>
                                    <button type="submit" class="btn"><i class="fa fa-key"></i> Đăng ký tài khoản</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <h3>...or login with:</h3>
                            <div class="social-login-buttons">
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-google-plus"></i> Google Plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="{{ URL('theme') }}/js/jquery.min.js"></script>
        <script src="{{ URL('theme') }}/js/bootstrap.min.js"></script>
        <script src="{{ URL('theme') }}/assets/login/js/jquery.backstretch.min.js"></script>
        <script src="{{ URL('theme') }}/assets/login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
