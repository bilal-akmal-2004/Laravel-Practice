@extends('layout')

@section('content')
    <h2>Blog Posts</h2>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{ url('/blog/' . $post['slug']) }}">{{ $post['title'] }}</a></li>
        @endforeach
    </ul>
@endsection
