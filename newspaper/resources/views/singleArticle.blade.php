@extends('articles')
@extends('header')

@section('main')


<div class="single-article-div">

<h2>{{$article->headline }}</h2>

  <p>Category: {{ $article->category }}</p>
<p> {{ $article->text}} </p>
<span><img src="{{ $article->img }}"></span>

<li class="linkBack"><a href="{{ url()->previous() }}">Back</a></li>
</div> 


@endsection


