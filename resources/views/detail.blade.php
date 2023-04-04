@extends('layouts.base')

@section('title', $product->name)
@section('main')
<h2>{{ $product->name }}</h2>
<p>{{ $product->description }}</p>
<p>{{ $product->price }} руб.</p>
<p>Автор: {{ $product->user->name }}</p>
<p><a href="{{route('index')}}">На перечень объявлений</a></p>
@endsection('main')

