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
    </div>
    <!-- /.container -->
@endsection
