@extends('articles')
@extends('header')

@section('main')


<div class="single-article-div">

  <h2>{{$article->headline }}</h2>
  @if(isset(Auth::user()->id) and $article->rank < 3)
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

  {!! Form::close() !!}
  <!-- Delete -->
  {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'post']) !!}
  @csrf
  @method('DELETE')
  <button class="delete" type="submit">Delete</button>
  {!! Form::close() !!}
  @endcan
  @elseif($article->rank >= 3)

  <p>Category: {{ $article->category }}</p>
  <p> {{ $article->text}} </p>
  <span><img src="{{ $article->img }}"></span>
  
  <li class="linkBack"><a href="{{ url()->previous() }}">Back</a></li>
  @can('superUsers-only')
  {!! Form::open(['route' => ['articles.edit', $article->id], 'method' => 'post']) !!}
  {{ method_field('GET')}}
  <div class="formgroup">
    <input type="submit" class="btnedit" value="Edit article">
  </div>
  {!! Form::close() !!}
    <!-- Delete -->
    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'post']) !!}
      @csrf
      @method('DELETE')
      <button class="delete" type="submit">Delete</button>
  {!! Form::close() !!}
  @endcan

  @else
  <h1 class="h1-pass">You shall not pass!</h1>
  <img class="img-gandalf" src="../../public/img/gandalf.jpg">
  <h2 style="text-align: center; font-family: 'MedievalSharp', cursive">Please <a href="../register">register</a>/<a href="../login">login</a> to read this article</h2>
  <li class="linkBack"><a href="{{ url()->previous() }}">Back</a></li>
  @endif
</div>



@endsection