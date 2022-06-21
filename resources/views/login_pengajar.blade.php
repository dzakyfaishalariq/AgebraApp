<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algebra👋{{ $title }}</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <!--tampilan login -->
    @if(session('error'))
        <div class="alert alert-danger animasi_login" role="alert">
            <h4 class="alert-heading">{{ session('error') }}</h4>
            <p>Maaf silahkan anda melakukan registrasi dengan mengkelik <a href="/register"><b>Registrasi</b></a> dan melakukan isian kembali</p>
            <hr>
            <p class="mb-0">Selamat mencoba</p>
        </div>
    @endif
    <div class=" container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card animasi_login shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card-header bg-success text-white">
                        <h3 class=" text-center">Login Pengajar</h3>
                    </div>
                    <div class="card-body">
                        <form action="/login_pengajar/applod" method="POST">
                            @csrf
                            <div class="form-group animasi_login">
                                <label for="email">Email</label>
                                <input type="email" class="form-control shadow-lg p-3 mb-5 bg-body rounded" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group animasi_login">
                                <label for="password">Password</label>
                                <input type="password" class="form-control shadow-lg p-3 mb-5 bg-body rounded" id="password" name="password" placeholder="Password" required>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary animasi_tombo animasi_login animasi_tombol">Login</button>
                            <a href="/register" class=" btn btn-warning animasi_tombol animasi_login">Register</a>
                            <a href="/" class=" btn btn-info animasi_tombol animasi_login">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>