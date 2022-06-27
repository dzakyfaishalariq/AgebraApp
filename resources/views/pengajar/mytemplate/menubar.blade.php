<!--- menu bar -->
<div class="row">
    <div class="col-sm-12">
        <div class=" card shadow-lg rounded">
            <div class=" card-header bg-warning text-white">
                <h5 class=" text-center">Menu</h5>
            </div>
            <div class="card-body">
                <div class=" list-group-item-info">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-sm-12">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action shadow">
                                        <i class="fas fa-home"></i>
                                        Home
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action shadow">                                 
                                        <i class="fas fa-user"></i>
                                        Profil
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action shadow">
                                        <i class="fas fa-book"></i>
                                        Kelas virtual
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action shadow">
                                        <i class="fas fa-tasks"></i>
                                        Tugas
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action shadow">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" col-sm-12">
        <!--identitas-->
        <div class="card shadow-lg rounded">
            <div class="card-header bg-info text-white">
                <h5 class=" text-center">Identitas</h5>
            </div>
            <div class="card-body">
                <div class=" row">
                    <div class="col-sm-3">
                        <img src="{{ Auth::guard('pengajar')->user()->foto }}" alt="{{ Auth::guard('pengajar')->user()->nama_foto }}" width="60px" class=" rounded-circle">  
                    </div>
                    <div class="col-sm-9">
                        <h5 >{{ Auth::guard('pengajar')->user()->nama_guru }}</h5>
                        <p><b>NIP</b> : {{ Auth::guard('pengajar')->user()->nip }} </p>
                        <p><b>Email</b> : {{ Auth::guard('pengajar')->user()->email }} </p>
                        <p>Alamat : </p>
                        <div class="card">
                            <div class="card-body">
                                <p>{{ Auth::guard('pengajar')->user()->alamat }}</p>
                            </div>
                        </div>
                        <hr>
                        <a href="#" class=" btn btn-info">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>