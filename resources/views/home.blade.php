@extends('mytemplate.main')
@section('conten')
@auth
    @include('user_home')
@else
<div class=" container-fluid">
        <div class="card bg-dark text-white text-center animasi_masuk_web shadow-lg p-3 mb-5 bg-body rounded">
            <!---- ukuran gambar 500 x 500 --->
            <img src="https://source.unsplash.com/1200x400?teknologi" class="card-img" alt="gambar" width="1000" height="500">
            <div class="card-img-overlay">
            <h1 class="card-title">Algebra App</h1>
            <p class="card-text">Tempat untuk berselancar ilmu baik dengan memanfaatkan platform yang kami buat ini atau melakukan pembelajaran di dalamnya</p>
            <h1 class="card-text" id="perkiraan_cuaca"></h1>
            <h1 id="jam_dijital" class=" card-text"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    
                </div>
            </div>
        </div>
        <!---perkiraan cuaca --->
        <script>
            var x = document.getElementById("perkiraan_cuaca");
            var today = new Date();
            var hari = today.getDay();
            var tanggal = today.getDate();
            var bulan = today.getMonth();
            var tahun = today.getFullYear();
            var hari_ini = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
            var bulan_ini = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            x.innerHTML = hari_ini[hari] + ", " + tanggal + " " + bulan_ini[bulan] + " " + tahun;
        </script>
        <!---jam dijital dengan berubah setiap detik dan pengingat shalat --->
        <script>
            var x = document.getElementById("jam_dijital");
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            var jam = h + ":" + m + ":" + s;
            x.innerHTML = jam;
            setTimeout(function () {
                jam_dijital();
            }, 1000);
            function jam_dijital() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                var jam = h + ":" + m + ":" + s;
                x.innerHTML = jam;
                setTimeout(function () {
                    jam_dijital();
                }, 1000);
            }
        </script>
</div>
@endauth
@endsection