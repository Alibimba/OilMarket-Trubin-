@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/logigi.css') }}">
@endpush

@section('content')

        <form action="{{route('login.submit')}}" class="auth-form" method="post">
            @csrf
            <div class="container">
                <h1>Залогинься, животное</h1>

                <label for="email"><b>Мыло</b></label>
                <input type="text" placeholder="Урони мыло" name="email" required>
                @error('email') {{ $message }} <br>@enderror
                <label for="psw"><b>Пароли чушь, чушь визжала</b></label>
                <input type="password" placeholder="ААААААА" name="password" required>


                @error('password_confirmation') {{ $message }}<br> @enderror
                <hr>

                <p>Со входом в животное вы подтверждаете: <a href="#">пользовательское соглашение</a>.</p>
                <button type="submit" class="registerbtn">Логиги</button>
            </div>

            <div class="container signin">
                <p>Вы ещё не животное? <a href="{{route('register')}}" class="@if(request()->get('register')) active-a @endif">Стань имз</a>.</p>
            </div>
        </form>
@endsection
