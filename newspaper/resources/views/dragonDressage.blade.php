@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dragon Dressage</h1>
    @if (count($dragons) > 0)
    <div class="single-article-div">
        @foreach($dragons as $dragon) 
        <li><a href="{!! url('articles/'.$dragon->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $dragon->headline !!}</div><span class="front-page-article-text">{!! substr($dragon->text, 0, 200) !!}...</span></a></li>
        <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $dragon->img }}"></span>
        @endforeach
    </div>
    @endif

    </div>

@endsection