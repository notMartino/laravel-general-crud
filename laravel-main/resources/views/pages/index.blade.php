@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>
            Matches:
        </h2>
        <ul>
            @foreach ($matches as $match)
                <li>
                    <a href="{{route('matchLink', $match -> id)}}">
                        {{$match -> team1}} {{$match -> point1}} - {{$match -> point2}} {{$match -> team2}}
                    </a>

                    <a href="{{route('editMatchLink', $match -> id)}}">&#128393;</a>

                    <a href="{{route('deleteMatchLink', $match -> id)}}">&#10060;</a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection