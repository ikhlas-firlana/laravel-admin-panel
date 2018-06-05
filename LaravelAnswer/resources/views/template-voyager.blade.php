
@extends('template')

@section('content')
    {!! menu('admin', '_voyager/my_menu')  !!}
    <p>{{ setting('site.logo') }}</p>
@endsection