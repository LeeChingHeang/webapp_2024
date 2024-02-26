@extends('layout.main')
@section('body_left')
    <h1>
    </h1>

    <ul>
        @foreach($students as $stu)
            <li>{{$stu}}</li>
        @endforeach
    </ul>
@endsection

@section('body_right')
    <h1>Testing</h1>
@endsection
