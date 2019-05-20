@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Fot-Boule</h1>
    @if (count($fots) > 0)
    <div class="single-article-div">
        @foreach($fots as $fot) 
        <li><a href="{!! url('articles/'.$fot->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $fot->headline !!}</div><span class="front-page-article-text">{!! substr($fot->text, 0, 200) !!}...</span></a></li>
        <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $fot->img }}"></span>    
        @endforeach
    </div>
    @endif

    </div>

@endsection