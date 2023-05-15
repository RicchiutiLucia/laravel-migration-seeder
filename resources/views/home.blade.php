@extends('layouts.app')

@section('page-title', 'Trainline')


@section('content')
    
<main class="bg-light py-5">
    <div class="container">

        <h1 class="text-center py-3">Lista treni</h1>
 
        <div class="grid-box ">
            @foreach ($trains as $train)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Compagnia: {{ $train->company }}</h5>
                    <p class="card-text">In partenza da: {{ $train->departure_station }}</p>
                    <p class="card-text">Orario di partenza: {{ $train->departure_time }}</p>
                    <p class="card-text">Arrivo a: {{ $train->arrival_station}}</p>
                    <p class="card-text">Orario di arrivo: {{ $train->arrival_time }}</p>
                    <p class="card-text">Codice treno: {{ $train->train_code }}</p>
                    <p class="card-text">Carrozza: {{ $train->wagons_number }}</p>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</main>



    
@endsection