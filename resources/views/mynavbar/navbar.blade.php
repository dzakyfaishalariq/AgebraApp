<nav class="navbar sticky-top navbar-expand-lg bg-success animasi_navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Algebra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link tombol rounded-pill" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tombol rounded-pill" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tombol rounded-pill" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tombol rounded-pill">Disabled</a>
                    </li>
                </ul>
                <!--jika login berhasil maka tampilkan nama user dan tombol logout-->
                @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <!--tampilin gambar user-->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Auth::user()->foto }}" alt="avatar" class="rounded-circle" width="30" height="30">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Kelas</a></li>
                                <li><a class="dropdown-item" href="#">Pencapaian</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                @else
                <ul class=" navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link tombol rounded-pill" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tombol rounded-pill" href="/register">Register</a>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
</nav>