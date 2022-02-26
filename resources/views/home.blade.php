@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            Contents
        </div>
        @foreach ($data as $post )
        <div class="card-body">
            <div class="card-title">
                {{ $post->name }}
            </div>
            <p class="card-text">{{ $post->description }}</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        @endforeach
    </div>
</div>
@endsection