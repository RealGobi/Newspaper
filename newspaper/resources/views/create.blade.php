@extends('articles')
@extends('header')

@section('main')

{!! Form::open(['route' => 'articles.store']) !!}

 <br>
            <div class="form-group">
                {!! Form::label('headline', 'Headline:') !!} <br>
                {!! Form::text('headline', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('img', 'Image Url:') !!} <br>
                {!! Form::text('img', 'https://lorempixel.com/400/280/abstract/?58572', ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('free', 'Free article:') !!} <br>
                {!! Form::select('free', array(
                    '0' => 'Yes',
                    '1' => 'No'), ['class' => 'select']) !!}
                
            </div>
 
            <div class="form-group">
                {!! Form::label('category', 'Category:') !!} <br>
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
                {!! Form::label('rank', 'Rank:') !!} <br>
                {!! Form::select('rank', array(
                    '1' => '1', 
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    ), ['class' => 'select']) !!}
                
            </div>

            <div class="form-group">
                {!! Form::label('text', 'Text:') !!} <br>
                {!! Form::textarea('text', null, ['class' => 'text-control']) !!}
            </div>
 
 {!! Form::submit('Create article', ['class' => 'btnupdate']) !!}
            {!! Form::close() !!} 

@endsection