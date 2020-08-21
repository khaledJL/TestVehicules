@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1>  Ajout véhicule</h1>
    <form class="form-horizontal" method="post" action="/addVehicule">
        @csrf
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-4">
                    <input id="nom" name="nom" type="text" placeholder="Nom du vehicule" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>

                <div>
                    <select class="custom-select" id='marque' name='marque'>
                        <option class="input-group-text" value=''>Selectionner la marque</option>
                        @foreach ($marques as $marque )
                            <option >{{$marque->nom}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                <div>
                    <select class="custom-select" id='modele' name='modele'>
                        <option class="input-group-text" value=''>Selectionner le modèle</option>
                        @foreach ($modeles as $modele )
                            <option >{{$modele->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Sauvgarder</button>
                </div>
            </div>
            </div>
        </fieldset>
    </form>
@endsection

