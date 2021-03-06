@extends('layouts.app')

@section('content')
    <h1>Create Note</h1>

    {!! Form::open(['action' => 'NotesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('note', 'Note')}}
            {{Form::textarea('note', '', ['class' => 'form-control', 'placeholder' => 'Note'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
