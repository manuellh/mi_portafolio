@extends('layouts.dashboard')

@section('template_title')
    Create Habilidade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Habilidade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('habilidades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('habilidade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
