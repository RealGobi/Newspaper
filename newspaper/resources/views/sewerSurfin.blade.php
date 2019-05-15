@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Sewer Surfin</h1>
    @if (count($sewers) > 0)

    @foreach($sewers as $sewer) 
    <li><a href="{!! url('articles/'.$sewer->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $blernball->sewer !!}</div><span class="front-page-article-text">{!! substr($sewer->text, 0, 200) !!}...</span></a></li>

    
    @endforeach
    @endif

    </div>

@endsection