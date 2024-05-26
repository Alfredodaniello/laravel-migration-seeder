@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">ECCO I TUOI TRENI!</h1>
            @foreach ($trains as $train)
                <div class="col-3">
                    <div class="card my-3" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Azienda: {{$train->brand}}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">Parte da: {{$train->station}}</h6>
                          <div>Arriva a: {{$train->destination}}</div>
                          <div>Partenza ore: {{$train->departure_time}}</div>
                          <div>Arrivo alle: {{$train->arrival_date_time}}</div>
                          <div>Codice: {{$train->code}}</div>
                          <div>Numero carrozze: {{$train->carriege}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection