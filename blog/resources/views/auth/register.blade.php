@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/glav.css') }}">
@endpush

@section('content')
    <form action="{{ route('register.create') }}" method="post">
        @csrf
        <div class="container">
            <h1>Регистрация животного</h1>
            <p>Пжпжпж заполни эту форму и ты станешь животным</p>


            <label for="email"><b>Мыло</b></label>
            <input type="text" placeholder="Урони мыло" name="email" required>
            @error('email') {{ $message }} <br>@enderror
            <label for="psw"><b>Пароли чушь, чушь визжала</b></label>
            <input type="password" placeholder="ААААААА" name="password" required>

            @error('password') {{ $message }} <br>@enderror
            <label for="psw-repeat"><b>Продолжай пороть чушь</b></label>
            <input type="password" placeholder="ААААААА" name="password_confirmation" required>

            @error('password_confirmation') {{ $message }}<br> @enderror
            <hr>

            <p>Со входом в животное вы подтверждаете: <a href="#">пользовательское соглашение</a>.</p>
            <button type="submit" class="registerbtn">Региги</button>
        </div>

        <div class="container signin">
            <p>Ты уже животное? <a href="{{route('login')}}" class="@if( request()->get('login')) active-a @endif">Войди в животное</a>.</p>
        </div>
    </form>
@endsection
