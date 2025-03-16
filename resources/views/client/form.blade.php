<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            {{-- Campo del nombre de cliente --}}
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input 
            type="text" 
            name="name" class="form-control 
            @error('name') is-invalid 
            @enderror" 
            value="{{ old('name', $client?->name) }}" 
            id="name" 
            placeholder="Nombre">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{-- Campo del telefono --}}
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Teléfono') }}</label>
            <input 
            type="text" 
            name="phone" 
            class="form-control 
            @error('phone') is-invalid 
            @enderror" 
            value="{{ old('phone', $client?->phone) }}" 
            id="phone" 
            placeholder="Teléfono">
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Dirección') }}</label>
            <input 
            type="text" 
            name="address" 
            class="form-control 
            @error('address') is-invalid 
            @enderror" 
            value="{{ old('address', $client?->address) }}" 
            id="address" 
            placeholder="Dirección">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $client?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Crear cliente') }}</button>
    </div>
</div>