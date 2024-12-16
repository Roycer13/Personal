@extends('layouts.app')

@section('template_title')
    {{ $grado->name ?? __('Show') . " " . __('Grado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('grados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $grado->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $grado->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mes:</strong>
                                    {{ $grado->mes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestion:</strong>
                                    {{ $grado->gestion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instituto:</strong>
                                    {{ $grado->instituto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad Pais:</strong>
                                    {{ $grado->ciudad_pais }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio G:</strong>
                                    {{ $grado->folio_g }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo1:</strong>
                                    {{ $grado->titulo1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion1:</strong>
                                    {{ $grado->descripcion1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mes1:</strong>
                                    {{ $grado->mes1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestion1:</strong>
                                    {{ $grado->gestion1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instituto1:</strong>
                                    {{ $grado->instituto1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad Pais1:</strong>
                                    {{ $grado->ciudad_pais1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio G1:</strong>
                                    {{ $grado->folio_g1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo2:</strong>
                                    {{ $grado->titulo2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion2:</strong>
                                    {{ $grado->descripcion2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mes2:</strong>
                                    {{ $grado->mes2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestion2:</strong>
                                    {{ $grado->gestion2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instituto2:</strong>
                                    {{ $grado->instituto2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad Pais2:</strong>
                                    {{ $grado->ciudad_pais2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Folio G2:</strong>
                                    {{ $grado->folio_g2 }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
