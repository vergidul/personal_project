@extends('app')

@section('title')
Welcome {{ $user->name }}!
@stop

@section('content')
<h1>{{ $user->name }}</h1>
{{ json_encode($user) }}
@stop