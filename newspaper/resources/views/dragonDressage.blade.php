@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dragon Dressage</h1>
    @if (count($dragons) > 0)

    @foreach($dragons as $dragon) 
    <li><a href="{!! url('articles/'.$dragon->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $dragon->headline !!}</div><span class="front-page-article-text">{!! substr($dragon->text, 0, 200) !!}...</span></a></li>

    
    @endforeach
    @endif

    </div>

@endsection