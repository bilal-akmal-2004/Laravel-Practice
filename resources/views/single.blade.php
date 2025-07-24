@extends('layout')

@section('content')
    <h2>Post: {{ ucfirst(str_replace('-', ' ', $slug)) }}</h2>
    <p>This is a placeholder blog post.</p>
    <a href="/blog">← Back to Blog</a>
@endsection
