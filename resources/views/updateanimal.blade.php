@extends('layouts.base')

@section('title', 'Update')

@section('content')

    <h1 id="h1_update"> Change something animals </h1>

        <form action="updateanimalbdd" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$animal->id}}">

            <div class="update_animal">
                <label for="specie_id"> Specie : </label>
                <input type="text" name="specie_id" value="{{$animal->specie_id}}">
            </div>

            <div class="update_animal">
                <label for="name"> Animal name : </label>
                <input type="text" name="name" value="{{$animal->name}}">
            </div>

            <div class="update_animal">
                <label for="age"> Animal age : </label>
                <input type="text" name="age" value="{{$animal->age}}">
            </div>

            <div class="update_animal">
                <label for="description"> Animal description : </label>
                <input type="text" name="description" value="{{$animal->description}}">
            </div>

            <div class="update_animal">
                <label for="sexe"> Animal sexe : </label>
                <input type="text" name="sexe" value="{{$animal->sexe}}">
            </div>

            <div class="update_animal">
                <label for="weight"> Animal weight :</label>
                <input type="text" name="weight" value="{{$animal->weight}}">
            </div>

            <div class="update_animal">
                <input type="submit" value= "Update">
            </div>

        </form>

@endsection
