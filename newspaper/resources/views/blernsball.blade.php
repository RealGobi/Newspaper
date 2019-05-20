@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Blernsball</h1>
    @if (count($blernsball) > 0)
    <div class="single-article-div">
    @foreach($blernsball as $blernball) 
    <li><a href="{!! url('articles/'.$blernball->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $blernball->headline !!}</div><span class="front-page-article-text">{!! substr($blernball->text, 0, 200) !!}...</span></a></li>
    <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $blernball->img }}"></span>

    
    @endforeach
    </div>
    @endif

    </div>

@endsection