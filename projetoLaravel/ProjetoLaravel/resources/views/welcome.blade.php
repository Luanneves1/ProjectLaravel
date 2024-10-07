@extends('layouts.main')

@section('title', 'Olá Mundo')

@section('content')

<h1>Olá Mundo</h1>


@if($nome == 'Matheus')
<p>Seja bem vindo João</p>
@else
<p>Seu nome não é joão</p>
@endif

@for($i = 0; $i < count ($arr); $i++)
    <p> {{$arr [$i] }} </p>

    @endfor

    @endsection