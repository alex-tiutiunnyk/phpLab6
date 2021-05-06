@extends('myview')

@section('content')
    <div style="display: flex; justify-content: center; padding: 15px 0;"> <b>Multiple ways selection</b></div>

    @foreach($ways as $way)
        <div style="display: flex; justify-content: center">
            @foreach($way->transports as $transport)   {{$transport->plate_num}}

            @endforeach
                --- (transport_id)  {{$way-> transport_id}}--- {{$way -> arr_station}} --- {{$way-> dep_station}} ---{{$way-> price}}
        </div>
    @endforeach
    <form style="display:flex; justify-content: center; padding-top: 20px; ">
        <input type="button" value="Return" onclick="history.back()">
    </form>
@endsection

