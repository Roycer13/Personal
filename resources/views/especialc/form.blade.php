<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="gesion_mes_ce" class="form-label">{{ __('Gesion Mes Ce') }}</label>
            <input type="text" name="gesion_mes_ce" class="form-control @error('gesion_mes_ce') is-invalid @enderror" value="{{ old('gesion_mes_ce', $especialc?->gesion_mes_ce) }}" id="gesion_mes_ce" placeholder="Gesion Mes Ce">
            {!! $errors->first('gesion_mes_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="evento_ce" class="form-label">{{ __('Evento Ce') }}</label>
            <input type="text" name="evento_ce" class="form-control @error('evento_ce') is-invalid @enderror" value="{{ old('evento_ce', $especialc?->evento_ce) }}" id="evento_ce" placeholder="Evento Ce">
            {!! $errors->first('evento_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion_ce" class="form-label">{{ __('Duracion Ce') }}</label>
            <input type="text" name="duracion_ce" class="form-control @error('duracion_ce') is-invalid @enderror" value="{{ old('duracion_ce', $especialc?->duracion_ce) }}" id="duracion_ce" placeholder="Duracion Ce">
            {!! $errors->first('duracion_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="intitucion_ce" class="form-label">{{ __('Intitucion Ce') }}</label>
            <input type="text" name="intitucion_ce" class="form-control @error('intitucion_ce') is-invalid @enderror" value="{{ old('intitucion_ce', $especialc?->intitucion_ce) }}" id="intitucion_ce" placeholder="Intitucion Ce">
            {!! $errors->first('intitucion_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_ce" class="form-label">{{ __('Folio Ce') }}</label>
            <input type="text" name="folio_ce" class="form-control @error('folio_ce') is-invalid @enderror" value="{{ old('folio_ce', $especialc?->folio_ce) }}" id="folio_ce" placeholder="Folio Ce">
            {!! $errors->first('folio_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>