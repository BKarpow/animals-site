@extends('admin.layouts.app')

@section('text-title') Редагувати - {{ $animal->animals_id }} @endsection

@section('admin-content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md">
                <h4>Редагувати тварину {{ $animal->animals_id }}</h4>
                <form action="/admin/animal-edit-execute/{{ $animal->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-4">
                        <img src="{{ $animal->photo }}" class="img-fluid" alt="Немає фото">
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="form-group">
                        <label for="photo">Картинка</label>
                        <input
                            type="text"
                            id="photo"
                            name="photo"
                            class="form-control"
                            placeholder="Шлях до картинки"
                            value="{{ $animal->photo }}"
                        >
                        <!-- /.form-control -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="">Ім'я</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control"
                            placeholder="Ім'я тварини"
                            value="{{ $animal->name }}"
                        >
                        <!-- /.form-control -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="age">Вік</label>
                        <input
                            type="text"
                            id="age"
                            name="age"
                            class="form-control"
                            placeholder="Вік тварини"
                            value="{{ $animal->age }}"
                        >
                        <!-- /.form-control -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="animal_species">Вид тварини</label>
                        <input
                            type="text"
                            id="animal_species"
                            name="animal_species"
                            class="form-control"
                            placeholder="Вид тварини"
                            value="{{ $animal->animal_species }}"
                        >
                        <!-- /.form-control -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="animal_description">Опис тварини</label>
                        <textarea name="animal_description"
                                  id="animal_description"
                                  cols="30" rows="10"
                                  class="form-control"
                        >{{  $animal->animal_description  }}</textarea>
                        <!-- /#.form-control -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button class="btn btn-success btn-lg">Оновити запис {{ $animal->animals_id }}</button>
                        <!-- /.btn -->
                    </div>
                    <!-- /.form-group -->

                </form>
            </div>
            <!-- /.col-md -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
