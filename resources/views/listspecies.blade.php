@extends('layouts.base')

@section('title', 'List')

@section('content')

    <h1 id="h1_species"> Our Species list ! </h1>

        <div id="list_species">
            <table>
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Delete specie </th>
                        <th> Update specie </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($species as $specie)
                        <tr>
                            <td> {{$specie->name}} </td>
                            <td>
                                <form action="/deletespecie" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$specie->id}}">
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                            <td>
                                <form action="/updatespecie" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$specie->id}}">
                                    <input type="submit" value="Update">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
