@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Anbo-Jitsu</h1>
    @if (count($anboJitsu) > 0)

    @foreach($anboJitsu as $anbo) 
        <li>{{ $anbo->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection