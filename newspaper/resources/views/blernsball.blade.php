@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Blernsball</h1>
    @if (count($blernsball) > 0)

    @foreach($blernsball as $blernball) 
    <li><a href="{!! url('articles/'.$blernball->id) !!}">{!! $blernball->headline !!}</a></li>
    
    
    @endforeach
    @endif

    </div>

@endsection