@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Lightsaber Fencing</h1>
    @if (count($lightsabers) > 0)

    @foreach($lightsabers as $lightsaber) 
    <li><a href="{!! url('articles/'.$lightsaber->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $lightsaber->headline !!}</div><span class="front-page-article-text">{!! substr($lightsaber->text, 0, 200) !!}...</span></a></li>

    
    @endforeach
    @endif

    </div>

@endsection