@extends('layout')

@section('title')
{{ $product->name }}
@stop

@section('meta-title')
{{ $product->title}}
@stop

@section('meta-description')
{{ $product->description }}
@stop

@section('keywords')
{{ $product->keywords }}
@stop



@section('contenido')

      <!-- Breadcrumb default-->

      @livewire('product-single', ['product' => $product])



@stop





