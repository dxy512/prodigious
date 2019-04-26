@extends('master')
@section('content')
<script language="JavaScript">
		function mascara(t, mask){
		var i = t.value.length;
		var saida = mask.substring(1,0);
		var texto = mask.substring(i)
		if (texto.substring(0,1) != saida){
		t.value += texto.substring(0,1);
			}
		}
	</script>
<div class="container">
  <form method="post" action="{{action('CRUDController@update', $id)}}">
  <!--editando de nome-->
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$crud->name}}">
      </div>
    </div>
	<!--editando de cpf-->
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">CPF</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" maxlength="14" onkeypress="mascara(this, '###.###.###-##')" placeholder="cpf" name="cpf" value="{{$crud->cpf}}">
      </div>
    </div>
	<!--editando de nascimento-->
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Nascimento</label>
      <div class="col-sm-5">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="nasc" value="{{$crud->nasc}}">
      </div>
    </div>
	<!--editando de email-->
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email" value="{{$crud->email}}">
      </div>
    </div>
	<!--editando de desrcicao-->
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Descrição</label>
      <div class="col-sm-10">
        <textarea name="descricao" rows="8" cols="62">{{$crud->descricao}}</textarea>
      </div>
    </div>
	<!--reenviando arquivo-->
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Arquivo</label>
      <div class="col-sm-5">
        <input type="file" class="form-control form-control-lg" id="lgFormGroupInput" name="arquivo" value="{{$crud->arquivo}}">
      </div>
    </div>
	<!--botoes-->
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-success">Atualizar</button>
	  <button href="crud" class="btn btn-danger">Cancelar</button>	 
    </div>
  </form>
</div>
@endsection