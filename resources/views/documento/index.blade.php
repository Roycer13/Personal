@extends('layouts.app')

@section('template_title')
    Documentos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Documentos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('documentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar documentacion') }}
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
                                        
									<th >Croquis</th>
									<th >Img Funcion</th>
									<th >Img Memo</th>
									<th >Img Inicial</th>
									<th >Img Recurrente</th>
									<th >Img Otro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documentos as $documento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $documento->croquis }}</td>
										<td >{{ $documento->img_funcion }}</td>
										<td >{{ $documento->img_memo }}</td>
										<td >{{ $documento->img_inicial }}</td>
										<td >{{ $documento->img_recurrente }}</td>
										<td >{{ $documento->img_otro }}</td>

                                            <td>
                                                <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('documentos.show', $documento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('documentos.edit', $documento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $documentos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
