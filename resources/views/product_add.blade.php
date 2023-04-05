@extends('layouts.base')

@section('title', 'Добавление объявления :: Мои объявления')

@section('main')
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input @error('name') is-invalid @enderror name="name" id="txtTitle" class="form-control" value="{{ old('name') }}">
            @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea @error('description') is-invalid @enderror name="description" id="txtContent" class="form-control"
                      row="3">{{ old('description') }}</textarea>
            @error('description')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <input @error('price') is-invalid @enderror name="price" id="txtPrice" class="form-control" value="{{ old('price') }}">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection
