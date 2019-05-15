@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Fot-Boule</h1>
    @if (count($fots) > 0)

    @foreach($fots as $fot) 
    <li><a href="{!! url('articles/'.$fot->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $fot->headline !!}</div><span class="front-page-article-text">{!! substr($fot->text, 0, 200) !!}...</span></a></li>

    
    @endforeach
    @endif

    </div>

@endsection