
@extends('layouts.app')
@section('title', '')
@section('content')


            <div class="productpage">
                <div class="container-block row mt-100">
                    <div class="container-block row flex-start gap-200">
                        <div class="p-img">
                            <img src="/{{$product->img}}" alt="item_img">
                        </div>
                        <div class="p-text">
                            <h2>{{$product->name}}</h2>
                            <p class="mt-30"><b>Категория:</b> {{$product->category->name}}</p>
                            <p class="mt-15"><b>Описание:</b> <br> {{$product->description}}</p>
                            <div class="product-price">
                                <h4 class="mt-15">{{$product->price}} ₽</h4>
                                <div class="product-actions mt-30">
                                    @admin
                                        <a href="{{route('editProduct', $product->id)}}" class="yellowButton">✏️</a>
                                    <form action="{{route('destroyProduct', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="yellowButton">🚫</button>
                                    </form>

                                    @endadmin
                                    <div class="product-button">
                                        <div class="btn-cart">
                                            <a href="">В корзину</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection

