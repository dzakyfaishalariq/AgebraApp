<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algebra👋{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @include('pengajar.mytemplate.navbar')
    <div class=" container-fluid">
        <div class=" row">
            <div class="col-sm-3">
                @include('pengajar.mytemplate.menubar')
            </div>
            <div class="col-sm-9">
                <div class="card shadow-lg rounded">
                    <div class="card-header bg-warning text-white">
                        <h5 class=" text-center">Ruang Kerja</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll_vertikal">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pengajar.mytemplate.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>