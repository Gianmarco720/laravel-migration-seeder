@extends('layouts.app')

@section('content')
<div class="container py-2 text-center">
    <h1 class="text-center">Welcome To Our Trains Tickets</h1>
    <div class="row row-cols-4 gap-2 justify-content-center pt-2">
        @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Company: {{ $train->company }}</h5>
                    <h5 class="card-title">From: {{ $train->departure_station }}</h5>
                    <h5 class="card-title">To: {{ $train->arrival_station }}</h5>
                    <h5 class="card-title">Departure Time: {{ $train->departure_time }}</h5>
                    <h5 class="card-title">Arrival Time: {{ $train->arrival_time }}</h5>
                    <h5 class="card-title">Train Code: {{ $train->train_no }}</h5>
                    <h5 class="card-title">Carriage: {{ $train->carriage_no }}</h5>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <h1>No Trains Available Yet</h1>
        </div>
        @endforelse
    </div>
</div>
@endsection