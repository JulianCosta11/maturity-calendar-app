@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Calendar') }}</div>
                <div class="card-body">
                  <form method="POST" action="{{ url('/client') }}">
                    @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Razon Social:</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" id="nombre" name="nombre" value = "{{ $nombre }}" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">C.U.I.T</span>
                            <input type="text" class="form-control" name="cuit" value="{{ $cuit }}" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Descripción:</span>
                            <input type="text" class="form-control" name="descripcion" placeholder="(Opcional)" aria-describedby="basic-addon1">
                        </div>    
                        <div class="input-group mb-3">
                            <h4>Seleccione los impuestos que correspondan:</h4>
                            @foreach ($impuestos as $i)
                            <div class="input-group mb-1">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="impuestos[]" id="{{ $i->id_impuesto }}" value="{{ $i->id_impuesto }}">
                                <label class="custom-control-label" for="{{ $i->id_impuesto }}">{{ $i->nombre }}</label>
                              </div>
                            </div>
                            @endforeach
                        </div>                                                    
                        <input type="hidden" name="brand" value='{{ Auth::user()->brand }}'>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" >Agregar</button>
                  </form>
                </div>
            </div>
            <a ></a>
        </div>
    </div>
</div>

<script type="text/javascript">
  let nombre = document.getElementById('nombre');
  if (nombre.value === '') {
    var resp = confirm("No encontramos contribuyetes con ese CUIT! ¿Desea continuar?");
    if (!resp) location.href="../login";
  }
</script>
@endsection
