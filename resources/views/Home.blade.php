<img src="{{$img}}" alt="">

@extends('layouts.layout')

@section('content')
    <x-hero />
    <x-heading title="Категории" />
    <x-categories />
    <x-heading title="Акции" />
    <x-products />
@endsection
