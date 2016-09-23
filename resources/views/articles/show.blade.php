@extends('master')

@section('content')
<h2>{{ $article['title'] }}</h2>
<p>{{ $article['description'] }}</p>
@stop