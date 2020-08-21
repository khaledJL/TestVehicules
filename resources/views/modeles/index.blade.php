@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1> Liste des modeles</h1>
    <a href="/addModele" class="navbar-brand"><button type="button" class="btn btn-success">Ajouter Modele</button></a>
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
        @foreach($modeles as $modele)
            <tr>
                <td><a href="modeles/{{$modele->id}}">{{$modele->id}}</a> </td>
                <td><a href="modeles/{{$modele->id}}">{{$modele->nom}}</a> </td>
                <td><a class="btn btn-primary" href="editModele/{{$modele->id}}" >Modifier</a>
                    <a class="btn btn-danger" href="deleteModele/{{$modele->id}}" >Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
