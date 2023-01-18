@extends('layouts.app')

@section('title', 'Create')

@section('content')


<form action="{{ route('productos.update', $product->id) }}" method="post" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar Productos {{$product->id}}</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="title" name="title" value="{{$product->title}}" />

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="country" name="country" value="{{$product->country}}" />

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="price" name="price" value="{{$product->price}}" />

    <button type="submit" class="my-3 w-full bg-green-500 p-2  font-semibold text-white hover:bg-blue-600">Guardar</button>
</form>

@endsection