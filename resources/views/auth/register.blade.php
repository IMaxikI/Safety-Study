@extends('layouts/auth')

@section('title')
    Регистрация
@endsection

@section('header-btn')
    <a href="{{ route('login') }}" class="btn btn-primary me-2">Войти</a>
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-8">
            <div class="bg-white shadow-lg rounded d-flex flex-column align-items-center">
                <h3 class="text-center pt-2">Регистрация</h3>
                <div class="col-md-10 pe-0 mx-3">
                    <form method="POST" action="{{ route('register') }}" class="row g-3 py-4">
                        @csrf

                        <!-- Name -->
                        <div class="col-12">
                            <label>Имя</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                <input id="name" class="form-control" type="text" name="name"
                                       value="{{old('name')}}" required autocomplete="name"
                                       placeholder="Введите ваше имя..."/>
                            </div>
                            <x-input-error :messages="$errors->get('name')"/>
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                <input id="email" class="form-control" type="email" name="email"
                                       value="{{old('email')}}" required autocomplete="username"
                                       placeholder="Введите ваш email..."/>
                            </div>
                            <x-input-error :messages="$errors->get('email')"/>
                        </div>

                        <!-- Password -->
                        <div class="col-12">
                            <label>Пароль</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                <input id="password" class="form-control"
                                       type="password" name="password"
                                       required autocomplete="new-password"
                                       placeholder="Введите пароль..."/>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-12">
                            <label>Подтвердите пароль</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                <input id="password_confirmation" class="form-control"
                                       type="password" name="password_confirmation"
                                       required autocomplete="new-password" placeholder="Подтвердите пароль..."/>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                        </div>

                        <a class="" href="{{ route('login') }}">
                            Уже есть аккаунт?
                        </a>

                        <!-- Submit Button -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary w-100 px-4 mt-3">
                                Зарегистрироваться
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-btn')
    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link px-2 text-muted">Войти</a></li>
@endsection
