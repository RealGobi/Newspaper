@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Fot-Boule</h1>
    @if (count($fots) > 0)

    @foreach($fots as $fot) 
    <li><a href="{!! url('articles/'.$fot->id) !!}">{!! $fot->headline !!}</a></li>
    
    
    @endforeach
    @endif

    </div>

@endsection