@extends('layouts.app')

@section('title-block')Страница airpods
@endsection

@section('content')
    {{--    <h1 class="text-center"style="color: white; background: black;">Meow</h1>--}}
    {{--    <h1 class="text-center">Store</h1>--}}

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center m-4">
        @foreach($airpods as $airpod)
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm" style="width: 85%; height: 400px; border-radius: 21px 21px 21px 21px">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{$airpod->name}}</h4>
                    </div>
                    <div class="card-body">
                        <img src="images/{{$airpod->namePicture}}" width="200" height="240" alt="фото">
                        <a href="{{route('airpodsForm', ['id' => $airpod->id])}}">
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary" style="margin-top: 10px">Купить за {{$airpod->cost}}$</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
