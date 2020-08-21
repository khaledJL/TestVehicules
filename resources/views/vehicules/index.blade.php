@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1> Liste des véhicules</h1>

    <a href="/addVehicule" class="navbar-brand"><button type="button" class="btn btn-success">Ajouter véhicule</button></a>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom vehicule</th>
            <th>Nom marque</th>
            <th>Nom modèle</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehicules as $vehicule)
            <tr>
                <td><a href="vehicules/{{$vehicule->id}}">{{$vehicule->id}}</a> </td>
                <td><a href="vehicules/{{$vehicule->id}}">{{$vehicule->nom}}</a> </td>
                <td><a href="vehicules/{{$vehicule->id}}">{{$vehicule->modele->nom}}</a> </td>
                <td><a href="vehicules/{{$vehicule->id}}">{{$vehicule->marque->nom}}</a> </td>
                <td><a class="btn btn-primary" href="editVehicule/{{$vehicule->id}}" >Modifier</a>
                    <a class="btn btn-danger" href="deleteVehicule/{{$vehicule->id}}" >Supprimer</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

