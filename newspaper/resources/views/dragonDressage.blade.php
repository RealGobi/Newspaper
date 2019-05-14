@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dragon Dressage</h1>
    @if (count($dragons) > 0)

    @foreach($dragons as $dragon) 
    <li><a href="{!! url('articles/'.$dragon->id) !!}" class="articlelink">{!! $dragon->headline !!}</a></li>
    
    
    @endforeach
    @endif

    </div>

@endsection