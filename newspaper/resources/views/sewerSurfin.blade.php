@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Sewer Surfin</h1>
    @if (count($sewers) > 0)

    @foreach($sewers as $sewer) 
    <li><a href="{!! url('articles/'.$sewer->id) !!}">{!! $sewer->headline !!}</a></li>
    
    
    @endforeach
    @endif

    </div>

@endsection