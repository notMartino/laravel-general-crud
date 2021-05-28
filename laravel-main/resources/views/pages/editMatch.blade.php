@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>
            Edit matches:
        </h2>
        <form action="{{route('updateMatchLink', $match -> id)}}" method="POST">
            @method('POST')
            @csrf

            <ul>
                <li>
                    <label for="team1">Team1: </label>
                    <input type="text" name="team1" value="{{$match -> team1}}">
                </li>
                <li>
                    <label for="point1">Points 1: </label>
                    <input type="text" name="point1" value="{{$match -> point1}}">
                </li>
                <li>
                    <input type="text" name="team2" value="{{$match -> team2}}">
                </li>
                <li>
                    <label for="point2">Points 2: </label>
                    <input type="text" name="point2" value="{{$match -> point2}}">
                </li>
                <li>
                    <label for="result">Result: </label>
                    <input type="text" name="result" value="{{$match -> result}}">
                </li>
            </ul>

            <button type="submit">UPDATE</button>
        </form>
    </main>
@endsection