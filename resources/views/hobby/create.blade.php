@extends('layouts.dashboard')

@section('template_title')
    Create Hobby
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Hobby</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('hobbies.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('hobby.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
