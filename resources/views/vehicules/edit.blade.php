@extends('layout')

@section('title' , 'vehicules')

@section('content')

    <h1>  Informations véhicule</h1>

    <form class="form-horizontal" method="post" action="/editVehicule/{{$vehicule->id}}">
        @csrf
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-4">
                    <input id="nom" name="nom" type="text" value="{{$vehicule->nom}}" class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>

                    <div>
                        <select class="custom-select" id='marque' name='marque'>
                            <option class="input-group-text" value=''></option>
                            @foreach ($marques  as $marque )
                                <option  id="marque" name="marque"  value="{{ $marque->id }}" {{ ( $marque->id == $vehicule->marque->id) ? 'selected' : '' }} >{{$marque->nom}}</option>
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
                            <option class="input-group-text" value="{{ $vehicule->modele->nom }}"></option>
                            @foreach ($modeles as $modele )
                                <option  id="modele" name="modele"  value="{{ $modele->id }}" {{ ( $modele->id == $vehicule->modele->id) ? 'selected' : '' }} > {{$modele->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Modifier véhicule</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
