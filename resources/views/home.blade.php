@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
@guest
<div class=" m-4 d-flex justify-content-center m-sm-auto">
    <a class="btn btn-primary " href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
</div>
@endguest
@endsection