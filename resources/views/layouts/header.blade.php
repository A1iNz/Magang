<div>
    <header class="p-2 border-bottom" style="background-color: #FFFFFF">
        <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                {{-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg> --}}
                    <img class="" style="width: 100px; height:100px" src="{{ asset('img/rsuds.png') }}" alt="">
                    <div class="text-center d-flex flex-warp ms-3">
                        <h4>Helpdesk Rumah Sakit <br> Umum Daerah Dr. Soetomo</h4>
                    </div>
                </a>
        
                <div class="d-flex ms-auto">
                    <ul class="nav px-3">
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Dashboard</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Pengaduan</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Hardware</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Laporan</a></li>
                    </ul>
                </div>

                <div class="me-3">
                    <a href=""><i class="fa-solid fa-bell fa-2xl" style="color: #000000;"></i></a>
                </div>
                
                <div class="dropdown text-end d-flex align-items-center justify-content-center">
                    <button style="background-color: #EAEAEA; width:120px; height: 90px" class="card d-block link-body-emphasis text-decoration-none border border-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/profile.png') }}" alt="mdo" width="80" height="80" class="rounded-circle">
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>