@extends('mytemplate.main')
@section('conten')
@auth
    @include('user_home')
@else
    @include('public_home')
@endauth
@endsection