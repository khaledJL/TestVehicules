<html>
<head>
    <title> Informations véhicule </title>
</head>
<body>
<h1>  Informations véhicule</h1>

</body>

</html>
@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1>  Informations véhicule</h1>


            <!-- Text input-->
            <div class="form-group">
                <p>Nom : {{$vehicule->nom}} </p>
            </div>

            <div class="form-group">
                <p> Marque : {{$vehicule->marque->nom}} </p>
            </div>

            <div class="form-group">
                <p>Modèle : {{$vehicule->modele->nom}} </p>
            </div>

            </div>


@endsection
