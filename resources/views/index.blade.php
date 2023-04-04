@extends('layouts.base')
@section('title','Главная')
@section('main')
    @if (count($products) > 0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>Описание</th>
        </tr>
        </thead>
        <tbody>
         @foreach($products as $product)
             <tr>
                 <td>{{$product->name}}</td>
                 <td>{{$product->price}}</td>
                 <td>{{$product->description}}</td>
                 <td><a href="{{ route('detail',['product'=>$product->id])}}/">Подробнее...</a></td>
             </tr>
         @endforeach
        </tbody>
    </table>
    @endif
@endsection('main')
