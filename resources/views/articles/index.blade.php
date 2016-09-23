@extends('master')

@section('content')
    <ul>
        @foreach ($articles as $id => $article)
        <li><a href="{{ route('articles.show', $id) }}">{{ $article['title'] }}</a></li>
        @endforeach
    </ul>
@stop