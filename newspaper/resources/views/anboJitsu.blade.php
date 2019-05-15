@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Anbo-Jitsu</h1>
    @if (count($anboJitsu) > 0)

    @foreach($anboJitsu as $anbo) 
    <li><a href="{!! url('articles/'.$anbo->id) !!}" class="articlelink">{!! $anbo->headline !!}</a></li>
    
    
    
    @endforeach
    @endif

    </div>

@endsection