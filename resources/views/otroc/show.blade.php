@extends('layouts.app')

@section('template_title')
    {{ $otroc->name ?? __('Show') . " " . __('Otroc') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Otroc</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('otrocs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Gesion Mes Co:</strong>
                                    {{ $otroc->gesion_mes_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Evento Co:</strong>
                                    {{ $otroc->evento_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion Co:</strong>
                                    {{ $otroc->duracion_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Intitucion Co:</strong>
                                    {{ $otroc->intitucion_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio Co:</strong>
                                    {{ $otroc->folio_co }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma:</strong>
                                    {{ $otroc->idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion I:</strong>
                                    {{ $otroc->institucion_i }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lectura:</strong>
                                    {{ $otroc->lectura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Escritura:</strong>
                                    {{ $otroc->escritura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Conversacion:</strong>
                                    {{ $otroc->conversacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio I:</strong>
                                    {{ $otroc->folio_i }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Curso C:</strong>
                                    {{ $otroc->curso_c }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel Cono:</strong>
                                    {{ $otroc->nivel_cono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio C:</strong>
                                    {{ $otroc->folio_c }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
