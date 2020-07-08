@extends('layouts.base')

@section('title', 'New Specie')

@section('content')


    <h1 id="h1_add"> Add our new specie </h1>

        <form action="/addnewspeciesbdd" method="POST">
            @csrf

            <div class="add_specie">
                <label for="name"> Specie name : </label>
                <input type="text" name="name">
            </div>

            <div class="add_specie">
                <input type="submit" value= "Send">
            </div>

        </form>

@endsection
