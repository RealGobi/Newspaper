@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Quidditch</h1>
    @if (count($quidditchs) > 0)
    <div class="single-article-div">
    @foreach($quidditchs as $quidditch) 
    <li><a href="{!! url('articles/'.$quidditch->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $quidditch->headline !!}</div><span class="front-page-article-text">{!! substr($quidditch->text, 0, 200) !!}...</span></a></li>
    <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $quidditch->img }}"></span>

    @endforeach
    </div>

    @endif

    </div>

@endsection


