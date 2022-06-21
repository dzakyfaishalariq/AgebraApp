@extends('pengajar.mytemplate.main')
@section('content')
    <div class="card text-info">
        Algebra/{{ $title }}
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body text-center">
                    <h6>Jumlah kelas yang di buat</h6>
                    <h1>0</h1>
                </div>
                <div class="card-footer bg-warning">
                    <div class="row">
                        <div class="col-sm-6">
                            Ruang Kelas
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary">Buat Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body text-center">
                    <h6>Jumlah Tugas yang di buat</h6>
                    <h1>0</h1>
                </div>
                <div class="card-footer bg-warning">
                    <div class="row">
                        <div class="col-sm-6">
                            Ruang Tugas
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary">Tugas Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body text-center">
                    <h6>Jumlah perserta yang di ajar</h6>
                    <h1>0</h1>
                </div>
                <div class="card-footer bg-warning">
                    <div class="row">
                        <div class="col-sm-6">
                            Ruang Peserta
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary">Ruang perserta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body text-center">
                    <h6>Jumlah Soal yang akan dibuat</h6>
                    <h1>0</h1>
                </div>
                <div class="card-footer bg-warning">
                    <div class="row">
                        <div class="col-sm-6">
                            Ruang Soal
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary">Buat Soal perserta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
