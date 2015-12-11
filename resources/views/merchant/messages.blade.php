@extends('layouts.master')
@section('css')

@stop
@section('title')
    <div class="title-pages">
        <h2>Gửi tin nhắn</h2>
    </div>
@stop
@section('content')
    <div class="messages-container">
        <div class="col-lg-6">
            <h1 class="title-h1">Nhập nội dung gửi tin nhắn</h1>
            <p>Nhập nội dung tin nhắn vào ô bên dưới & gửi tới tất cả các thành viên active của thương hiệu :</p>
            <div class="form-group">
                <form id="myForm">
                <textarea class="form-control" id="content-message" name="limitedtextarea" onKeyDown="limitText(this.form.limitedtextarea,this.form.countdown,100)" onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,100)" rows="5" placeholder="Nhập nội dung tin nhắn" name=""></textarea>
                You have <input readonly type="text" name="countdown" size="3" value="100"> characters left.
            </form>

            </div>

            <div class="form-group">
                <select class="form-control">
                    <option>Liên kết chương trình ưu đãi</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="form-group">
                <button type="button" class="form-control btn btn-pink"><i class="fa fa-paper-plane"></i> &nbsp; Gửi tới 567 thành viên</button>
            </div>
        </div>


        <div class="col-lg-6">
            <h1 class="title-h1">Hiển thị trên máy thành viên</h1>
            <p>Dưới đây là nội dung hiển thị được gửi tới máy thành viên. Các hệ điều hành iOS & Android :</p>
            <center>
                <img class="demo-messages" src="{{ URL('') }}/theme/images/demo-message.png">
                <p class="text-messages">The Kafe: Nhân đôi điểm thưởng cho tất cả thành viên The Kafe duy nhất 01 ngày Hallowen trên toàn quốc...</p>
            </center>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <h1 class="title-h1">Lịch sử gửi tin nhắn</h1>
            <table class="table table-striped list-send-messages">
                <thead>
                <tr>
                    <th class="pink" style="width:3%">ID</th>
                    <th class="pink" style="width:50%">Nội dung tin nhắn</th>
                    <th class="pink status-display" style="width:19%">Ngày gửi</th>
                    <th class="pink" style="width:18%">Gửi thành công</th>
                </tr>
                </thead>
                <tbody>


                    <tr>
                        <td>1</td>
                        <td style="text-align:left">Nhân dịp 20/10 giảm giá 20% cho tất cả khách hàng VÀNG, giảm giá 30% cho tất cả khách hàng KIM CƯƠNG</td>
                        <td class="status-display">04.11.2015<br>10:15</td>
                        <td>830 &nbsp; &nbsp; +5%</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td style="text-align:left">Nhân dịp 20/10 giảm giá 20% cho tất cả khách hàng VÀNG, giảm giá 30% cho tất cả khách hàng KIM CƯƠNG</td>
                        <td class="status-display">04.11.2015<br>10:15</td>
                        <td>830 &nbsp; &nbsp; +5%</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td style="text-align:left">Nhân dịp 20/10 giảm giá 20% cho tất cả khách hàng VÀNG, giảm giá 30% cho tất cả khách hàng KIM CƯƠNG</td>
                        <td class="status-display">04.11.2015<br>10:15</td>
                        <td>830 &nbsp; &nbsp; +5%</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td style="text-align:left">Nhân dịp 20/10 giảm giá 20% cho tất cả khách hàng VÀNG, giảm giá 30% cho tất cả khách hàng KIM CƯƠNG</td>
                        <td class="status-display">04.11.2015<br>10:15</td>
                        <td>830 &nbsp; &nbsp; +5%</td>
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
<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    } else {
        limitCount.value = limitNum - limitField.value.length;
    }
}
</script>

@stop
