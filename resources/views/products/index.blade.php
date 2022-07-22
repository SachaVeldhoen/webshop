@extends('layouts.app')

@section('content')
    @livewire('images', ['product' => $product, 'images' => $images])
@endsection
