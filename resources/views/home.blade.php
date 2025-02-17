@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Plataforma') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('estado') }}
                        </div>
                    @endif

                    {{ __('Usuario ingresado') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
