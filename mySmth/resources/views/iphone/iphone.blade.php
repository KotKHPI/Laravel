@extends('layouts.app')

@section('title-block','Страница iphone')

@section('content')
{{--    <h1 class="text-center"style="color: white; background: black;">Meow</h1>--}}
{{--    <h1 class="text-center">Store</h1>--}}


        <form action="{{route('pay.index')}}" method="POST">
            @csrf
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center m-4" >
            @foreach($iphones->all() as $iphone)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm" style="width: 85%; height: 420px; border-radius: 21px 21px 21px 21px; margin: 5px">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{$iphone->name}}</h4>
                </div>
                <div class="card-body">
                    <img src="{{asset($iphone->image)}}" width="200" height="250" alt="image">
                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary">{{$iphone->cost}} $</button>
                </div>
            </div>
        </div>
            @endforeach
        </div>
        </form>


@endsection
