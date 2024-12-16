@extends('layouts.app')

@section('template_title')
    {{ $identidad->name ?? __('Show') . " " . __('Identidad') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Identidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('identidads.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Identidad:</strong>
                                    {{ $identidad->img_identidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Identidad2:</strong>
                                    {{ $identidad->img_identidad2 }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
