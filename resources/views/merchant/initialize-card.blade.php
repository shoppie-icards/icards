@extends('layouts.master')
@section('css')
<link href="{{ URL('/theme') }}/css/jquery.steps.css" rel="stylesheet">
@stop

@section('title')
    <div class="title-pages">
        <h2>Khởi tạo thẻ</h2>
    </div>
@stop

@section('content')

<form id="example-advanced-form" action="#">
<!-- step 1 -->
<h3>Tạo thương hiệu</h3>
<fieldset class="create-brand">
    <p class="step-title">Bước 1: Vui lòng cho chúng tôi biết thông tin về bạn và thương hiệu của bạn.</p>
    <div class="row">
        <!-- LEFT -->
        <div class="col-lg-6">
            <h1 class="pink">Thông tin thương hiệu</h1>
            <hr>
            <div class="form-group">
                <input class="form-control required" type="text" id="trademark" name="trademark" placeholder="Tên thương hiệu" value="">
            </div>
            <div class="form-group">
                <input class="form-control required" type="text" id="feild" name="feild" placeholder="Lĩnh vực" value="">
            </div>
            <div class="form-group">
                <div class="row">
                    <center>
                        <div class="col-md-12 contentImage">
                            <div class="img-logo">
                                <p class="position-text-avatar">Add logo <br> 300 x 300px</p>
                            </div>
                        </div>
                        <input type="file" name="logo" value="{{Input::old('logo')}}" id="logo" class="upload-img" />
                    </center>
                </div>
            </div>
        </div>
        <!-- RIGHT -->
        <div class="col-lg-6">
            <h1 class="pink">Thông tin cá nhân</h1>
            <hr>
            <!--
    <div class="form-group">
        <input class="form-control required" type="text" id="" name="" placeholder="" value="">
    </div>
    -->
            <div class="form-group">
                <input class="form-control required" type="text" id="" name="fullname" placeholder="Họ và tên" value="">
            </div>
            <div class="form-group">
                <input class="form-control required" type="text" id="" name="role" placeholder="Vai trò" value="">
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <select class="form-control" name="" id="">
                            <option value="">Ngày sinh</option>
                            
                                @for ($i = 1; $i <= 31 ; $i++) { 
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor


                        </select>
                    </span>

                    <span class="input-group-btn">
                        <select class="form-control" name="" id="">
                            <option value="">Tháng</option>
                            @for ($i = 1; $i <= 12 ; $i++) { 
                                <option value="{{ $i }}">Tháng {{ $i }}</option>
                            @endfor
                        </select>
                    </span>
                    <span class="input-group-btn">
                        <select class="form-control" name="" id="">
                            <option value="">Năm</option>
                            @for ($i = 1970; $i <= 2015 ; $i++) { 
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <input class="form-control required" type="text" id="address" name="address" placeholder="Địa chỉ" value="">
            </div>

            <div class="form-group">
                <input class="form-control required" type="text" id="district" name="district" placeholder="Quận/Huyện" value="">
            </div>

            <div class="form-group">
                <input class="form-control required" type="text" id="province" name="province" placeholder="Tỉnh/Thành" value="">
            </div>
            <div class="form-group">
                <input class="form-control required" type="text" id="country" name="country" placeholder="Quốc Gia" value="">
            </div>
            <div class="form-group">
                <input class="form-control required" type="text" id="phone" name="phone" placeholder="Số điện thoại" value="">
            </div>
            <div class="form-group">
                <input class="form-control required" type="text" id="email" name="email" placeholder="Email" value="">
            </div>
        </div>
    </div>
    <hr>
</fieldset>
<!-- end steep 1 -->



<!-- Steep 2 -->
<h3>Tạo hạng thẻ</h3>
<fieldset class="create-brand">
    <p class="step-title">Bước 2: Tại đây vui lòng thiết lập hình thức thẻ thành viên cho thương hiệu của bạn</p>
    <div class="row">
        <!-- LEFT -->
        <div class="col-lg-6">
            <h1 class="pink">Chọn loại thẻ và hình thức chủ thẻ</h1>
            <hr>
            <p class="note-option no-margin">Vui lòng chọn 1 trong 2 loại thẻ bên dưới:</p>
            <ul class="select-type">
                <li class="type-chops"><span></span><a href="#">Loại thẻ Stamples/Chops </a><a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa button"><i class="fa fa-info-circle pink"></i></a>
                </li>
                <li class="type-levels"><span class="current1"></span><a href="#">Loại thẻ Levels </a><a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                </li>
            </ul>
            <ul class="select-type type-levels-option">
                <p class="note-option">Vui lòng chọn 1 trong 3 hình thức đặt tên thẻ bên dưới</p>
                <li class="type-levels-1"><span class="current1"></span><a href="#">03 hạng thẻ: Vàng, Bạc, Thành viên </a>
                </li>
                <li class="type-levels-2"><span></span><a href="#">03 hạng thẻ: VVIP, VIP, Newbie </a>
                </li>
                <li class="type-levels-3"><span></span><a href="#">02 hạng thẻ: VIP, Newbie </a>
                </li>
            </ul>
            <!-- Content For Chops -->
            <div id="content-chops" style="display:none">
                <h1 class="pink">Chọn số lượng Stamples/Chops cần tích lũy và hình thức tặng thưởng</h1>
                <hr>
                <ul class="select-type">
                    <!-- SELECT OPTION CHOPS -->
                    <li class="select-chop-option-1"><span class="current1"></span><a href="#">Tặng miễn phí 1 sản phẩm sau khi tích lũy đủ 1 lượng Stamples/Chops </a><a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa button"><i class="fa fa-info-circle pink"></i></a>
                    </li>
                    <li class="select-chop-option-2"><span></span><a href="#">Giảm giá % trên tổng hóa đơn sau khi tích lũy đủ 1 lượng Stamples/Chops </a><a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                    </li>
                </ul>
                <hr class="line-dotted">
                <div class="chops-option-gift-1">
                    <div class="table-responsive" style="overflow-y: hidden; ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:33%">Số lượng chops cần tích lũy <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th style="width:33%">Miễn phí 1 sản phẩm <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th style="width:33%"></th>
                                </tr>
                            </thead>
                            <tbody class="customize-input-point">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control choice-stick">
                                                <option value="0">Chọn mức</option>

                                                @for ($i = 1; $i <= 15 ; $i++) { 
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor

                                            </select>
                                        </div>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">đ</p>
                                        <input type="text" name="point" id="" class="form-control point" value="50.000">
                                    </td>

                                    <td style="position:relative">
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        50.000 đ
                                    </td>

                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        100.000 đ
                                    </td>

                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        15
                                    </td>
                                    <td>
                                        200.000 đ
                                    </td>

                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>


                                
                            </tbody>
                        </table>
                        <p>Giá trị thanh toán tương đương của 1 chops <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a></p>
                        <div style="position:relative;">
                            <div class="col-md-4">
                                <p class="value-default" style="top:7px;right:25px;">đ</p>
                            <input type="text" name="point" id="" class="form-control point" value="50.000">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chops-option-gift-2" style="display:none">
                    <div class="table-responsive" style="overflow-y: hidden; ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:33%">Số lượng chops cần tích lũy <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th style="width:33%">% giảm giá cho lần mua tiếp <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th style="width:33%"></th>
                                </tr>
                            </thead>
                            <tbody class="customize-input-point">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Chọn mức</option>

                                                @for ($i = 1; $i <= 15 ; $i++) { 
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor

                                            </select>
                                        </div>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="point" id="" class="form-control point" value="5">
                                    </td>

                                    <td style="position:relative">
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        10 %
                                    </td>

                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        20 %
                                    </td>

                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        9
                                    </td>
                                    <td>
                                        50 %
                                    </td>

                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>


                                
                            </tbody>
                        </table>
                        <p>Giá trị thanh toán tương đương của 1 chops <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a></p>
                        <div style="position:relative;">
                            <div class="col-md-4">
                                <p class="value-default" style="top:7px;right:25px;">đ</p>
                            <input type="text" name="point" id="" class="form-control point" value="50.000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content-level">
                <h1 class="pink">Giá trị điểm cần tích lũy & Tỷ lệ điểm thưởng</h1>
                <hr>
                <!-- Option type level 1 -->
                <div class="typel-level-option-1">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:23%">Hạng thẻ <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th>Cần tích lũy <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th>% điểm thưởng <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th style="width:20%"></th>
                                </tr>
                            </thead>
                            <tbody class="customize-input-point">
                                <tr>
                                    <td>
                                        <h4 class="pink">Vàng</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="1,500">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="15">
                                    </td>
                                    <td>
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="pink">Bạc</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="500">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="10">
                                    </td>
                                    <td>
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="pink">Thành viên</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="0">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="5">
                                    </td>
                                    <td style="padding-left:0px;">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end type level -->
                <div class="typel-level-option-2" style="display:none">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:23%">Hạng thẻ <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th>Cần tích lũy <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th>% điểm thưởng <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="customize-input-point">
                                <tr>
                                    <td>
                                        <h4 class="pink">VVIP</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="1,500">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="15">
                                    </td>
                                    <td style="position:relative">
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="pink">VVIP</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="500">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="10">
                                    </td>
                                    <td style="position:relative">
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="pink">Newbie</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="0">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="5">
                                    </td>
                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Option type level 3 -->
                <div class="typel-level-option-3" style="display:none">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:23%">Hạng thẻ <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th>Cần tích lũy <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th>% điểm thưởng <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="customize-input-point">
                                <tr>
                                    <td>
                                        <h4 class="pink">VIP</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="1,500">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="15">
                                    </td>
                                    <td style="position:relative">
                                        <input type="button" name="" id="" class="form-control btn btn-pink" value="Tạo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="pink">Newbie</h4>
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">điểm</p>
                                        <input type="text" name="point" id="" class="form-control point" value="0">
                                    </td>
                                    <td style="position:relative">
                                        <p class="value-default">%</p>
                                        <input type="text" name="" id="" class="form-control" value="5">
                                    </td>
                                    <td style="position:relative">
                                        <i class="fa fa-pencil fa-lg"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash fa-lg pink"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END content For chops -->
        </div>
        <!-- RIGHT -->
        <div class="col-lg-6 status-display">
            <h1 class="pink">Demo trên ứng dụng của thành viên</h1>
            <hr>
            <!-- Demo mobile  -->
            <div class="demo-mobile-content" id="level">
                <img src="{{ URL('/theme') }}/images/demo.png" class="background-mobile">
                <div class="demo-mobile-head">
                    <a href="#" class="glyphicon glyphicon-chevron-left"></a>Đăng ký thành viên
                    <div class="demo-icon-trademark"><img src="{{ URL('/theme') }}/images/icon-cgv.png" alt="icon-trademark">
                    </div>
                </div>
                <div class="demo-mobile-main-content">
                    <p style="color:#f94876; font-weight:bold;">Đăng ký thành viên mới "New" và nhận ngay:</p>
                    <p style="text-align:center; font-size: 24px; font-weight:bold">5%</p>
                    <p style="text-align:center; margin-left: 15px; margin-right: 15px;">Giảm giá cho lần tiêu dùng tiếp theo tại cửa hàng</p>
                    <p style="color:#f94876; font-weight:bold;">Chương trình thẻ thành viên:</p>
                    Hạng thẻ: <span id="demo-level-vvip">Vàng</span><span id="demo-level-vip">Bạc</span><span id="demo-level-newbie">Đồng</span>
                    <p style="margin-top: 10px;">Điểm tích lũy: <span style="margin-left: 10px;">15%</span><span style="margin-left:20px;">10%</span><span style="margin-left:20px;">5%</span>
                    </p>
                    <p style="color:#f94876; font-weight:bold">Xem chi tiết chương trình tại đây <a href="#" style="color: #f94876;"><a href="#"><i class="fa fa-info-circle"></i></a></a>
                    </p>
                    <button type="button" class="btn">Đăng ký</button>
                </div>
            </div>
            <!-- Demo chops -->
            <div class="demo-chops-card" id="chops" style="display:none">
                <div class="demo-front-chops-card">
                    <img src="{{ URL('/theme') }}/images/logo-default.png" alt="logo" class="img-circle">
                    <i class="fa fa-user fa-4x"></i>
                    <p>member name</p>
                </div>
                <div class="demo-back-chops-card">
                    <div class="tick-star-1">
                        <span class="tick-1"></span>
                        <span class="tick-2"></span>
                        <span class="tick-3"></span>
                        <span class="tick-4"></span>
                        <span class="tick-5"></span>
                    </div>
                    <div class="tick-star-2">
                        <span class="tick-6"></span>
                        <span class="tick-7"></span>
                        <span class="tick-8"></span>
                        <span class="tick-9"></span>
                        <span class="tick-10"></span>
                    </div>
                    <div class="tick-star-3">
                        <span class="tick-11"></span>
                        <span class="tick-12"></span>
                        <span class="tick-13"></span>
                        <span class="tick-14"></span>
                        <span class="tick-15"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<!-- end Step 2 -->




<!-- step 3 -->
<h3>Tạo địa chỉ shop</h3>
<fieldset class="create-brand">
    <p class="step-title">Bước 3: Tạo địa chỉ cửa hàng và tài khoản đăng nhập của mỗi cửa hàng. Bạn có thể thay đổi nó về sau</p>
    <div class="col-lg-12">
        <h1 class="pink">Tạo mới địa chỉ Store/Merchant</h1>
        <hr>
        <div class="col-lg-12">
            <div class="create-shop-address">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tên cửa hàng <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                </th>
                                <th>Địa chỉ <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="customize-input-point">
                            <tr>
                                <td>
                                    <input type="text" style="padding-right: 10px;" name="point" id="name-shop" class="form-control point" placeholder="Nhập tên cửa hàng">
                                </td>
                                <td>
                                    <input type="text" style="padding-right: 10px;" name="point" id="address-shop" class="form-control point" placeholder="Nhập địa chỉ">
                                </td>
                                <td style="position:relative">
                                    <input type="button" name="" id="button-create-store-address" class="form-control btn btn-pink" value="Tạo">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <h1 class="pink">Tạo tài khoản đăng nhập của Shop</h1>
        <hr>
        <div class="col-lg-10 col-sm-offset-1">
            <div class="create-shop-account">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tài khoản shop <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                </th>
                                <th>Tên đăng nhập <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                </th>
                                <th>Mật khẩu <a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Nội dung giải thích ý nghĩa tích điểm theo LV"><i class="fa fa-info-circle pink"></i></a>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-create-account-shop">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</fieldset>
<!-- end step 3 -->

<!-- steep 4 -->
<h3>Xác nhận</h3>
<fieldset class="create-brand">
    <p class="step-title">Bước 4: Chúng tôi đang xử lý yêu cầu của bạn. Vui lòng kiểm tra lại thông tin liên hệ 1 lần nữa!</p>
    <div class="col-lg-6">
        <h1 class="pink">Bạn đang đăng ký gói dịch vụ MIỄN PHÍ</h1>
        <hr>

        <div class="status-packages">
            <p>Chương trình của bạn đang được xét duyệt.</p>
            <p>Chúng tôi sẽ trả lời bạn sớm nhất có thể.</p>
            <p>Vui lòng gọi cho chúng tôi tại +84.4.6297.9933 để có thêm thông tin!</p>
        </div>

        <h1 class="pink">Đăng ký gói dịch vụ PREMIUM để sử dụng đầy đủ tính năng dịch vụ</h1>
        <hr>
        <div class="uprage-packages">
            <button type="button" id="show-packages" class="btn btn-pink">Đăng ký gói PREMIUM</button>
            <br>
            <button type="button" id="show-packages-more" class="btn">Tìm hiểu thêm gói PREMIUM</button>
        </div>
    </div>


    <!-- Show panel packages -->
    <div class="clearfix"></div>
    <div class="table-packages" style="display:none">
        <h1 class="pink">Các gói dịch vụ iCards</h1>
        <table class="table table-striped">
            <thead>
                <tr class="packages-first">
                    <th style="width:55%"></th>
                    <th style="width:15%">
                        <center>
                            FREE
                            <br>
                            <span>0 đ</span>
                            <br>
                        </center>
                    </th>
                    <th style="width:15%">
                        <center>
                            PREMIUM 1
                            <br>
                            <span>199k/tháng</span>
                            <br>
                        </center>
                    </th>
                    <th style="width:15%">
                        <center>
                            PREMIUM 2
                            <br>
                            <span>499k/tháng</span>
                            <br>

                        </center>
                    </th>
                </tr>
            </thead>
            <tbody>




                <tr>
                    <td>Khởi tạo chương trình thẻ thành viên</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                </tr>

                <tr>
                    <td>Vận hành chương trình, Quản trị members</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                </tr>

                <tr>
                    <td>Gửi tin nhắn cho tất cả thành viên/tháng</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td>MAX 10</td>
                </tr>

                <tr>
                    <td>Khởi tạo chương trình thẻ thành viên</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                </tr>

                <tr>
                    <td>Vận hành chương trình, Quản trị members</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                </tr>

                <tr>
                    <td>Gửi tin nhắn cho tất cả thành viên/tháng</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td>MAX 10</td>
                </tr>

                <tr class="packages-last">
                    <td></td>
                    <td>
                        <center>
                            <button class="btn btn-current"><i class="fa fa-check"></i>
                            </button>
                        </center>
                    </td>
                    <td>
                        <center>
                            <button class="btn btn-pink">Đăng ký</button>
                        </center>
                    </td>
                    <td>
                        <center>
                            <button class="btn btn-pink">Đăng ký</button>
                        </center>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- end panel packages -->
</fieldset>
<!-- end steep 4 -->





</form>
@stop

@section('js')
<script src="{{ URL('/theme') }}/build/jquery.steps.js"></script>
    
<script>
    var form = $("#example-advanced-form").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            //return true;
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            trademark: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                }
            },
            feild: {
                required: true,
            },
            fullname: {
                required: true,
            },
            role: {
                required: true,
            },
            address: {
                required: true,
            },
            district: {
                required: true,
            },
            province: {
                required: true,
            },
            country: {
                required: true,
            },
            phone: {
                required: true,
            },
            email: {
                required: true,
            }
        },
        messages: {
            trademark:{
                required: "(*) Vui lòng nhập tên thương hiệu",
            },
            feild: {
                required: "(*) Vui lòng nhập tên lĩnh vực",
            },
            fullname: {
                required: "(*) Vui lòng nhập họ tên",
            },
            role: {
                required: "(*) Vui lòng nhập vai trò",
            },
            address: {
                required: "(*) Vui lòng nhập địa chỉ",
            },
            district: {
                required: "(*) Vui lòng nhập quận/huyện",
            },
            province: {
                required: "(*) Vui lòng nhập họ tên",
            },
            country: {
                required: "(*) Vui lòng nhập quốc gia",
            },
            phone: {
                required: "(*) Vui lòng nhập số điện thoại",
            },
            email: {
                required: "(*) Vui lòng nhập email",
            }
        }
    });
</script>
@stop
