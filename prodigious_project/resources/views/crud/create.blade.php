<!-- create.blade.php -->

@extends('master')
@section('content')
<!--mascara do formulario-->
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
<!--mascara do formulario-->
<div class="container">
	<form method="post" action="{{url('crud')}}" enctype="multipart/form-data">
	<!--inserção de nome-->
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Insira aqui um nome" name="name">
      </div>
    </div>
	<!--inserção de cpf-->
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">CPF</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" maxlength="14" onkeypress="mascara(this, '###.###.###-##')" id="lgFormGroupInput" placeholder="Insira aqui um CPF" name="cpf">
      </div>
    </div>
	<!--inserção de nascimento-->
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Nascimento</label>
      <div class="col-sm-3">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="nasc">
      </div>
    </div>
	<!--inserção de email-->
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Insira aqui um email" name="email">
      </div>
    </div>
	<!--inserção de descrição-->
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Descrição</label>
      <div class="col-sm-5">
        <textarea name="descricao" class="form-control form-control-lg" rows="6" cols="10"  placeholder="Insira aqui uma descrição..."></textarea>
      </div>
    </div>
	<!--envio de arquivo-->
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Arquivo</label>
      <div class="col-sm-5">
        <input type="file" class="form-control form-control-lg" id="lgFormGroupInput" name="arquivo">
      </div>
    </div>
	<!--fim do formulario-->
	<div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</div>
@endsection