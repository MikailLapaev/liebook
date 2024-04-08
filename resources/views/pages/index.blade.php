@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="content">

    <div class="container-block col">
        <div class="banner">
            <div class="slider">
                <div class="slider-box row">
                    <div class="slider-line" id="lin">
                        <img src="../../../public/assets/media/image/for-slider/banner1.jpg" alt="">
                        <img src="../../../public/assets/media/image/for-slider/banner2.jpg" alt="">
                        <img src="../../../public/assets/media/image/for-slider/banner3.jpg" alt="">
                    </div>
                    <!-- <div class="slider-line-1" id="lin1">

                    </div> -->
                </div>
                <div class="slider-btn row">
                    <div class="btn-box">
                        <button class="left" id="left">
                            <svg  viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64,0a64,64,0,1,0,64,64A64.07,64.07,0,0,0,64,0Zm0,122a58,58,0,1,1,58-58A58.07,58.07,0,0,1,64,122Z" fill="#0073C4"/>
                                <path d="M74.12,35.88a3,3,0,0,0-4.24,0l-26,26a3,3,0,0,0,0,4.24l26,26a3,3,0,0,0,4.24-4.24L50.24,64,74.12,40.12A3,3,0,0,0,74.12,35.88Z"/>
                            </svg>
                        </button>
                        <button class="right" id="right">
                            <svg  viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                <title/>
                                <path d="M64,0a64,64,0,1,0,64,64A64.07,64.07,0,0,0,64,0Zm0,122a58,58,0,1,1,58-58A58.07,58.07,0,0,1,64,122Z" fill="#0073C4"/>
                                <path d="M58.12,35.88a3,3,0,0,0-4.24,4.24L77.76,64,53.88,87.88a3,3,0,1,0,4.24,4.24l26-26a3,3,0,0,0,0-4.24Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

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


                <div class="pagination-btn row">
                    <div class="btn-2">
                        <a href="{{route('catalogPage')}}">Смотреть еще подарки →</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
