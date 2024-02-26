@extends('layout.main')
@section('body')
    <h1>
        {{$studentName}} - {{$studentID}}
    </h1>
    <select>

        @foreach($educationLavel as $key=>$value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
@endsection
