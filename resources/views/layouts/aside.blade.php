<div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <button type="button" style="color:#fff" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle-3">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
                <li class="hidde-togle">
                    <a href="#" data-toggle="collapse" id="menu-toggle-2"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-th-large fa-stack-1x "></i></span>
                    </a>
                </li>
                <div style="clear:both"></div>
                <div class="logo">
                    <img src="{{ URL('/theme') }}/images/logo-default.png" alt="logo" class="img-circle">
                    <h1>welcome ! Admin</h1>
                    <p>how are you today ? <a href="#" class="pink"><i class="fa fa-envelope-o"></i></a> </p>
                </div>
                <li class="current">
                    <a href="{{ URL('merchant/initialize-card') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cog fa-stack-1x"></i></span> Khởi tạo thẻ</a>
                </li>
                <li>
                    <a href="{{ URL('merchant/send-messages') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-paper-plane-o fa-stack-1x "></i></span> Gửi tin nhắn</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-tag fa-stack-1x "></i></span> Tạo ưu đãi</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-star fa-stack-1x "></i></span> Quản trị phản hồi</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span> Quản trị member</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-area-chart fa-stack-1x "></i></span> Thống kê</a>
                </li>
                <div class="coppy-right">
                    <img src="{{ URL('/theme') }}/images/logo.png" title="logo" class="img-circle">
                    <h1>iCards</h1>
                    <h2>A product of Shoppie Pte. Ltd. </h2>
                    <p>Copyright 2015 iCards.</p>
                    <p>All rights reserved!</p>
                </div>
            </ul>
        </div>
