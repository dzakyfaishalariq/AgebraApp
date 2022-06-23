@extends('admin.mytemplate.main')
@section('content')
    <h1>Selamat datang</h1>
    @auth
    <h2>
        {{ Auth::guard('admin')->user()->username }}
    </h2>
    @endauth
    <a href="/logout_admin" class="btn btn-primary">Logut</a>
@endsection