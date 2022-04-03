@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
<h1>Home</h1>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection
