@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1>  Informations marque</h1>

    <div>
        <p> Nom : {{$marque->nom}}</p>
    </div>

@endsection
