@extends('layouts.dashboard')

@section('template_title')
    Update Misdato
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Mis dato</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('misdatos.update', $misdato->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('misdato.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
