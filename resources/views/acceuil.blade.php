@extends('layouts.app')

@section('content')
<h1 align=center>Bienvenu ici vous pouvez consulter les informations relative a votre compte</h1>
<p>Votre ID est : {{$user->id }}</p>
<p>Votre Nom est : {{$user->name }}</p>
<p>Votre ville est : {{$user->ville }}</p>

@stop
