@extends('layout')
@section('title')
    {{$post->title}} - Yigit Goc Blog
@endsection
@section('container')
<h1 class="title">{{$post->title}}</h1>
<h3>{{$post->created_at->format('d M Y')}}</h3>
<hr>
<p>{!! $post->md_summary !!}</p>
@if (Auth::check())
    <form name="delete_form" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endif
@endsection