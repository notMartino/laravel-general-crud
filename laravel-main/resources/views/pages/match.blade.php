@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>
            Matches:
        </h2>
        <ul>
            <li>
                {{$match -> team1}} - {{$match -> point1}}
            </li>
            <li>
                {{$match -> team2}} - {{$match -> point2}}
            </li>
            <li>
                Result: {{$match -> result}}
            </li>
        </ul>
    </main>
@endsection