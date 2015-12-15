@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ url('theme/assets/rate-star') }}/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
@stop
@section('title')
    <div class="title-pages">
        <h2>Quản trị phản hồi</h2>
    </div>
@stop

@section('content')
	<div class="feedback-container">
        <div class="col-lg-12">
            <h1 class="title-h1">Đánh giá hiện tại về phục vụ</h1>
            <p>Đánh giá của khách hàng được tổng hợp bằng cách tính trung bình điểm số của tất cả các lượt rate theo từng tuần. Và thể hiện trong 4 tuần gần nhất. Nếu muốn xem đầy đủ lịch  sử, vui lòng xem tại mục <a href="#">Thống Kê</a></p>
        
			<div class="rate-start-feedback">

				<div class="row">

        			<div class="col-lg-3 col-sm-6">
        				<center>
        					<h2>Tuần 46</h2>
        					<p>9.11 - 15-11</p>
        					<h2 class="rate-lg">4.5</h2>
          					<input id="input-21b" value="4.5" data-readonly="true" type="number" class="rating pink" min=0 max=5 step=0.1 data-size="xs">
          					<p>166 lượt đánh giá</p>
          				</center>
        			</div><!-- /.col-lg-3 -->

        			<div class="col-lg-3 col-sm-6">
        				<center>
        					<h2>Tuần 45</h2>
        					<p>9.11 - 15-11</p>
        					<h2 class="rate-lg">1.5</h2>
          					<input id="input-21b" value="1.5" data-readonly="true" type="number" class="rating pink" min=0 max=5 step=0.1 data-size="xs">
          					<p>166 lượt đánh giá</p>
          				</center>
        			</div><!-- /.col-lg-3 -->

        			<div class="col-lg-3 col-sm-6">
        				<center>
        					<h2>Tuần 44</h2>
        					<p>9.11 - 15-11</p>
        					<h2 class="rate-lg">5</h2>
          					<input id="input-21b" value="5" data-readonly="true" type="number" class="rating pink" min=0 max=5 step=0.1 data-size="xs">
          					<p>166 lượt đánh giá</p>
          				</center>
        			</div><!-- /.col-lg-3 -->

        			<div class="col-lg-3 col-sm-6">
        				<center>
        					<h2>Tuần 43</h2>
        					<p>9.11 - 15-11</p>
        					<h2 class="rate-lg">3.7</h2>
          					<input id="input-21b" value="3.7" data-readonly="true" type="number" class="rating pink" min=0 max=5 step=0.1 data-size="xs">
          					<p>166 lượt đánh giá</p>
          				</center>
        			</div><!-- /.col-lg-3 -->
      			</div>
			</div>

			<div class="list-feedback">
				<h1 class="title-h1">Đánh giá hiện tại về phục vụ</h1>
				<table class="table table-striped list-send-messages">
                <thead>
                <tr>
                    <th class="pink" style="width:3%">ID</th>
                    <th class="pink status-display" style="width:10%">Ngày</th>
                    <th class="pink" style="width:15%">Tên Store</th>
                    <th class="pink" style="width:15%">Tên</th>
                    <th class="pink" style="width:17%">Rate</th>
                    <th class="pink" style="width:30%">Nội dung phản hồi</th>
                </tr>
                </thead>
                <tbody class="list-incentives">
                    <tr>
                        <td>1</td>
                        <td class="status-display">
                        	04.11.2015<br>10:15
                        </td>
                        <td>The Kafe 1</td>
                        <td>Tuyen Dao</td>
                        <td>
                        	<input id="input-21b" value="1.5" data-readonly="true" type="number" class="rating pink" min=0 max=5 step=0.1 data-size="xs">
                        </td>
                        <td style="text-align:left">
                        	Đồ uống ngon. Nhân viên vui vẻ thân thiện. Nói chung là tốt!
                        </td>
                    </tr>



                    
                </tbody>
            </table>
			<ul class="pagination">
				<li><a href="#">1</a></li>
				<li class="active"><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
			</div>
        </div>
    </div>
@stop

@section('js')
	<script src="{{ url('theme/assets/rate-star') }}/js/star-rating.js" type="text/javascript"></script>
@stop
