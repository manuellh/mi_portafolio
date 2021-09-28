@extends('layouts.dashboard')

@section('template_title')
    Misdato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
            @foreach($misdatos as $data)
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="{{ $data->img }}" alt="José Manuel">
                    <div class="card-body">
                        
                        <ul class="list-group">
                            <li class="list-group-item">Nombre: {{ $data->nombre }}</li>
                            <li class="list-group-item">Edad: {{$data->edad}}</li>
                            <li class="list-group-item">Estudios: {{ $data->estudios }}</li>
                            <li class="list-group-item">Correo: {{ $data->email}}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col-sm-7">
                

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Descripcion
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <p class="card-text">{{ $data->descripcion }}</p>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">Opciones</div>
                    <div class="card-body">
                    <a class="btn btn-lg btn-success btn-block" href="{{ route('misdatos.edit',$data->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                    </div>

                </div>
                {!! $misdatos->links() !!}
            </div>
        </div>
    </div>
@endsection
