
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
@endsection