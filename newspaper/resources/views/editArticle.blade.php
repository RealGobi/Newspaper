@extends('articles')
@extends('header')

@section('main')

{!! Form::open(['route' => ['articles.update', $article->id], 'method' => 'post']) !!}
{{ method_field('PATCH')}}
@csrf
 <br>
            <div class="form-group">
                {!! Form::label('headline', 'Edit headline:') !!} <br>
                {!! Form::text('headline', $article->headline, ['class' => 'form-control']) !!}
            </div>
 
            <div class="form-group">
                {!! Form::label('category', 'Edit category:') !!} <br>
                {!! Form::select('category', array(
                    'Quidditch' => 'Quidditch', 
                    'Lightsaber fencing' => 'Lightsaber fencing',
                    'Dejarik' => 'Dejarik',
                    'Anbo-Jitsu' => 'Anbo-Jitsu',
                    'Blernsball' => 'Blernsball',
                    'Dragon Dressage' => 'Dragon Dressage',
                    'Fot-Boule' => 'Fot-Boule',
                    'Sewer Surfin' => 'Sewer Surfin'), ['class' => 'select']) !!}
                
            </div>

            <div class="form-group">
                {!! Form::label('text', 'Edit text:') !!} <br>
                {!! Form::textarea('text', $article->text, ['class' => 'text-control']) !!}
            </div>
 
 {!! Form::submit('Update article', ['class' => 'btnupdate']) !!}
            {!! Form::close() !!} 

@endsection