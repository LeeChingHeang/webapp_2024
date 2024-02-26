@extends('layout.main')
@section('body')
    <h1>
        {{$title}}
    </h1>

    <ul>
        @foreach($students as $stu)
            <li>{{$stu}}</li>
        @endforeach
    </ul>

@endsection
