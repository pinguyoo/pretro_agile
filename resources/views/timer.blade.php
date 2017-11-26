@extends('app')

@section('content')



<div class="timerBox text-center">
 <h1 class="timer">00 : 00</h1>
 <button type="button" name="time" value="1" class="bnt btn-success">1 Min</button>
 <button type="button" name="time" value="3" class="bnt btn-success">3 Min</button>
 <button type="button" name="time" value="5" class="bnt btn-success">5 Min</button>
 <button type="button" name="time" value="10" class="bnt btn-success">10 Min</button>
 <button type="button" name="time" value="15" class="bnt btn-success">15 Min</button>
 <button type="button" name="start" class="bnt btn-primary">Start</button>
 <button type="button" name="stop"  class="bnt btn-danger">Stop</button>
</div>


@endsection
