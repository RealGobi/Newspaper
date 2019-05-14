@extends('articles')
@extends('header')

@section('main')


<div>

<h2>{{$article->headline }}</h2>

  <p>Category: {{ $article->category }}</p>
<p> {{ $article->text}} </p>

<li><a href="{{ url()->previous() }}">Tillbaka</a></li>
</div> 


@endsection


