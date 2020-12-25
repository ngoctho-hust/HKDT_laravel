<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="">Hộ Khẩu Điện Tử</a>
            <a class="navbar-brand hidden" href="">HKDT</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="@yield('thong_ke')">
                    <a href="{{ route('statistic') }}"> <i class="menu-icon fa fa-bar-chart"></i>Thống kê </a>
                </li>
                <li class="@yield('quan_ly_so_ho_khau')">
                    <a href="{{ route('sohokhau.index') }}"> <i class="menu-icon fa fa-book"></i>Quản lý sổ hộ khẩu </a>
                </li>
                <li class="@yield('quan_ly_nhan_khau')">
                    <a href="{{ route('nhankhau.index') }}"> <i class="menu-icon fa fa-id-card"></i>Quản lý nhân khẩu </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
