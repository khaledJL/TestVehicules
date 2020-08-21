@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1> Liste des marques</h1>

    <a href="/addMarque" class="navbar-brand"><button type="button" class="btn btn-success">Ajouter marque</button></a>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($marques as $marque)
            <tr>
                <td><a href="marques/{{$marque->id}}">{{$marque->id}}</a> </td>
                <td><a href="marques/{{$marque->id}}">{{$marque->nom}}</a> </td>
                <td>
                    <a class="btn btn-primary" href="editMarque/{{$marque->id}}" >Modifier</a>
                    <a class="btn btn-danger" href="deleteMarque/{{$marque->id}}" >Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
