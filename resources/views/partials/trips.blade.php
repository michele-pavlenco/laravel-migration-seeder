@extends('layouts.default')

@section('pageTitle','Home page')

@section('mainContent')
    <h1>viaggi
    </h1>

    <div class="cards">
        @foreach($trips as $trip){
            <div class="card">
                <div class="text">
                    {{$trip.paese}}
                </div>

            </div>
            @endforeach
        }
    </div>
@endsection