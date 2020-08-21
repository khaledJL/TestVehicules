@extends('layout')

@section('title' , 'vehicules')

@section('content')
    <h1>  Ajout modele</h1>
    <form class="form-horizontal" method="post" action="/addModele">
        @csrf
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-4">
                    <input id="nom" name="nom" type="text" placeholder="Nom du modèle" class="form-control input-md">
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Sauvgarder</button>
                </div>
            </div>
        </fieldset>
    </form>

@endsection
