<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Verify Account</title>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="{{ URL('/theme') }}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ URL('/theme') }}/font/css/font-awesome.min.css" rel="stylesheet">
        <style type="text/css">
            .container {
                background: #f1f2f3;
                padding: 30px 50px !important;
            }
            .container h1 {
                font-family: 'Pacifico', cursive;
                color: #f94876;
                text-align: center;
            }
            .container h4 {
                font-style: italic;
            }
            .note {
                font-style: italic;
                font-size: 12px;
            }
            .btn-pink {
                background-color: #f94876;
                display: block;
                margin: auto;
                color:#fff;
                width: 100%;
                font-size: 20px !important;
                font-weight: bold;
                margin: 20px 0px;
            }
            .btn-pink:hover {
                color:#fff !important;
            }
            .social li a {
                padding: 20px;
                border-radius: 50%;
                border:solid 2px #999;
            }
        </style>

        <!-- Bootstrap -->
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
    <div class="container">
        <h1>iCards</h1>
        <h4>Hi {{ $username }},</h4>
        <p>Chúng tôi nhận được thông báo tạo tài khoản quản trị chương trình thẻ thành viên iCards qua địa chỉ Email này, vui lòng xác nhận bằng cách click vào nút xác nhận bên dưới</p>
        <p class="note">Nếu không phải bạn. Vui lòng bỏ qua tin nhắn này.</p>
        <center>
            <a href="{{ $link }}"><button type="button" class="btn btn-pink">Xác nhận Email</button></a>
        </center>
        <br>
        <p>Chân thành cảm ơn,<br>The iCards Team</p>


        <ul class="social">
            <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        </ul>

    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL('theme/') }}/js/bootstrap.min.js"></script>
</body>
</html>
