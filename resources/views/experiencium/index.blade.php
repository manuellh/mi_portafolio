@extends('layouts.dashboard')

@section('template_title')
    Experiencium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Experiencium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('experiencia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Año</th>
										<th>Fecha</th>
										<th>Lugar</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiencia as $experiencium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $experiencium->año }}</td>
											<td>{{ $experiencium->fecha }}</td>
											<td>{{ $experiencium->lugar }}</td>
											<td>{{ $experiencium->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('experiencia.destroy',$experiencium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('experiencia.show',$experiencium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('experiencia.edit',$experiencium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $experiencia->links() !!}
            </div>
        </div>
    </div>
@endsection
