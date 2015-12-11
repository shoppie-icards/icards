@extends('layouts.master')
@section('css')

@stop

@section('title')
    <div class="title-pages">
        <h2>QUẢN TRỊ THU NGÂN</h2>
    </div>
@stop

@section('content')
    <div class="manage-icards">
        <div class="row">
            <div class="col-lg-6">
                <h1>Nhập điểm thưởng</h1>

                <div class="form-group has-feedback has-feedback-left">
                    <i class="form-control-feedback glyphicon glyphicon-search pink" style="float:left"></i>
                    <input type="text" class="form-control" id="id-account" placeholder="Nhập mã khách hàng" value="21312" />
                </div>
                
                <!-- Result search -->
                <div class="box-trackby-lv">
                    <i id="show-checked-user" class="fa fa-check-square pink position-checked-search"></i>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="pink" style="width:10">Ảnh</th>
                            <th class="pink status-display" style="width:15%">Tên KH</th>
                            <th class="pink" style="width:20%">Vàng</th>
                            <th class="pink" style="width:20%">Điểm</th>
                        </tr>
                        </thead>
                        <tbody class="list-incentives">
                            <tr>
                                <td>
                                    <img src="{{ URL('theme/images') }}/logo-default.png" width="80">
                                </td>
                                <td><br>Tuyen Dao</td>
                                <td><br>12312312</td>
                                <td><br>101,01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End resut search -->

                <div class="button-add-point-track-by-id show-box-add-point">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nhập mã hóa đơn" />
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <p class="value-default">điểm</p>
                        <input type="text" name="point" id="" placeholder="Nhập giá trị hóa đơn" class="form-control point" value="">
                    </div>

                    <p class="note">Điểm thưởng tương ứng = <span class="pink">200 điểm</span></p>

                    <div class="clearfix"></div>

                    <div class="form-group pull-right">
                        <input type="button" class="btn btn-pink" value="Xác nhận">
                    </div>

                </div>


            </div>


            <div class="col-lg-6">
                <h1>Đổi điểm thưởng</h1>

                <div class="form-group has-feedback has-feedback-left">
                    <i class="form-control-feedback glyphicon glyphicon-search pink" style="float:left"></i>
                    <input type="text" class="form-control" placeholder="Nhập mã khách hàng" />
                </div>

                
            </div>
        </div>

        <!-- List -->
        <div class="col-lg-12 list-track-by-account">
            <h1>Bảng tổng kết ngày 22.07.2015</h1>
            <table class="table table-striped list-send-messages">
                <thead>
                <tr>
                    <th class="pink" style="width:10">Ngày</th>
                    <th class="pink status-display" style="width:15%">ID khách hàng</th>
                    <th class="pink" style="width:20%">Tên KH</th>
                    <th class="pink" style="width:20%">Hình thức GD</th>
                    <th class="pink" style="width:20%">Giá trị</th>
                </tr>
                </thead>
                <tbody class="list-incentives">
                    <tr>
                        <td>22-07-2016</td>
                        <td>12312312</td>
                        <td>Tuyen Dao</td>
                        <td>Tích điểm</td>
                        <td>+150 điểm</td>
                    </tr>

                    <tr>
                        <td>22-07-2016</td>
                        <td>12312312</td>
                        <td>Tuyen Dao</td>
                        <td>Tích điểm</td>
                        <td>+150 điểm</td>
                    </tr>

                    <tr>
                        <td>22-07-2016</td>
                        <td>12312312</td>
                        <td>Tuyen Dao</td>
                        <td>Tích điểm</td>
                        <td>+150 điểm</td>
                    </tr>

                    <tr>
                        <td>22-07-2016</td>
                        <td>12312312</td>
                        <td>Tuyen Dao</td>
                        <td>Tích điểm</td>
                        <td>+150 điểm</td>
                    </tr>

                    
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
@stop
