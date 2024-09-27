{{-- @vite('resources/js/app.js') --}}
@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Laravel Trains</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Compagnia</th>
                        <th>provenienza</th>
                        <th>Destinazione</th>
                        <th>Orario Partenza</th>
                        <th>Orario Arrivo</th>
                        <th>Codice treno</th>
                        <th>Numero vagoni</th>
                        <th>In orario</th>
                        <th>Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{$train->cancelled == 0 ? $train->departure_time : ''}}</td>
                        <td>{{$train->cancelled == 0 ? $train->arrival_time : ''}}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->train_wagons }}</td>
                        <td>{{$train->cancelled == 0 ? ($train->on_time ? 'Sì' : 'No') : ''}}</td>
                        <td>{{$train->cancelled ? 'Sì' : 'No'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection