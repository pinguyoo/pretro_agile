@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="title" style="text-align: center;">
                <h1>Pretro</h1>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-heading">
                        <a class="nav-link active" href="{{ URL('/rooms') }}">Room List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
