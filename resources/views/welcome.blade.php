@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Calendar') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($mensaje == 1)
                      <div class="alert alert-success" role="alert">
                            {{ _('Los datos se cargaron exitosamente!') }}
                      </div>
                    @else
                      @if ( $mensaje !== '' )
                        <div class="alert alert-danger" role="alert">
                          {{ $mensaje }}
                        </div>
                      @endif
                    @endif
                        <a href="{{ url('/add-client') }}" class="btn btn-primary">Clientes</a>
                        
                        <!--form method="POST">
                             @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">C.U.I.T</span>
                                <input type="text" class="form-control" placeholder="(Ingrese 11 números)" aria-label="Cuit" name='cuit' aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--script>
    function esCUITValida( inputValor )
    {
      inputString = inputValor.toString()
      
      if ( inputString.length == 11 ) 
      {
        var Caracters_1_2 = inputString.charAt(0)+inputString.charAt(1)
     
        if ( Caracters_1_2 == "20" || Caracters_1_2 == "23"|| Caracters_1_2 == "24" || Caracters_1_2 == "27" || Caracters_1_2 == "30" || Caracters_1_2 == "33" || Caracters_1_2 == "34"  )
        {
          var Count = inputString.charAt(0)*5+inputString.charAt(1)*4+inputString.charAt(2)*3+inputString.charAt(3)*2+inputString.charAt(4)*7+inputString.charAt(5)*6+inputString.charAt(6)*5+inputString.charAt(7)*4+inputString.charAt(8)*3+inputString.charAt(9)*2+inputString.charAt(10)*1                             
          Division = Count/11;
          if(Division==Math.floor(Division))
          {
            return true
          }
        }
      }        
      return false
    }
</script-->
@endsection
