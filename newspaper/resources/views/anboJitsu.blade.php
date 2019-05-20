@extends('articles')
@extends('header')

@section('main')
<div>

    <h1>Anbo-Jitsu</h1>
    @if (count($anboJitsu) > 0)
<div class="single-article-div">

    @foreach($anboJitsu as $anbo) 
    <li><a href="{!! url('articles/'.$anbo->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $anbo->headline !!}</div><span class="front-page-article-text">{!! substr($anbo->text, 0, 200) !!}...</span></a></li>
    <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $anbo->img }}"></span>
   
    @endforeach
</div>
@endif

</div>

@endsection