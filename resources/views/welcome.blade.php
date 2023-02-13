@extends('layouts/auth')

@section('title')
    SafetyStudy
@endsection

@section('header-btn')
    @auth
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Продолжить</a>
    @else
        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Войти</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
    @endauth
@endsection

@section('content')
    <div class="py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg px-5">Продолжить</a>
                @else
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 me-md-2">Зарегистрироваться</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg px-4">Войти</a>
                @endauth


            </div>
        </div>
    </div>
@endsection

@section('footer-btn')
    @auth
    @else
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link px-2 text-muted">Войти</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link px-2 text-muted">Регистрация</a></li>
    @endauth
@endsection
