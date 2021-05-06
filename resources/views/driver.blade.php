@extends('myview')

@section('content')
    <div style="display: flex; justify-content: center; padding: 15px 0;"> <b>Driver Info</b></div>

        <div style="display: flex; justify-content: center">
    {{$driver->id}} --- {{$driver->name}} --- {{$driver -> age}} --- {{$driver -> license}}
        </div>
    <form style="display:flex; justify-content: center; padding-top: 20px; ">
        <input type="button" value="Return" onclick="history.back()">
    </form>
@endsection
