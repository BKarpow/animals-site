@extends('admin.layouts.app')

@section('text-title') Головна @endsection

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Головна панель адміністратора</div>

                    <div class="card-body">
                        {{ session('status') }}
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        Список тварин
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach( $animals as $animal)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div><strong>{{ $animal->id }}</strong></div>
                                        <div><strong> {{ $animal->animals_id }}</strong></div>
                                        <div> {{ $animal->name }} </div>
                                        <div>
                                            <a href="/admin/animal-edit/{{$animal->id}}">Редагувати</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="d-flex justify-content-center align-items-center py-3">
                            {{ $animals->links() }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card mt-3 -->
            </div>

        </div>
    </div>
@endsection
