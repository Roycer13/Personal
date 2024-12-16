@extends('layouts.app')

@section('template_title')
    Grados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Grados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('grados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Titulo</th>
									<th >Descripcion</th>
									<th >Mes</th>
									<th >Gestion</th>
									<th >Instituto</th>
									<th >Ciudad Pais</th>
									<th >Folio G</th>
									<th >Titulo1</th>
									<th >Descripcion1</th>
									<th >Mes1</th>
									<th >Gestion1</th>
									<th >Instituto1</th>
									<th >Ciudad Pais1</th>
									<th >Folio G1</th>
									<th >Titulo2</th>
									<th >Descripcion2</th>
									<th >Mes2</th>
									<th >Gestion2</th>
									<th >Instituto2</th>
									<th >Ciudad Pais2</th>
									<th >Folio G2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grados as $grado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $grado->titulo }}</td>
										<td >{{ $grado->descripcion }}</td>
										<td >{{ $grado->mes }}</td>
										<td >{{ $grado->gestion }}</td>
										<td >{{ $grado->instituto }}</td>
										<td >{{ $grado->ciudad_pais }}</td>
										<td >{{ $grado->folio_g }}</td>
										<td >{{ $grado->titulo1 }}</td>
										<td >{{ $grado->descripcion1 }}</td>
										<td >{{ $grado->mes1 }}</td>
										<td >{{ $grado->gestion1 }}</td>
										<td >{{ $grado->instituto1 }}</td>
										<td >{{ $grado->ciudad_pais1 }}</td>
										<td >{{ $grado->folio_g1 }}</td>
										<td >{{ $grado->titulo2 }}</td>
										<td >{{ $grado->descripcion2 }}</td>
										<td >{{ $grado->mes2 }}</td>
										<td >{{ $grado->gestion2 }}</td>
										<td >{{ $grado->instituto2 }}</td>
										<td >{{ $grado->ciudad_pais2 }}</td>
										<td >{{ $grado->folio_g2 }}</td>

                                            <td>
                                                <form action="{{ route('grados.destroy', $grado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('grados.show', $grado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('grados.edit', $grado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $grados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
