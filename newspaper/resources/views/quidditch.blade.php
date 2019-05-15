@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Quidditch</h1>
    @if (count($quidditchs) > 0)

    @foreach($quidditchs as $quidditch) 
    
    <li><a href="{!! url('articles/'.$quidditch->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $quidditch->headline !!}</div><span class="front-page-article-text">{!! substr($quidditch->text, 0, 200) !!}...</span></a></li>

    @endforeach
    @endif

    </div>

@endsection


