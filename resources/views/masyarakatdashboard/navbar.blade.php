<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    {{-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}
    <form
        class="d-none d-sm-inline-block ml-md-3">      
            SIMDES-BUBUHAN   
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle text-gray-600" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Selamat Datang, {{ auth()->user()->nama }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              {{-- <a class="dropdown-item" href="/">Logout<i class="bi bi-box-arrow-in-right"></i></a>  --}}
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
            </div>

          </li>

         {{-- <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          
            <i class="text-gray-600">selamat datang Admin</i>                
            <a class="dropdown-item" href="/">
                <i class="bi bi-box-arrow-in-right"></i>
                Logout
            </a>
        </li>  --}}
     

    </ul>

</nav>
<!-- End of Topbar -->