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
                    <h5 class="card-title">Compagnia: {{ $train->azienda }}</h5>
                    <p class="card-text">In partenza da: {{ $train->stazione_partenza }}</p>
                    <p class="card-text">Orario di partenza: {{ $train->orario_partenza }}</p>
                    <p class="card-text">Arrivo a: {{ $train->stazione_arrivo }}</p>
                    <p class="card-text">Orario di arrivo: {{ $train->orario_arrivo }}</p>
                    <p class="card-text">Codice treno: {{ $train->codice_treno }}</p>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</main>



    
@endsection