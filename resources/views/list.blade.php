@extends('layouts.base')

@section('title', 'List')

@section('content')

    <h1 id="h1_animals"> Our Animals list ! </h1>

        <div id="list_animals">
            <table>
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Age </th>
                        <th> Description </th>
                        <th> Sexe </th>
                        <th> Weight </th>
                        <th> Delete animal </th>
                        <th> Update animal </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($animals as $animal)
                        <tr>
                            <td> {{$animal->name}} </td>
                            <td> {{$animal->age}} </td>
                            <td> {{$animal->description}} </td>
                            <td> {{$animal->sexe}} </td>
                            <td> {{$animal->weight}} </td>
                            <td>
                                <form action="/deleteanimal" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$animal->id}}">
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                            <td>
                                <form action="/updateanimal" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$animal->id}}">
                                    <input type="submit" value="Update">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
