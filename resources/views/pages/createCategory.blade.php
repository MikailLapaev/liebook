@extends('layouts.app')
@section('title', '')
@section('content')

    <div class="content">
        <div class="container">
            <form action="{{route('storeCategory')}}" method="post" class="mt-100 col align-items-center">
                @csrf
                <h3>Добавить категорию</h3>
                <div class="form-items mt-15">
                    <div class="labels">
                        <input type="text" class="definput" id="name" name="name" placeholder="Название">
                        @error('name') <label for="name" class="err"> {{$message}}</label> @enderror
                    </div>
                </div>
                <button type="submit" class="formButton transition">Добавить</button>
            </form>
        </div>
    </div>

@endsection


