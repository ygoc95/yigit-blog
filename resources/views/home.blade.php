@extends('layout')
@section('title')
Yigit Goc Blog - New Day, New Things to Learn
@endsection
@section('container')
@if (Auth::check())
   <a href="/posts" class="btn btn-primary">Create a Post</a>
@endif
@foreach ($posts as $post)
<div class="post-item">
    <div class="card" style="margin-bottom: 20px">
        <div class="card-header">
            <h1 class="title">{{$post->title}}</h1>
        <p class="card-text">{{$post->created_at->format('d M Y')}}</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{$post->summary}}</p>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">Read</a>
            
        </div>
    </div>
</div>
@endforeach
    
@endsection