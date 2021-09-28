@extends('layouts.dashboard')

@section('template_title')
    Habilidade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Habilidade') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('habilidades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Habilidad</th>
										<th>Imagen</th>
										<th>Nivel</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($habilidades as $habilidade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $habilidade->habilidad }}</td>
											<td>{{ $habilidade->imagen }}</td>
											<td>{{ $habilidade->nivel }}</td>

                                            <td>
                                                <form action="{{ route('habilidades.destroy',$habilidade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('habilidades.show',$habilidade->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('habilidades.edit',$habilidade->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $habilidades->links() !!}
            </div>
        </div>
    </div>
@endsection
