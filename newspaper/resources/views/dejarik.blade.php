@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dejarik</h1>
    @if (count($dejariks) > 0)

    @foreach($dejariks as $dejarik) 
    <li><a href="{!! url('articles/'.$dejarik->id) !!}">{!! $dejarik->headline !!}</a></li>
    
    
    @endforeach
    @endif

    </div>

@endsection