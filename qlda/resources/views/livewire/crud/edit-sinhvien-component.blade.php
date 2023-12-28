@section('title')
    Sửa thông tin Sinh viên
@endsection

<div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
            style="background-color: orange">
            <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}">TRANG CHỦ</a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}">TVU</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <div>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </a>
                    <form id="logout-form" style="display: none;" method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                    </form>
                </div>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">

                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">Admin</span>
                            <span class="text-secondary text-small">Administrator</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sinhvien') }}">
                        <span class="menu-title">Sinh viên</span>
                        <i class="mdi mdi-account menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('giangvien') }}">
                        <span class="menu-title">Giảng viên</span>
                        <i class="mdi mdi-account menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="menu-title">Năm học</span>
                        <i class="mdi mdi-calendar menu-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>

        {{-- Nội dung lớn --}}
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                <h5 class="card-title" style="float:left;">Sửa thông tin sinh viên</h5>
                                <a href="{{ route('sinhvien') }}" class="btn btn-sm btn-primary"
                                    style="float: right;">Xem sinh
                                    viên</a>
                            </div>
                            <div class="card-body">
                                @if (session()->has('message'))
                                    <div class="arlert arlert-success text-center">{{ session('succes') }}</div>
                                @endif
                                <form wire:submit.prevent="updateSinhvien">
                                    <div class="form-group">
                                        <label for="exampleInputMSSV1">Mã số sinh viên:</label>
                                        <input type="text" class="form-control" id="exampleInputMSSV1"
                                            wire:model='MSSV'>
                                        @error('MSSV')
                                            <span class="text-danger" style="font-size: 20px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Họ và tên sinh viên:</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            wire:model='name'>
                                        @error('name')
                                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email:</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            wire:model='email'>
                                        @error('email')
                                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Sửa thông tin sinh
                                        viên</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
