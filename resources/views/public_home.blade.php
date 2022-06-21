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
        <div class="col-sm-12 animasi_navbar">
            <div class=" bg-primary rounded shadow-lg">
                <h1 class="text-white text-center">ATRIBUT</h1>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card animasi_masuk_web shadow-lg bg-body rounded">
                <div class="card-header bg-primary">
                    <h1 class=" card-title text-center text-white">
                        KELAS
                        <img src="img/icon kelas.png" class=" rounded-circle" width="50" height="50" alt="gambar class">
                    </h1>
                </div>
                <div class="card-body">
                    <p>Pada area kelas ini. Di sini para peserta ata mahasiswa dapat memilih kelas nya masing masing Peserta dapat juga memilih pelajaran yang di pilihnya dan mengasah kemampuan yan di milikinya</p>
                    <p class=" text-center">Kelas </p>
                    <h1 class=" text-center animasi_angka">0</h1>
                </div>
                <div class="card-footer">
                    <a href="#" class=" btn btn-info tombol_tengah rounded-pill">Lihat Kelas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card animasi_masuk_web shadow-lg bg-body rounded">
                <div class="card-header bg-warning">
                    <h1 class=" card-title text-center text-white">
                        PERINGKAT
                        <img src="img/peringkat icon.png" class=" rounded-circle" width="50" height="50" alt="gambar pringkat">
                    </h1>
                </div>
                <div class="card-body">
                    <p>Pada area Peringkat ini. Di sini para peserta atau mahasiswa dapat melihat peringkatnya masing-masing dengan membandingkan kemampuan dengan peserta lainnya</p>
                    <p class=" text-center">Perserta </p>
                    <h1 class=" text-center animasi_angka">0</h1>
                </div>
                <div class="card-footer">
                    <a href="#" class=" btn btn-info tombol_tengah rounded-pill">Lihat Peringkat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card animasi_masuk_web shadow-lg bg-body rounded">
                <div class="card-header bg-success">
                    <h1 class=" card-title text-center text-white">
                        PELAJARAN
                        <img src="img/study icon.png" class=" rounded-circle" width="50" height="50" alt="gambar pringkat">
                    </h1>
                </div>
                <div class="card-body">
                    <p>Pada area Pelajaran ini. Di sini para peserta ata mahasiswa dapat memilih pelajaran yang akan di minatinya dengan mengukur kemampuan nya untuk memberikan motivasi dalam belajar</p>
                    <p class=" text-center">Pelajaran </p>
                    <h1 class=" text-center animasi_angka">0</h1>
                </div>
                <!--buat tombol ukuran memanjang-->
                <div class="card-footer">
                    <a href="#" class=" btn btn-info tombol_tengah rounded-pill">Lihat Pelajaran</a>
                </div>
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