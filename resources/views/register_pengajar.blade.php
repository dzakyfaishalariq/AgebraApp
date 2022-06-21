<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algebra👋{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styregister.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 offset-md-1">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h3 class=" text-center">Register Pengajar</h3>
                    </div>
                    <div class="card-body">
                        <form action="/register_pengajar/applod" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control shadow-lg bg-body rounded" name="nama_guru" id="nama" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <!--nip ---->
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control shadow-lg bg-body rounded" name="nip" id="nip" placeholder="NIP" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <!--alamat text area -->
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control shadow-lg bg-body rounded" name="alamat" id="alamat" rows="3" placeholder="Alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- no hp -->
                                    <div class="form-group">
                                        <label for="no_hp">No HP</label>
                                        <input type="text" class="form-control shadow-lg bg-body rounded" name="no_hp" id="no_hp" placeholder="No HP" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- email -->
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control shadow-lg bg-body rounded" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- password -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control shadow-lg bg-body rounded" name="password" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- aplod file foto -->
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control shadow-lg bg-body rounded" name="foto" id="foto" placeholder="Foto" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning btn-block shadow-lg">Register</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button type="reset" class="btn btn-danger btn-block shadow-lg">Reset</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--login -->
                                    <div class="form-group">
                                        <a href="/login" class="btn btn-success btn-block shadow-lg">Login</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!--kembali -->
                                    <div class="form-group">
                                        <a href="/" class="btn btn-primary btn-block shadow-lg">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>