@extends('layouts.base')

@section('title', 'Удаление объявления :: Мои объявления')

@section('main')
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }} руб.</p>
    <p>Автор: {{ $product->user->name }}</p>
    <p><a href="{{route('index')}}">На перечень объявлений</a></p>
    <p>Автор: {{ $product->user->name }}</p>
    <form action="{{ route('product.destroy', ['product' => $product->id]) }}"
          method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection('main')
