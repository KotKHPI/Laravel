@extends('layouts.app')

@section('title-block')Страница iphone
@endsection

@section('content')
{{--    <h1 class="text-center"style="color: white; background: black;">Meow</h1>--}}
{{--    <h1 class="text-center">Store</h1>--}}

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center m-4">
    @foreach($iphones as $iphone)
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 85%; height: 400px; border-radius: 21px 21px 21px 21px">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{$iphone->name}} {{$iphone->memory}}Gb {{$iphone->color}}</h4>
            </div>
            <div class="card-body">
                <img src="images/{{$iphone->namePicture}}" width="200" height="250" alt="фото">
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Купить за {{$iphone->cost}}$</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
