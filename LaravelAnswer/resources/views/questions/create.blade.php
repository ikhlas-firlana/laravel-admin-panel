
@extends('template')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Ask Question!</h1>
            <form action="{{ route('questions.store') }}" method="POST">
                {{ csrf_field() }}
                <label for="titleForm">Title</label>
                <input type="text" name="title" id="titleForm" class="form-control" />
                <label for="descriptionForm">More Information</label>
                <textarea name="description" id="descriptionForm" class="form-control" rows="4"></textarea>
                <input type="submit" name="submit" value="Submit Question" class="btn btn-primary" />
            </form>
        </div>
    </div>
@endsection
