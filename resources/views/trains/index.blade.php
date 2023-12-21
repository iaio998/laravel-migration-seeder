@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main>
    <h1>Trains</h1>
    <ul>
        @foreach($trains as $train)
        <li>
            <p>COMPANY: {{ $train->company }}</p>
            <p>DEPARTURE STATION: {{ $train->departure_station }}</p>
            <p>ARRIVAL STATION: {{ $train->arrival_station }}</p>
            <p>DEPARTURE DATE: {{ $train->departure_date }} | DEPARTURE TIME: {{ $train->departure_time }}</p>
            <p>ARRIVAL DATE: {{ $train->arrival_date }} | ARRIVAL TIME: {{ $train->arrival_time }}</p>
            <p>TRAIN CODE: {{ $train->train_code }} | CARRIAGES: {{ $train->carriages }}</p>
            <p>
                @php
                if($train->on_time && !$train->cancelled) {
                echo 'ON TIME: YES | CANCELLED: X';
                } elseif (!$train->on_time && !$train->cancelled) {
                echo 'ON TIME: NO | CANCELLED: X';
                } elseif ($train->on_time && $train->cancelled) {
                echo 'CANCELLED: YES';
                } else {
                echo 'CANCELLED: YES';
                }
                @endphp
            </p>
        </li>
        @endforeach
    </ul>
</main>
@endsection