@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Clientes') }}</div>
                <div class="card-body">
                    <form method="POST">
                         @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">C.U.I.T</span>
                            <input type="text" class="form-control" placeholder="(Ingrese 11 números)" aria-label="Cuit" name='cuit' aria-describedby="basic-addon1" required>
                        </div>
                        <button type="submit" class="btn btn-primary" >Validar</button>
                    </form>
                </div>
                <a href="{{ url('/home') }}">Ir al inicio</a>
            </div>
        </div>
    </div>
</div>
<!--script>
  ////onchange="return esCUITValida(this)"
    function esCUITValida(inputValor) {
      inputString = inputValor.toString()
      var inputString = inputString.replace(/-/i, "");
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
      window.alert('CUIT INVALIDO');
    }
</script-->
@endsection
