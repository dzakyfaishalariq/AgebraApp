@extends('register_admin')
@section('content_admin')
    <div class="card-body bg-info text-center text-white">
        <h5>
            Data Admin
        </h5>
    </div>
    <div class="card-body">
        <div class=" scrol-bar">
            <form action="/cari_data_admin" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Cari" name="cari" placeholder>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 text-end">
                        <span class="badge rounded-pill text-bg-danger">{{ $jumlah_data }}</span>
                    </div>
                </div>
            </form>
            <hr>
            <table class="table table-striped table-dark shadow-lg bg-body rounded">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data as $d)
                    <tr class="animasi_tabel">
                        <td><span class=" badge rounded-pill text-bg-success shadow-lg">{{ $loop->iteration }}</span></td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->email }}</td>
                        <td>
                            <a href="/hapus/admin/{{ $d->id }}" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id }}">
                                Ubah
                            </button>
                        </td>
                    </tr>
                    <!--modal-->
                    <div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning text-white text-center">
                                        <h5 class="modal-title" id="exampleModalLabel">Ubah data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/edit_data_admin/{{ $d->id }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class=" form-group">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class=" form-control" value="{{ $d->username }}" name="username" id="username" placeholder="Username" required>
                                            </div>
                                            <div class=" form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class=" form-control" value="{{ $d->email }}" name="email" id="email" placeholder="Email" required>
                                            </div>
                                            <div class=" form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class=" form-control" value="{{ Crypt::decrypt($d->password) }}" name="password" id="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class = " btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                @endforeach
            </table>
        </div>
    </div>
@endsection