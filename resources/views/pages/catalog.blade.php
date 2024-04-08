
@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="content">

        <div class="catalog container-block col mt-100">
            <div class="container-block-1 row mb-50">
                <div class="title row">
                    <h2>Каталог</h2>
                    @admin
                    <a href="{{route('createProduct')}}" class="addItem">+ Добавить товар</a>
                    @endadmin
                </div>
                <div class="name row gap-15">
                    <a href="/" class="pinkButton">Все категории</a>
                    @foreach($categories as $category)
                        <a href="?category={{$category->id}}#catalog" class="pinkButton">{{$category->name}}</a>
                    @endforeach
                </div>
            </div>

            <div class="container-block row">
                @foreach($products as $product)
                    <div class="cards">
                        <div class="photo mb-15"><img src="{{$product->img}}" alt="item_img"></div>
                        <div class="name mb-30 col">
                            {{$product->name}}
                            <p><span class="category">{{$product->category->name}}</span></p>
                        </div>
                        <div class="price-and-btn">
                            <div class="price">{{$product->price}} <span>₽</span></div>
                            <div class="btn">
                                <a href="{{route('productPage', $product->id)}}">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
        </div>

    </div>
@endsection

