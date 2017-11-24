@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Room
                </div>    
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/rooms/room') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group row">
                            <label for="inputRoomName" class="col-sm-2 col-form-label">Room Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="room_name" maxlength="15" placeholder="Input your room name.."/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection