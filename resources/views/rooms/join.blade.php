@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h1 style="text-align: center; margin-top: 20px;">Input Pincode To Join Room</h1>
                <br>
                <form class="form-horizontal" method="POST" action="{{ url('/rooms/join') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group row">
                        <div class="col-md-4 col-md-offset-4">
                            <input type="text" name="pincode" class="form-control" id="pincode" min="1111" max="9999" pattern="[0-9]{4}" placeholder="Input your room pincode.." required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary center-block">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection