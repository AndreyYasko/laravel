@extends('layouts.main')

@section('title', 'News page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $news['title'] }}</h1>
            <img src="{{ $news['photo'] }}" class="img-fluid" alt="Responsive image">
            <p class="text-justify">{{ $news['fullText'] }}</p>
        </div>
    </div>
@endsection
