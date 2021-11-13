@extends('layouts.home')

@section('content')
    <header class="text-center text-white masthead" style="background:url('/src/assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Cadastre seu e-mail</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form method="POST" action="/create/email">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email..."></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">Cadastrar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
@endsection
