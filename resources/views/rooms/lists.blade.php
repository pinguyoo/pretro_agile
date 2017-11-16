@extends('app')
@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Room ID</th>
            <th scope="col">Room Name</th>
            <th scope="col">Owner</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>Room1</td>
            <td>Ben</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>2</td>
            <td>Room2</td>
            <td>Jack</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>3</td>
            <td>Room3</td>
            <td>Queenie</td>
            </tr>
        </tbody>
    </table>
@endsection