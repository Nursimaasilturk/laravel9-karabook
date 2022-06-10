@extends('layouts.main')
@section('title',"Laravel- Karabook")

@section('description')

@endsection

@section('keywords','book, Victor Hugo, Dostoevsky')

@section('content')
      @include('home._header')
      @include('home._home')
      @include('home._sub_content')
      @include('home._sub_content')
      @include('home._sub_content')
      @include('home._description')
      @include('home._social')
      @include('home._subscribe')

      @include('home._footer')

@endsection

