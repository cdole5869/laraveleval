@extends('layouts.base')

@section('title', 'New Animal')

@section('content')


    <h1 id="h1_add"> Add our new animal </h1>

        <form action="/addnewanimalbdd" method="POST">
            @csrf
            <div class="add_animal">
                <label for="specie_id"> Specie : </label>
                <input type="text" name="specie_id">
            </div>

            <div class="add_animal">
                <label for="name"> Animal name : </label>
                <input type="text" name="name">
            </div>

            <div class="add_animal">
                <label for="age"> Animal age : </label>
                <input type="text" name="age">
            </div>

            <div class="add_animal">
                <label for="description"> Animal description: </label>
                <input type="text" name="description">
            </div>

            <div class="add_animal">
                <label for="sexe"> Animal sexe : </label>
                <input type="text" name="sexe">
            </div>

            <div class="add_animal">
                <label for="weight"> Animal weight  :</label>
                <input type="text" name="weight">
            </div>

            <div class="add_animal">
                <input type="submit" value= "Send">
            </div>

        </form>

@endsection
