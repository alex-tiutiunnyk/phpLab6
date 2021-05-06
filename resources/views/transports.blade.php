@extends('myview')

@section('content')
    <div style="display: flex; justify-content: center; padding: 15px 0;"> <b>Multiple tables selection</b></div>

    @foreach($transports as $transport)
        <div style="display: flex; justify-content: center">
            @foreach($transport->drivers as $driver)   {{$driver->name}}

            @endforeach
                --- {{$transport -> plate_num}} --- {{$transport-> id}} ---{{$transport-> seats_amount}}
        </div>
    @endforeach
    <form style="display:flex; justify-content: center; padding-top: 20px; ">
        <input type="button" value="Return" onclick="history.back()">
    </form>
@endsection
