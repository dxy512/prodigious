@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
		<td>
		<td><a href="{{action('CRUDController@create')}}" class="btn btn-primary">Novo Registro</a></td>
		</td>
	  </tr>
	  <tr>
        <th>ID</th>
        <th>Nome</th>
		<th>CPF</th>
		<th>Nascimento</th>
        <th>Email</th>
		<th>Descrição</th>
		<th>Arquivo</th>
        <th colspan="2">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
		<td>{{$post['cpf']}}</td>
		<td>{{$post['nasc']}}</td>	
        <td>{{$post['email']}}</td>
		<td>{{$post['descricao']}}</td>
		<td>{{$post['arquivo']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection