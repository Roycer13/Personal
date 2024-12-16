@extends('layouts.app')

@section('template_title')
    {{ $especialc->name ?? __('Show') . " " . __('Especialc') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Especialc</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('especialcs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Gesion Mes Ce:</strong>
                                    {{ $especialc->gesion_mes_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Evento Ce:</strong>
                                    {{ $especialc->evento_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion Ce:</strong>
                                    {{ $especialc->duracion_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Intitucion Ce:</strong>
                                    {{ $especialc->intitucion_ce }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio Ce:</strong>
                                    {{ $especialc->folio_ce }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
