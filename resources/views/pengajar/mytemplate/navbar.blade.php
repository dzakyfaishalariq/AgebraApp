    <nav class="navbar sticky-top navbar-expand-lg bg-info">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Algebra</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link tombol" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tombol" href="#">Provil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tombol" href="#">Kelas Virtual</a>
            </li>
            </ul>
            <div class=" d-flex">
                <img src="{{ Auth::guard('pengajar')->user()->foto }}" class=" rounded-circle shadow-lg" alt="{{ Auth::guard('pengajar')->user()->nama_foto }}" width="30">
                <!---buat pembatas-->
                <div class="mx-2"></div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::guard('pengajar')->user()->nama_guru }}
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Kelas virtual</a></li>
                    <li><a class="dropdown-item" href="#">Tugas</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/logout_pengajar">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>