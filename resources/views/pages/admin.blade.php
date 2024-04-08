@extends('layouts.app')
@section('title', '')
@section('content')

    <div class="content">
        <div class="admin">
            <div class="col">
                <div class="container-block mt-100 sp-btw">
                    <div class="title-2">
                        <h3>Админ панель</h3>
                    </div>
                    <div class="title-2 row">
                        <h3>Категории</h3>
                        <a href="{{route('createCategory')}}" class="addCategory">+ Добавить категорию</a>
                    </div>
                </div>

                <div class="category-container mt-50">
                @foreach($categories as $cat)
                        <div class="category">
                            <h3>{{$cat->name}}</h3>
                            <form action="{{route('destroyCategory', $cat->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="pinkButton">Удалить</button>
                            </form>

                        </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection



