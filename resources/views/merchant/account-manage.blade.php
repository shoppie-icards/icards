@extends('layouts.master')
@section('css')

@stop
@section('title')
    <div class="title-pages">
        <h2>Quản trị thành viên</h2>
        <div class="wizard-progress">
            <ul class="winzard">
                <li class="active"><i class="fa fa-circle"></i> Danh sách</li>
                <li><i class="fa fa-circle"></i> Chi tiết thành viên</li>
            </ul>
        </div>
    </div>

@stop

@section('content')
	<div class="account-manage-container">
        <div class="col-lg-12">
            <h1 class="title-h1">Danh sách thành viên</h1>

            <div class="clearfix"></div>
            	<div class="col-lg-1">
            		Bộ lọc
            	</div>

            	<div class="col-lg-3">
            		<div class="form-group">
		                <select class="form-control" id="object-apply">
		                    <option>Hạng thẻ</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                </select>
		            </div>
            	</div>

            	<div class="col-lg-3">
            		<div class="form-group">
		                <select class="form-control" id="object-apply">
		                    <option>Trạng thái</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                </select>
		            </div>
            	</div>

            	<div class="col-lg-5">
            		<div class="form-group has-feedback has-feedback-left">
            			<i class="form-control-feedback glyphicon glyphicon-search" style="float:left"></i>
    					<input type="text" class="form-control" placeholder="Tìm kiếm" />
  					</div>
            	</div>

		<table class="table table-striped list-send-messages">
                <thead>
                <tr>
                    <th class="pink" style="width:3%">ID</th>
                    <th class="pink status-display" style="width:10%">Ảnh</th>
                    <th class="pink" style="width:15%">Tên thành viên</th>
                    <th class="pink" style="width:15%">Hạng thẻ</th>
                    <th class="pink" style="width:17%">Điểm</th>
                    <th class="pink status-display" style="width:15%">Ngày đăng ký</th>
                    <th class="pink" style="width:15%">Trạng thái</th>
                </tr>
                </thead>
                <tbody class="list-incentives">
                    <tr>
                        <td>134324</td>
                        <td class="status-display">
                        	<img src="{{ URL('theme/images') }}/logo-default.png" width="50">
                        </td>
                        <td>Tuyen Dao</td>
                        <td>Vàng</td>
                        <td>12,345</td>
                        <td class="status-display">04.11.2015</td>
                        <td>Active</td>
                    </tr>

                    <tr>
                        <td>134324</td>
                        <td class="status-display">
                        	<img src="{{ URL('theme/images') }}/logo-default.png" width="50">
                        </td>
                        <td>Tuyen Dao</td>
                        <td>Vàng</td>
                        <td>12,345</td>
                        <td class="status-display">04.11.2015</td>
                        <td>Active</td>
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
@stop

@section('js')
@stop
