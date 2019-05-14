@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Blernsball</h1>
    @if (count($Blernsball) > 0)

    @foreach($Blernsball as $blernball) 
        <li>{{ $blernball->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection