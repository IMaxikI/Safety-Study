@extends('layouts/auth')

@section('title')
    Авторизация
@endsection

@section('header-btn')
    <a href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
@endsection

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div class="d-flex justify-content-center my-5">
        <div class="col-xl-4 col-lg-5 col-md-8">
            <div class="bg-white shadow-lg rounded d-flex flex-column align-items-center">
                <h3 class="text-center pt-2">Авторизация</h3>
                <div class="col-md-10 pe-0 mx-3">
                    <form method="POST" action="{{ route('login') }}" class="row g-3 py-4">
                        @csrf

                        <!-- Email Address -->
                        <div class="col-12">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                <input id="email" class="form-control" type="email" name="email"
                                       placeholder="Введите ваш email..." value="{{old('email')}}" required
                                       autocomplete="username"/>
                            </div>
                            <x-input-error :messages="$errors->get('email')"/>
                        </div>

                        <!-- Password -->
                        <div class="col-12">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                <input id="password" class="form-control" type="password"
                                       name="password" placeholder="Введите ваш пароль..."
                                       required autocomplete="current-password"/>
                            </div>
                            <x-input-error :messages="$errors->get('password')"/>
                        </div>

                        <div class="col-12 d-flex">
                            <!-- Remember Me -->
                            <div class="col-6">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">Сохранить вход</span>
                                </label>
                            </div>

                            <!-- Forgot Password -->
                            <div class="col-6 text-end">
                                <a href="{{ route('password.request') }}" class="text-primary">Забыли пароль?</a>
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary w-100 px-4 mt-3">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-btn')
    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link px-2 text-muted">Регистрация</a></li>
@endsection
