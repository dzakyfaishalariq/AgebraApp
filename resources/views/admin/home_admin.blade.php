@extends('admin.mytemplate.main')
@section('content')
    <h1>Selamat datang</h1>
    <h2>
        {{ Auth::guard('admin')->user()->username }}
    </h2>
    <a href="/logout_admin" class="btn btn-primary">Logut</a>
@endsection