@extends('layouts.app')

@section('title-text') Тварина {{ $data->animals_id }} @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Інформація про тварину {{ $data->animals_id }}</h2>
            </div>
            <!-- /.col-lg-12 text-center -->
        </div>
        <!-- /.row -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ $data->photo }}" class="img-fluid" alt="Немає фото">
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        Ім'я: {{ $data->name }}
                    </li>
                    <li class="list-group-item">
                        Тваринка: {{ $data->animal_species == "dog" ? 'Собака' :  $data->animal_species}}
                    </li>
                    <li class="list-group-item">
                        Вік: {{ $data->age }}
                    </li>
                    <li class="list-group-item">
                        Опис: {{ $data->animal_description }}
                    </li>
                </ul>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
