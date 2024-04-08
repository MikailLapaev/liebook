@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="content">
        <div class="container">
            <form action="{{route('register')}}" method="post" class="mt-100 col align-items-center">
                @csrf
                <h3>Регистрация</h3>
                <div class="form-items mt-15">
                    <div class="labels">
                        <input type="text" class="definput" id="name" name="name" placeholder="Имя">
                        @error('name') <label for="name" class="err">{{$message}}</label>@enderror

                    </div>

                    <div class="labels">
                        <input type="text" class="definput" id="email" name="email" placeholder="Email">
                        @error('email') <label for="email" class="err">{{$message}}</label> @enderror
                    </div>

                    <div class="labels">
                        <input type="password" class="definput" id="password" name="password" placeholder="Пароль">
                        @error('password')  <label for="password" class="err">{{$message}}</label> @enderror
                    </div>

                    <div class="labels">
                        <input type="password" class="definput" id="repassword" name="password_confirmation" placeholder="Повторите Пароль">
                        <label for="repassword" class="err"></label>
                    </div>

                </div>
                <button type="submit" class="formButton transition">Зарегестрироваться</button>
                <div class="container-form mt-15">
                    <div class="div">
                        <p>Аккаунт уже создан?</p>
                    </div>
                    <div class="div">
                        <a href="{{route('auth')}}">Войти</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
