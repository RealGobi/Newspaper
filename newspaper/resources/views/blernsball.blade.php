@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Blernsball</h1>
    @if (count($blernsball) > 0)

    @foreach($blernsball as $blernball) 
    <li><a href="{!! url('articles/'.$blernball->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $blernball->headline !!}</div><span class="front-page-article-text">{!! substr($blernball->text, 0, 200) !!}...</span></a></li>

    
    @endforeach
    @endif

    </div>

@endsection