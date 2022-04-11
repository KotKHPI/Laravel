@extends('layouts.app')

@section('title-block')Страница продажи ipad
@endsection

@section('content')

    @foreach($product as $product)
        {{$product->name}} {{$product->model}}
    @endforeach

@endsection
