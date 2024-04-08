@extends('layouts.app')
@section('title', '')
@section('content')

    <div class="content">
        <div class="container">
            <form action="{{route('storeProduct')}}" method="post" class="mt-100 col align-items-center" enctype="multipart/form-data">
                @csrf
                <h3>Добавить товар</h3>
                <div class="form-items">
                    <div class="labels">
                        <input type="text" class="definput" id="name" name="name" placeholder="Название" {{old('name')}}>
                        @error('name') <label for="name" class="err">{{$message}}</label> @enderror
                    </div>

                    <div class="labels">
                        <textarea name="description" id="description" class="definput" cols="30" rows="10" placeholder="Описание"></textarea>
                        @error('description')  <label for="description" class="err">{{$message}}</label> @enderror
                    </div>

                    <div class="labels">
                        <input type="number" class="definput" id="price" name="price" placeholder="Цена">
                        @error('price') <label for="price" class="err">{{$message}}</label>@enderror
                    </div>

                    <select class="definput" name="category_id" id="category">
                        @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>

                    <div class="labels">
                        <input type="file" class="definput" name="img" id="img">
                        @error('img')  <label class="err" for="img">{{$message}}</label> @enderror
                    </div>


                </div>
                <button type="submit" class="formButton transition">Добавить</button>
            </form>
        </div>
    </div>

@endsection

