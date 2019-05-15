@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Sewer Surfin</h1>
    @if (count($sewers) > 0)
    <div class="single-article-div">
    @foreach($sewers as $sewer) 
    <li><a href="{!! url('articles/'.$sewer->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $sewer->headline !!}</div><span class="front-page-article-text">{!! substr($sewer->text, 0, 200) !!}...</span></a></li>
    <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $sewer->img }}"></span>

    
    @endforeach
    </div>

    @endif

    </div>

@endsection