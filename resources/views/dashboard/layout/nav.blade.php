<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3  d-flex align-items-end">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm "><a class="opacity-5 text-dark text-decoration-none" href="javascript:;">Halaman</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('titles')</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">@yield('titles')</h6>
        </nav>
        
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger text-sm px-4 text-capitalize" style="position: absolute; top:30px; right:0px;">
                <b>Keluar</b>
            </button>
        </form>
    </div>

    
</nav>
<!-- End Navbar -->
