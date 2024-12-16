@extends('layouts.app')

@section('template_title')
    {{ $documento->name ?? __('Show') . " " . __('Documento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Documento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('documentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Croquis:</strong>
                                    {{ $documento->croquis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Funcion:</strong>
                                    {{ $documento->img_funcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Memo:</strong>
                                    {{ $documento->img_memo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Inicial:</strong>
                                    {{ $documento->img_inicial }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Recurrente:</strong>
                                    {{ $documento->img_recurrente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Otro:</strong>
                                    {{ $documento->img_otro }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
