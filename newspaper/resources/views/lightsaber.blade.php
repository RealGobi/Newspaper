@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Lightsaber Fencing</h1>
    @if (count($lightsabers) > 0)
    <div class="single-article-div">
        @foreach($lightsabers as $lightsaber) 
        <li><a href="{!! url('articles/'.$lightsaber->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $lightsaber->headline !!}</div><span class="front-page-article-text">{!! substr($lightsaber->text, 0, 200) !!}...</span></a></li>
        <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $lightsaber->img }}"></span>
        @endforeach
    </div>

    @endif

    </div>

@endsection