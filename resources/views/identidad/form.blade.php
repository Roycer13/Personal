<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="img_identidad" class="form-label">{{ __('Img Identidad') }}</label>
            <input type="text" name="img_identidad" class="form-control @error('img_identidad') is-invalid @enderror" value="{{ old('img_identidad', $identidad?->img_identidad) }}" id="img_identidad" placeholder="Img Identidad">
            {!! $errors->first('img_identidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img_identidad2" class="form-label">{{ __('Img Identidad2') }}</label>
            <input type="text" name="img_identidad2" class="form-control @error('img_identidad2') is-invalid @enderror" value="{{ old('img_identidad2', $identidad?->img_identidad2) }}" id="img_identidad2" placeholder="Img Identidad2">
            {!! $errors->first('img_identidad2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>