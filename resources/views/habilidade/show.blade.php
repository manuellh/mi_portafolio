@extends('layouts.dashboard')

@section('template_title')
    {{ $habilidade->name ?? 'Show Habilidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Habilidade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habilidades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Habilidad:</strong>
                            {{ $habilidade->habilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $habilidade->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $habilidade->nivel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
