<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{ $title }}</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .scrol-bar {
            overflow-y: scroll;
            height: 400px;
        }
        .animasi_tabel{
            animation: animasi_masuk_web 1s;
        }
        @keyframes animasi_tabel {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> {{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> {{ session('error') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class=" col-sm-3">
                <div class=" card shadow-lg bg-body rounded">
                    <div class="card-header bg-primary text-white text-center">
                        <h6>Registrasi Admin</h6>
                    </div>
                    <div class="card-body">
                        <form action="/register_admin/applod" method="post">
                            @csrf
                            <div class=" form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class=" form-control" name="username" id="username" placeholder="Username" required>
                            </div>
                            <div class=" form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class=" form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class=" form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class=" form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <br>
                            <hr>
                            <button type="submit" class="btn btn-primary">kirim</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card shadow-lg bg-body rounded">
                            <div class="card-header text-center bg-primary text-white">
                                <h6>
                                    Data Perserta
                                </h6>
                            </div>
                            <div class="card-body text-center">
                                <a href="/area_perserta" class="btn btn-primary">
                                    <img src="img/perserta.png" alt="Perserta" class="rounded-circle" width="50px" height="50px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow-lg bg-body rounded">
                            <div class="card-header text-center bg-primary text-white">
                                <h6>
                                    Data Pengajar
                                </h6>
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-primary">
                                    <img src="img/Pengajar.png" alt="Perserta" class="rounded-circle" width="50px" height="50px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-9">
                <div class="card shadow-lg bg-body rounded">
                    @yield('content_admin')
                    <div class="card-footer">
                        <a href="/" class=" btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>