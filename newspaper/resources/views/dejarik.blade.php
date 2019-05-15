@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dejarik</h1>
    @if (count($dejariks) > 0)

    @foreach($dejariks as $dejarik) 
    <li><a href="{!! url('articles/'.$dejarik->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $dejarik->headline !!}</div><span class="front-page-article-text">{!! substr($dejarik->text, 0, 200) !!}...</span></a></li>

    @endforeach
    @endif

    </div>

@endsection