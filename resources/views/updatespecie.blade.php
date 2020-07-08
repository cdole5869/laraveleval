@extends('layouts.base')

@section('title', 'Update Species')

@section('content')

    <h1 id="h1_update"> Change something species </h1>

        <form action="updatespeciebdd" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$specie->id}}">


            <div class="update_specie">
                <label for="name"> Specie name : </label>
                <input type="text" name="name" value="{{$specie->name}}">
            </div>

            <div class="update_specie">
                <input type="submit" value= "Update">
            </div>

        </form>

@endsection
