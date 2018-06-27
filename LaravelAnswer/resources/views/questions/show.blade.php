
@extends('template')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>{{ $question->title }}</h1>
            <p class="lead">
                {{ $question->description }}
            </p>
            <hr />

        </div>
    </div>
    <div class="container">
    @foreach($question->answers as $answer)
    <div class="panel panel-default">
        <div class="panel-body">
            <p>
                {{$answer['content']}}
            </p>
        </div>
    </div>
    @endforeach
    </div>
    <div class="container">
        <h3>Submit your answer :</h3>
        <form method="post" action="{{ route('answers.store') }}">
            {{ csrf_field() }}
            <textarea class="form-control" name="content" rows="4"></textarea>
            <input type="hidden" value="{{ $question->id }}" name="question_id" />
            <button class="btn btn-primary">Submit Answer</button>
        </form>
    </div>
@endsection