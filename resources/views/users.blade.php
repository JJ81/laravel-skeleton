@extends('layout')
@section('content')
    {{$id}}<br />
    @foreach($users as $user)
        {{ $user -> name }}<br />
        {{ $user -> email }}
    @endforeach
@stop