@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input  @error('name') is-invalid @enderror name="name" value="{{ $product->name }}">
            @error('title')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <textarea  name="description" @error('description') is-invalid @enderror >{{ $product->description }}</textarea>
            @error('description')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <input @error('price') is-invalid @enderror name="price" value="{{ $product->price }}">
            @error('price')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" >Сохранить</button>
    </form>
@endsection
