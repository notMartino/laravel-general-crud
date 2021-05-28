@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>
            Edit matches:
        </h2>
        <form action="{{route('storeMatchLink')}}" method="POST">
            @method('POST')
            @csrf

            <ul>
                <li>
                    <label for="team1">Team1: </label>
                    <input type="text" name="team1">
                </li>
                <li>
                    <label for="point1">Points 1: </label>
                    <input type="text" name="point1">
                </li>
                <li>
                    <label for="team2">Team2: </label>
                    <input type="text" name="team2" >
                </li>
                <li>
                    <label for="point2">Points 2: </label>
                    <input type="text" name="point2">
                </li>
                <li>
                    <label for="result">Result: </label>
                    <input type="text" name="result">
                </li>
            </ul>

            <button type="submit">CREATE</button>
        </form>
    </main>
@endsection