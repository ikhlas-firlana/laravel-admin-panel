
@extends('template')

@section('content')
    <a href="{{ route('questions.create') }}" class="btn btn-primary">Create</a>
    <div class="container">
        <h1>Recent Questions:</h1>
        <hr />
        @foreach($questions as $question)
            <div class="well">
                <h3>{{$question->title}}</h3>
                <p>
                    {{$question->description}}
                </p>
                <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary">view detail</a>
            </div>
        @endforeach
    </div>

    {{$questions->links()}}
@endsection