@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/logigi.css') }}">
@endpush

@section('content')
    <form action="{{ route('register.create') }}" method="post">
        @csrf
        <div class="container">
            <h1>Регистрация аккаунта</h1>
            <p>Заполните форму, чтобы создать и войти в аккаунт</p>


            <label for="email"><b>Email или Login</b></label>
            <input type="text" placeholder="******" name="email" required>
            @error('email') {{ $message }} <br>@enderror
            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="******" name="password" required>

            @error('password') {{ $message }} <br>@enderror
            <label for="psw-repeat"><b>Повторите пароль</b></label>
            <input type="password" placeholder="******" name="password_confirmation" required>

            @error('password_confirmation') {{ $message }}<br> @enderror
            <hr>

            <p>Со входом в аккаунт вы подтверждаете: <a href="#">пользовательское соглашение</a>.</p>
            <button type="submit" class="registerbtn">Регистрация</button>
        </div>

        <div class="container signin">
            <p>Уже есть аккаунт? <a href="{{route('login')}}" class="@if( request()->get('login')) active-a @endif">Войди!</a>.</p>
        </div>
    </form>
@endsection
