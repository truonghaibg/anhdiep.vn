<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" target="_blank">
                <img src="{{URL::asset('admin/images/logo/default.png')}}" alt="Logo">
            </a>
            <a class="navbar-brand hidden" href="{{url('/')}}" target="_blank">
                <img src="{{URL::asset('admin/images/logo/logo_original.png')}}" alt="Logo">
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{url('backend')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Danh mục chính</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Quản lý sản phẩm</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{url('backend/category-product')}}">Danh mục sản phẩm</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{url('backend/product')}}">Danh sách sản phẩm</a></li>
                        <li><i class="fa fa-bars"></i><a href="{{url('backend/size')}}">Kích thước</a></li>
                        <li><i class="fa fa-share-square-o"></i><a href="{{url('backend/color')}}">Màu sắc</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản lý tin tức</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Danh mục tin tức</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Danh sách tin tức</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Bài viết của trang</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Đơn đặt hàng</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('backend/order')}}">Order</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('backend/payment')}}">Payment</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('backend/delivery')}}">Delivery</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Other</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('backend/gender')}}">Gender</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('backend/role')}}">Role</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{url('backend/subscribe')}}">Subscribe</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>