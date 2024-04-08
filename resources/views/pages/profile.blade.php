@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="content">
        <div class="profile container-block col">
            <div class="container-block row sp-btw">
                <div class="col mt-50">
                    <h3>Здравствуйте, {{auth()->user()->name}}!</h3> <br>
                    <p> Почта: {{auth()->user()->email}}</p>
                    <form action="{{route('logout')}}" method="post" class="profile-form">
                        @csrf
                        <button type="submit" class="pinkButton transition mt-15">Выйти</button>
                    </form>
                </div>
                <div class="col">
                    <p>Заказы</p>
                </div>
            </div>
        </div>
    </div>
@endsection

