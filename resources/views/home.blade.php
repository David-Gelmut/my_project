@extends('layouts.base')

@section('title', 'Мои объявления')

@section('main')
    <p class="text-right"><a href="{{ route('product.add') }}">Добавить объявление</a></p>
    @if (count($products) > 0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th colspan="2">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td><h3>{{ $product->name }}</h3></td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product->id]) }}">Изменить</a>
                    </td>
                    <td>
                        <a href="{{ route('product.delete', ['product' => $product->id]) }}">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
