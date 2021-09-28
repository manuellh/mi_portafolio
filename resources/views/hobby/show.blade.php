@extends('layouts.dashboard')

@section('template_title')
    {{ $hobby->name ?? 'Show Hobby' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hobby</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hobbies.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Hobby:</strong>
                            {{ $hobby->hobby }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $hobby->img }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
