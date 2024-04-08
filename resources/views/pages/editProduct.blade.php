@extends('layouts.app')
@section('title', '')
@section('content')

    <div class="content">
        <div class="container">
            <form action="{{route('updateProduct', $product->id)}}" method="post" class="mt-100 col align-items-center" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3>Изменить товар</h3>
                <div class="form-items">
                    <div class="labels">
                        <input type="text" class="definput" id="name" name="name" placeholder="Название" value="{{$product->name}}">
                        @error('name')  <label for="name" class="err">{{$message}}</label> @enderror
                    </div>

                    <div class="labels">
                        <textarea name="description" id="description" class="definput" cols="30" rows="10" placeholder="Описание">{{$product->description}}</textarea>
                        @error('description') <label for="description" class="err">{{$message}}</label> @enderror
                    </div>

                    <div class="labels">
                        <input type="text" class="definput" id="price" name="price" value="{{$product->price}}" placeholder="Цена">
                        @error('price') <label for="price" class="err">{{$message}}</label> @enderror
                    </div>

                    <select class="definput" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($product->category_id == $category->id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>

                    <div class="labels ">
                        <p>текущее изображение:</p>
                        <img src="/{{$product->img}}" alt="" class="editimg">
                        <input type="file" class="definput br-none" name="img" id="img">
                        @error('img')<label for="img">{{$message}}</label>@enderror
                    </div>


                </div>
                <button type="submit" class="formButton transition">Изменить</button>
            </form>
        </div>
    </div>

@endsection
