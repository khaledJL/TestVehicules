
@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1>  Informations modeles</h1>
    <form class="form-horizontal" method="post" action="/editModele/{{$modele->id}}">
        @csrf
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-4">
                    <input id="nom" name="nom" type="text" value="{{$modele->nom}}" class="form-control input-md">
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Modifier modele</button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
