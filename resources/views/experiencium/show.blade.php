@extends('layouts.dashboard')

@section('template_title')
    {{ $experiencium->name ?? 'Show Experiencium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Experiencium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('experiencia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $experiencium->año }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $experiencium->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $experiencium->lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $experiencium->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
