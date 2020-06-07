@extends('layout')
@section('title')
    {{$post->title}} - Yigit Goc Blog
@endsection
@section('container')
<h1>{{$post->title}}</h1>
<h3>{{$post->created_at->format('d M Y')}}</h3>
<hr>
<p>{!! $post->md_summary !!}</p>
@endsection