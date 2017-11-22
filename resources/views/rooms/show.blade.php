@extends('app')
@section('content')
    <h1 style="text-align: center; margin-top: 20px;">{{ $page->name }}</h1>
    <hr>
    <div id="pincode" style="text-align: right; margin: 50px;">
        Pincode: {{ $page->pincode }}
    </div>
    <div id="owner" style="padding: 50px;">
        <p>
            {{ $page->owner_id }}
        </p>
    </div>
@endsection