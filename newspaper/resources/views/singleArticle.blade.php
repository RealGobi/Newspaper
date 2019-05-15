@extends('articles')
@extends('header')

@section('main')


<div>

<h2>{{$article->headline }}</h2>

  <p>Category: {{ $article->category }}</p>
<p> {{ $article->text}} </p>

<li class="linkBack"><a href="{{ url()->previous() }}">Back</a></li>
</div> 


@endsection


