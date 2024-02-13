@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
     <h1>Treni: {{count($trains)}}</h1>
          <table class="table">
            <thead>
                <tr>
                    <th scope="col">Trains</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">Carriages Number</th>
                    <th scope="col">In Time</th>
                    <th scope="col">Deleted</th>
                </tr>
            </thead> 
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                    <th scope="row">{{ $train -> id }}</th>
                    <td>{{ $train -> company }}</td>
                    <td>{{ $train -> departure_station }}</td>
                    <td>{{ $train -> arrival_station }}</td>
                    <td>{{ $train -> departure_time }}</td>
                    <td>{{ $train -> arrival_time }}</td>
                    <td>{{ $train -> train_code }}</td>
                    <td>{{ $train -> carriages_number }}</td>
                    <td>{{ $train -> in_time }}</td>
                    <td>{{ $train -> deleted }}</td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
@endsection
