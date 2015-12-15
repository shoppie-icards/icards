@extends('layouts.master')
@section('css')

@stop
@section('title')
    <div class="title-pages">
        <h2>Quản trị thành viên</h2>
        <div class="wizard-progress">
            <ul class="winzard">
                <li><i class="fa fa-circle"></i> Danh sách</li>
                <li class="active"><i class="fa fa-circle"></i> Chi tiết thành viên</li>
            </ul>
        </div>
    </div>
@stop

@section('content')
	<div class="account-manage-container">
	    <div class="col-lg-12">
	        <h1 class="title-h1">Thông tin thành viên</h1>

            <div class="row">
                <div class="col-lg-2">
                    <img src="{{ URL('theme/images') }}/logo-default.png" class="avatar-detail" width="180">
                </div>

                <div class="col-lg-5">
                    <table class="table">
                        <thead>
                            <th>Thông tin khách hàng</th>
                            <th>&nbsp;</th>
                        </thead>
                    <tbody class="info-user-details">
                        <tr>
                            <td>Email</td>
                            <td>Vàng</td>
                        </tr>

                        <tr>
                            <td>Số điện thoại</td>
                            <td>12312312</td>
                        </tr>

                        <tr>
                            <td>Giới tính</td>
                            <td>04.11.2015</td>
                        </tr>

                        <tr>
                            <td>Địa chỉ</td>
                            <td>Active</td>
                        </tr>

                    </tbody>
                    </table>
                </div>

                <div class="col-lg-5">
                    <table class="table">
                        <thead>
                            <th>Thông tin khách hàng</th>
                            <th>&nbsp;</th>
                        </thead>
                    <tbody class="info-user-details">
                        <tr>
                            <td>Hạng thẻ</td>
                            <td>Vàng</td>
                        </tr>

                        <tr>
                            <td>Mã thành viên</td>
                            <td>12312312</td>
                        </tr>

                        <tr>
                            <td>Ngày đăng ký</td>
                            <td>04.11.2015</td>
                        </tr>

                        <tr>
                            <td>Trạng thái</td>
                            <td>Active</td>
                        </tr>

                        <tr>
                            <td>Số dư điểm</td>
                            <td>131,231</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>

	        

<!-- 	        <p>Hạng thẻ</p>
	        <p>Mã thành viên</p>
	        <p>Ngày đăng ký</p>
	        <p>Trạng thái</p>
	        <p>Số dư tem</p>

	        <p>Email</p>
	        <p>Số điện thoại</p>
	        <p>Giới tính</p>
	        <p>Địa chỉ</p> -->

	    </div>

	    <div class="col-lg-12">
	    <h1 class="title-h1">Lịch sử tích điểm</h1>
	    	<table class="table table-striped list-send-messages">
                <thead>
                <tr>
                    <th class="pink" style="width:3%">ID</th>
                    <th class="pink" style="width:10%">Ngày</th>
                    <th class="pink" style="width:15%">Hình thức</th>
                    <th class="pink" style="width:15%">Giá trị</th>
                    <th class="pink" style="width:17%">Tại cửa hàng</th>
                </tr>
                </thead>
                <tbody class="list-incentives">
                    <tr>
                        <td>134324</td>
                        <td>
                        	04.11.2015<br>10:15
                        </td>
                        <td>Tích tem</td>
                        <td>+ 1 tem</td>
                        <td>The kafe 1</td>
                    </tr>

                    <tr>
                        <td>134324</td>
                        <td>
                            04.11.2015<br>10:15
                        </td>
                        <td>Tích tem</td>
                        <td>+ 1 tem</td>
                        <td>The kafe 1</td>
                    </tr>

                    <tr>
                        <td>134324</td>
                        <td>
                            04.11.2015<br>10:15
                        </td>
                        <td>Tích tem</td>
                        <td>+ 1 tem</td>
                        <td>The kafe 1</td>
                    </tr>

                    <tr>
                        <td>134324</td>
                        <td>
                            04.11.2015<br>10:15
                        </td>
                        <td>Tích tem</td>
                        <td>+ 1 tem</td>
                        <td>The kafe 1</td>
                    </tr>




                    
                    
                </tbody>
            </table>
	    </div>
	</div>
@stop

@section('js')
@stop
