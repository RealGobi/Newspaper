@extends('articles')
@extends('header')
    
@section('main')
<div>
    
    <h1>Anbo-Jitsu</h1>
    @if (count($anboJitsu) > 0)

    @foreach($anboJitsu as $anbo) 
    <li><a href="{!! url('articles/'.$anbo->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $anbo->headline !!}</div><span class="front-page-article-text">{!! substr($anbo->text, 0, 200) !!}...</span></a></li>
    

    
    @endforeach
    @endif

    </div>

@endsection