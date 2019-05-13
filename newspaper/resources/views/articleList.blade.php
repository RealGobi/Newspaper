@extends('articles')
@extends('header')

@section('main')

<div class="three-col">   
   @if (count($articles) > 0)
   @foreach ($articles as $article)
     <li> {{ $article->headline }}</li>

    @endforeach
    @endif


</div> 


@endsection