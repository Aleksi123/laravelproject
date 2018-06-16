@extends('layouts.app')

@section('content')
    <h1>Notes</h1>
      @foreach($notes as $note)
        <h2>{{$note->title}}</h2>
        <p>{{$note->created_at}}</p>
        <p>{{$note->note}}</p>
      @endforeach
@endsection
