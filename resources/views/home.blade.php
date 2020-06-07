@extends('layout')
@section('title')
Yigit Goc Blog - New Day, New Things to Learn
@endsection
@section('container')
@foreach ($posts as $post)
<div class="card" style="margin-bottom: 20px">
    <div class="card-header">
        <h2>{{$post->title}}</h2>
    <p class="card-text">{{$post->created_at->format('d M Y')}}</p>
    </div>
    <div class="card-body">
        <p class="card-text">{!! $post->md_summary !!}</p>
        <a href="/posts/{{$post->id}}" class="button-primary">Read</a>
    </div>
</div>
@endforeach
    
@endsection