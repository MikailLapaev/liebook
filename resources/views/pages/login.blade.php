@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="content">
        <div class="container">
            <form action="{{route('auth')}}" method="post" class="mt-100 col align-items-center">
                @csrf
                <h3>Вход в аккаунт</h3>
                <div class="form-items mt-15">
                    <div class="labels">
                        <input type="text" class="definput" id="email" name="email" placeholder="Email">
                        @error('email') <label for="email" class="err">{{$message}}</label> @enderror
                    </div>
                    <div class="labels">
                        <input type="password" class="definput" name="password" id="password" placeholder="Пароль">
                        @error('password')   <label for="password" class="err">{{$message}}</label> @enderror
                    </div>
                </div>
                @error('auth')<p class="err">{{$message}}</p>@enderror
                <button type="submit" class="formButton transition">Войти</button>
                <div class="container-form mt-15">
                    <div class="div">
                        <p>Еще нет аккаунта?</p>
                    </div>
                    <div class="div">
                        <a href="{{route('registerPage')}}">Создать</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
