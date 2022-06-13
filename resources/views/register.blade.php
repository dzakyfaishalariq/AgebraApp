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
<!--meletakan posisi card di tengah-->
<div class="container">
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
    <div class="row">
        <div class="col-md-9 offset-md-1">
            <div class="card">
                <div class="card-header edit-h">
                    <h3 class=" text-center">Register</h3>
                </div>
                <div class="card-body edit-b">
                    <form action="/register/applod" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!--form pilihan jenis kelamin-->
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="none">none</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!--jenjang pendidikan-->
                                <div class="form-group">
                                    <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                                    <select class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan">
                                        <option value="none">none</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="number" class="form-control" id="umur" name="umur" placeholder="Enter your age" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!---tempat lahir-->
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter your place of birth" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Enter your date of birth" required>
                                </div>
                            </div>
                            <!---alamat textarea-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Enter your address" required></textarea>
                                </div>
                            </div>
                            <!--input foto-->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="formFileLg" class="form-label">Foto</label>
                                    <input class="form-control form-control-lg" name="foto" id="formFileLg" type="file">
                                </div>
                            </div> 
                            <!--email-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <!--password yang bisa di aktifkan untuk melihat passwot-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!---button register-->
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <hr>
                            <div class="col-sm-12">
                                <a href="/login" class="btn btn-secondary btn-block">Login</a>
                            </div>
                            <hr>
                            <div class="col-sm-12">
                                <a href="/" class="btn btn-warning btn-block">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--script bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>