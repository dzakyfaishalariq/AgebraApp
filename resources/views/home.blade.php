@extends('mytemplate.main')
@section('conten')
<div class="row">
    @foreach($kumpulan_data as $data)
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header text-center">
                <!---index data-->
                <h3>data ke-{{$loop->iteration}}</h3>
            </div>
            <div class="card-body">
                <p>Nama : {{ $data->name }}</p>
                <p>Jenis Kelamin : {{ $data->jenis_kelamin }}</p>
                <p>Jenjang Pendidikan : {{ $data->jenjang_pendidikan }}</p>
                <p>Umur : {{ $data->umur }}</p>
                <p>Tempat Lahir : {{ $data->tempat_lahir }}</p>
                <p>Tanggal Lahir : {{ $data->tanggal_lahir }}</p>
                <p>Alamat : {{ $data->alamat }}</p>
                <hr>
                <!--tampilkan foto dengan ukuran 200 x 300 -->

                <img src="{{ $data->foto }}" alt="foto" class="img-fluid" width="50" height="50">
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection