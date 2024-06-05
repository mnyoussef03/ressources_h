@extends('layouts.app')

@section('title')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="p-3">Welcome Back</h3>
                </div>
                <div class="card-body">
                    @guest


                    <a href="/login" id="" class="btn btn-outline-primary">
                        Login
                    </a>
                    @endguest
                    @auth
                    <a href="{{url('admin/home')}} " id="" class="btn btn-outline-primary">
                    Home
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
