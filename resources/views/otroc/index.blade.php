@extends('layouts.app')

@section('template_title')
    Otrocs
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Otrocs') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('otrocs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Gesion Mes Co</th>
									<th >Evento Co</th>
									<th >Duracion Co</th>
									<th >Intitucion Co</th>
									<th >Folio Co</th>
									<th >Idioma</th>
									<th >Institucion I</th>
									<th >Lectura</th>
									<th >Escritura</th>
									<th >Conversacion</th>
									<th >Folio I</th>
									<th >Curso C</th>
									<th >Nivel Cono</th>
									<th >Folio C</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($otrocs as $otroc)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $otroc->gesion_mes_co }}</td>
										<td >{{ $otroc->evento_co }}</td>
										<td >{{ $otroc->duracion_co }}</td>
										<td >{{ $otroc->intitucion_co }}</td>
										<td >{{ $otroc->folio_co }}</td>
										<td >{{ $otroc->idioma }}</td>
										<td >{{ $otroc->institucion_i }}</td>
										<td >{{ $otroc->lectura }}</td>
										<td >{{ $otroc->escritura }}</td>
										<td >{{ $otroc->conversacion }}</td>
										<td >{{ $otroc->folio_i }}</td>
										<td >{{ $otroc->curso_c }}</td>
										<td >{{ $otroc->nivel_cono }}</td>
										<td >{{ $otroc->folio_c }}</td>

                                            <td>
                                                <form action="{{ route('otrocs.destroy', $otroc->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('otrocs.show', $otroc->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('otrocs.edit', $otroc->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $otrocs->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
