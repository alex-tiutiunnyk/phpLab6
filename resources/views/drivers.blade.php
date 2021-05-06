@extends('myview')

@section('content')
    <div style="display: flex; justify-content: center; padding: 15px 0;"> <b>Drivers List</b></div>

    @foreach($drivers as $driver)
        <div style="display: flex; justify-content: center">
            <a href="/driver/{{$driver->id}}">{{$driver -> name}}</a> ||| {{$driver -> age}}
        </div>
    @endforeach
    <form style="display:flex; justify-content: center; padding-top: 20px; ">
        <input type="button" value="Return" onclick="history.back()">
    </form>
@endsection
