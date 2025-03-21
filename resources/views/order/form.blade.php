{{-- no funciona el cursor pointer con bootstrap a no ser que sea un boton, no sé por qué --}}
<style>
    .client-selector select:hover {
        cursor: pointer;
    }
</style>
<div class="row padding-1 p-1">
    <div class="col-md-12">
        {{-- id cliente --}}
        <div class="client-selector ">
            <label for="clientSelect">Selecciona un Cliente</label>
            <select class="form-control" id="clientSelect" name="client_id">
                @foreach($clients as $id)
                    <option value="{{ $id }}">{{ $id }}</option>
                @endforeach
            </select>
        </div>
    
        {{-- nombre del pedido --}}
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre del pedido') }}</label>
            <input 
                type="text" 
                name="name" 
                class="form-control 
                @error('name') is-invalid 
                @enderror" value="{{ old('name', $order?->name) }}" 
                id="name" p
                Placeholder="Nombre del pedido">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{-- Precio del producto --}}
        <div class="form-group mb-2 mb20">
            <label for="price" class="form-label">{{ __('Precio') }}</label>
            <input type="text" 
            name="price" 
            class="form-control 
            @error('price') is-invalid 
            @enderror" 
            value="{{ old('price', $order?->price) }}" 
            id="price" 
            placeholder="Precio">
            {!! $errors->first('price', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{-- Descripcion del pedido --}}
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $order?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
      
        {{-- boton crear pedido --}}
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button 
        type="submit" 
        class="btn btn-primary">
        {{ __('Crear pedido') }}
    </button>
    </div>
</div>