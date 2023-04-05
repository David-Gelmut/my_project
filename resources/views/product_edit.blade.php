@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input class="form-control"  @error('name') is-invalid @enderror name="name" value="{{ old('title', $product->name) }}">
            @error('name')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <textarea  class="form-control" name="description" @error('description') is-invalid @enderror >{{ old('title', $product->description) }}</textarea>
            @error('description')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" @error('price') is-invalid @enderror name="price" value="{{ old('title', $product->price) }}">
            @error('price')
            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
