<div class="row p-3">
    <div class="col-md-12">
        {{-- Campo del nombre de cliente --}}
        <div class="form-group mb-3">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input 
                type="text" 
                name="name" 
                class="form-control shadow-sm @error('name') is-invalid @enderror" 
                value="{{ old('name', $client?->name) }}" 
                id="name" 
                placeholder="Nombre"
            >
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{-- Campo del teléfono --}}
        <div class="form-group mb-3">
            <label for="phone" class="form-label">{{ __('Teléfono') }}</label>
            <input 
                type="text" 
                name="phone" 
                class="form-control shadow-sm @error('phone') is-invalid @enderror" 
                value="{{ old('phone', $client?->phone) }}" 
                id="phone" 
                placeholder="Teléfono"
            >
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{-- Campo de la dirección --}}
        <div class="form-group mb-3">
            <label for="address" class="form-label">{{ __('Dirección') }}</label>
            <input 
                type="text" 
                name="address" 
                class="form-control shadow-sm @error('address') is-invalid @enderror" 
                value="{{ old('address', $client?->address) }}" 
                id="address" 
                placeholder="Dirección"
            >
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{-- Campo del email --}}
        <div class="form-group mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input 
                type="text" 
                name="email" 
                class="form-control shadow-sm @error('email') is-invalid @enderror" 
                value="{{ old('email', $client?->email) }}" 
                id="email" 
                placeholder="Email"
            >
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>

    {{-- Botón de envío --}}
    <div class="col-md-12 mt-4">
        <button type="submit" class="btn btn-primary shadow-sm">
            <i class="fas fa-save"></i> {{ __('Crear cliente') }}
        </button>
    </div>
</div>