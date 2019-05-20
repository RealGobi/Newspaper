@extends('articles')
@extends('header')

@section('main')


<div class="single-article-div">

<h2>{{$article->headline }}</h2>

  <p>Category: {{ $article->category }}</p>

  

<p> {{ $article->text}} </p>
<span><img src="{{ $article->img }}"></span>

<li class="linkBack"><a href="{{ url()->previous() }}">Back</a></li>

{!! Form::open(['route' => ['articles.edit', $article->id], 'method' => 'post']) !!}
   {{ method_field('GET')}}


@can('superUsers-only') 
<div class="formgroup">
<input type="submit" class="btnedit" value="Edit article">
</div>
@endcan
{!! Form::close() !!}

</div> 



@endsection


