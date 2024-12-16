<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $grado?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $grado?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mes" class="form-label">{{ __('Mes') }}</label>
            <input type="text" name="mes" class="form-control @error('mes') is-invalid @enderror" value="{{ old('mes', $grado?->mes) }}" id="mes" placeholder="Mes">
            {!! $errors->first('mes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gestion" class="form-label">{{ __('Gestion') }}</label>
            <input type="text" name="gestion" class="form-control @error('gestion') is-invalid @enderror" value="{{ old('gestion', $grado?->gestion) }}" id="gestion" placeholder="Gestion">
            {!! $errors->first('gestion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instituto" class="form-label">{{ __('Instituto') }}</label>
            <input type="text" name="instituto" class="form-control @error('instituto') is-invalid @enderror" value="{{ old('instituto', $grado?->instituto) }}" id="instituto" placeholder="Instituto">
            {!! $errors->first('instituto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad_pais" class="form-label">{{ __('Ciudad Pais') }}</label>
            <input type="text" name="ciudad_pais" class="form-control @error('ciudad_pais') is-invalid @enderror" value="{{ old('ciudad_pais', $grado?->ciudad_pais) }}" id="ciudad_pais" placeholder="Ciudad Pais">
            {!! $errors->first('ciudad_pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_g" class="form-label">{{ __('Folio G') }}</label>
            <input type="text" name="folio_g" class="form-control @error('folio_g') is-invalid @enderror" value="{{ old('folio_g', $grado?->folio_g) }}" id="folio_g" placeholder="Folio G">
            {!! $errors->first('folio_g', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo1" class="form-label">{{ __('Titulo1') }}</label>
            <input type="text" name="titulo1" class="form-control @error('titulo1') is-invalid @enderror" value="{{ old('titulo1', $grado?->titulo1) }}" id="titulo1" placeholder="Titulo1">
            {!! $errors->first('titulo1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion1" class="form-label">{{ __('Descripcion1') }}</label>
            <input type="text" name="descripcion1" class="form-control @error('descripcion1') is-invalid @enderror" value="{{ old('descripcion1', $grado?->descripcion1) }}" id="descripcion1" placeholder="Descripcion1">
            {!! $errors->first('descripcion1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mes1" class="form-label">{{ __('Mes1') }}</label>
            <input type="text" name="mes1" class="form-control @error('mes1') is-invalid @enderror" value="{{ old('mes1', $grado?->mes1) }}" id="mes1" placeholder="Mes1">
            {!! $errors->first('mes1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gestion1" class="form-label">{{ __('Gestion1') }}</label>
            <input type="text" name="gestion1" class="form-control @error('gestion1') is-invalid @enderror" value="{{ old('gestion1', $grado?->gestion1) }}" id="gestion1" placeholder="Gestion1">
            {!! $errors->first('gestion1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instituto1" class="form-label">{{ __('Instituto1') }}</label>
            <input type="text" name="instituto1" class="form-control @error('instituto1') is-invalid @enderror" value="{{ old('instituto1', $grado?->instituto1) }}" id="instituto1" placeholder="Instituto1">
            {!! $errors->first('instituto1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad_pais1" class="form-label">{{ __('Ciudad Pais1') }}</label>
            <input type="text" name="ciudad_pais1" class="form-control @error('ciudad_pais1') is-invalid @enderror" value="{{ old('ciudad_pais1', $grado?->ciudad_pais1) }}" id="ciudad_pais1" placeholder="Ciudad Pais1">
            {!! $errors->first('ciudad_pais1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_g1" class="form-label">{{ __('Folio G1') }}</label>
            <input type="text" name="folio_g1" class="form-control @error('folio_g1') is-invalid @enderror" value="{{ old('folio_g1', $grado?->folio_g1) }}" id="folio_g1" placeholder="Folio G1">
            {!! $errors->first('folio_g1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo2" class="form-label">{{ __('Titulo2') }}</label>
            <input type="text" name="titulo2" class="form-control @error('titulo2') is-invalid @enderror" value="{{ old('titulo2', $grado?->titulo2) }}" id="titulo2" placeholder="Titulo2">
            {!! $errors->first('titulo2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion2" class="form-label">{{ __('Descripcion2') }}</label>
            <input type="text" name="descripcion2" class="form-control @error('descripcion2') is-invalid @enderror" value="{{ old('descripcion2', $grado?->descripcion2) }}" id="descripcion2" placeholder="Descripcion2">
            {!! $errors->first('descripcion2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mes2" class="form-label">{{ __('Mes2') }}</label>
            <input type="text" name="mes2" class="form-control @error('mes2') is-invalid @enderror" value="{{ old('mes2', $grado?->mes2) }}" id="mes2" placeholder="Mes2">
            {!! $errors->first('mes2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gestion2" class="form-label">{{ __('Gestion2') }}</label>
            <input type="text" name="gestion2" class="form-control @error('gestion2') is-invalid @enderror" value="{{ old('gestion2', $grado?->gestion2) }}" id="gestion2" placeholder="Gestion2">
            {!! $errors->first('gestion2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instituto2" class="form-label">{{ __('Instituto2') }}</label>
            <input type="text" name="instituto2" class="form-control @error('instituto2') is-invalid @enderror" value="{{ old('instituto2', $grado?->instituto2) }}" id="instituto2" placeholder="Instituto2">
            {!! $errors->first('instituto2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad_pais2" class="form-label">{{ __('Ciudad Pais2') }}</label>
            <input type="text" name="ciudad_pais2" class="form-control @error('ciudad_pais2') is-invalid @enderror" value="{{ old('ciudad_pais2', $grado?->ciudad_pais2) }}" id="ciudad_pais2" placeholder="Ciudad Pais2">
            {!! $errors->first('ciudad_pais2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_g2" class="form-label">{{ __('Folio G2') }}</label>
            <input type="text" name="folio_g2" class="form-control @error('folio_g2') is-invalid @enderror" value="{{ old('folio_g2', $grado?->folio_g2) }}" id="folio_g2" placeholder="Folio G2">
            {!! $errors->first('folio_g2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>