<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="croquis" class="form-label">{{ __('Croquis') }}</label>
            <input type="file" name="croquis" class="form-control @error('croquis') is-invalid @enderror" value="{{ old('croquis', $documento?->croquis) }}" id="croquis" placeholder="Croquis">
            {!! $errors->first('croquis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img_funcion" class="form-label">{{ __('Img Funcion') }}</label>
            <input type="text" name="img_funcion" class="form-control @error('img_funcion') is-invalid @enderror" value="{{ old('img_funcion', $documento?->img_funcion) }}" id="img_funcion" placeholder="Img Funcion">
            {!! $errors->first('img_funcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img_memo" class="form-label">{{ __('Img Memo') }}</label>
            <input type="text" name="img_memo" class="form-control @error('img_memo') is-invalid @enderror" value="{{ old('img_memo', $documento?->img_memo) }}" id="img_memo" placeholder="Img Memo">
            {!! $errors->first('img_memo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img_inicial" class="form-label">{{ __('Img Inicial') }}</label>
            <input type="text" name="img_inicial" class="form-control @error('img_inicial') is-invalid @enderror" value="{{ old('img_inicial', $documento?->img_inicial) }}" id="img_inicial" placeholder="Img Inicial">
            {!! $errors->first('img_inicial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img_recurrente" class="form-label">{{ __('Img Recurrente') }}</label>
            <input type="text" name="img_recurrente" class="form-control @error('img_recurrente') is-invalid @enderror" value="{{ old('img_recurrente', $documento?->img_recurrente) }}" id="img_recurrente" placeholder="Img Recurrente">
            {!! $errors->first('img_recurrente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img_otro" class="form-label">{{ __('Img Otro') }}</label>
            <input type="text" name="img_otro" class="form-control @error('img_otro') is-invalid @enderror" value="{{ old('img_otro', $documento?->img_otro) }}" id="img_otro" placeholder="Img Otro">
            {!! $errors->first('img_otro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a class="btn btn-primary" href="{{ route('documentos.index') }}"> {{ __('Back') }}</a>
    </div>
    <div class="float-right">
        
    </div>
</div>