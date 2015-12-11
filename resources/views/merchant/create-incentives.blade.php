@extends('layouts.master')
@section('css')

@stop

@section('title')
    <div class="title-pages">
        <h2>Tạo chương trình ưu đãi</h2>
    </div>
@stop

@section('content')
	<div class="incentives-container">
        <div class="col-lg-6">
            <h1 class="title-h1">Tạo chương trình ưu đãi</h1>
            <p>Nhập nội dung chương trình vào ô bên dưới & gửi tới tất cả các thành viên active của thương hiệu :</p>
            
			<div class="form-group position-counter">
                <p id="counter-title" class="counter">60/60</p>
                <input type="text" class="form-control" id="titleIncentives" maxlength="60" rows="5" placeholder="Tên chương trình">
            </div>




            <div class="form-group position-counter">
                <p id="counter-content" class="counter">140/140</p>
                <textarea class="form-control" rows="5" id="contentIncentives" maxlength="140" placeholder="Nội dung chương trình" name=""></textarea>
                
            </div>

            <div class="row info-incentives">
            	<div class="col-lg-6">

					<div class="form-group">
						<label for="start-date">Ngày bắt đầu</label>
						<input type="date" class="form-control" id="start-date">
					</div>
					
					<div class="form-group">
						<label for="object-apply">Đối tượng áp dụng</label>
		                <select class="form-control" id="object-apply">
		                    <option>Vàng, Bạc, Mem</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                </select>
		            </div>

		            <div class="form-group">
		                	<button type="button" class="btn btn-pink img-avatar"><i class="fa fa-plus"></i> &nbsp; Add ảnh đại diện</button>
		                    <input type="file" name="logo" value="" id="logo" class="upload-avartar" />
		                    <ul class="list-image-incentives-avatar">
				            	<li>Ảnh 1 &nbsp;<i class="fa fa-trash pink"></i></li>
				            </ul>

		            </div>
		            <div class="form-group">
		                	<button type="button" class="btn btn-pink img-avatar"><i class="fa fa-plus"></i> &nbsp; Add ảnh nội dung</button>
		                    <input type="file" name="logo" value="" id="logo" class="upload-content" />
		                    <ul class="list-image-incentives-content">
				            	<li>Ảnh 1 &nbsp;<i class="fa fa-trash pink"></i></li>
				            	<li>Ảnh 2 &nbsp;<i class="fa fa-trash pink"></i></li>
				            </ul>

		            </div>

		            <div class="form-group">
		                <button type="button" class="btn btn-pink btn-lg btn-create-incentives">Tạo ưu đãi</button>
		            </div>

            	</div>

            	<div class="col-lg-6">
            		<div class="form-group">
						<label for="end-date">Ngày kết thúc</label>
						<input type="date" class="form-control" id="end-date">
					</div>
					<p>Nội dung ảnh đại diện hiển thị trên máy thành viên :</p>
					<div class="showImagesAvatar">

					</div>
            	</div>
            </div>

        </div>


        <div class="col-lg-6">
            <h1 class="title-h1">Hiển thị trên máy thành viên</h1>
            <p>Nội dung chương trình của bạn sẽ hiển thị như bên dưới. Phần chi tiết ưu đãi:</p>
            <div class="fixDemoMobile" style="position:relative">

                <p class="title-demo-incentives">The Kafe Hallowen</p>
                <p class="title-demo-incentives-2">The Kafe Hallowen</p>
                <p class="content-demo-incentives">Tiệc hallowen dành cho tất cả các member của The Kafe. Giảm giá 50% cho tất cả các member đồng thời tặng 1 cặp bánh Cheese cho nhóm 4 người</p>


                <img class="demo-messages" src="{{ URL('') }}/theme/images/demo-incentives.png">
            </div>
                
            </center>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <h1 class="title-h1">Lịch sử chương trình ưu đãi</h1>
            <table class="table table-striped list-send-messages">
                <thead>
                <tr>
                    <th class="pink" style="width:3%">ID</th>
                    <th class="pink" style="width:50%">Tên nội dung chương trình</th>
                    <th class="pink status-display" style="width:17%">Ảnh</th>
                    <th class="pink" style="width:15%">Thời gian</th>
                    <th class="pink" style="width:15%">Trạng thái</th>
                </tr>
                </thead>
                <tbody class="list-incentives">
                    <tr>
                        <td>1</td>
                        <td style="text-align:left">
                        	<span>Valentin hồng</span><br>
							Ưu đãi 20% giảm giá cho tất cả thành viên Vàng, Bạc, Đồng
                        </td>
                        <td class="status-display"><img src="{{ URL('theme') }}/images/logo-default.png" width="50"></td>
                        <td>04.11.2015<br>10:15</td>
                        <td><span>Active &nbsp;<i class="fa fa-trash pink"></i></span></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td style="text-align:left">
                        	<span>Valentin hồng</span><br>
							Ưu đãi 20% giảm giá cho tất cả thành viên Vàng, Bạc, Đồng
                        </td>
                        <td class="status-display"><img src="{{ URL('theme') }}/images/logo-default.png" width="50"></td>
                        <td>04.11.2015<br>10:15</td>
                        <td><span>Finish</span></td>
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
