@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ URL('rooms/room/create') }}" class="btn btn-default">Create<a>
                        <a href="{{ URL('rooms/join') }}" class="btn btn-primary">Join To</a>
                    </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tr class="row">
                                    <th class="col-lg-4">Room ID</th>
                                    <th class="col-lg-2">Name</th>
                                    <th class="col-lg-4">Owner</th>
                                </tr>
                                @foreach($rooms as $room)
                                <tr class="row">
                                    <td class="col-lg-4">{{$room->id}}</td>
                                    <td class="col-lg-2">{{$room->name}}</td>
                                    <td class="col-lg-4">{{$room->owner_id}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection