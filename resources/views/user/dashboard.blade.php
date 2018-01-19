@extends('app')
@section('content')
<div id="user-crud" class="row">
	 <div class="col-xs-12">
	 	<h1 class="page-header">CRUD Laravel y VUEjs</h1>
	 </div>
	 <div class="col-sm-7">
	 	<h3 >Usuarios participantes</h3>
	 	<table class="table table-hover table-striped">
	 		<thead>
	 			<tr>
	 				<th>ID</th>
	 				<th>Nombre</th>
	 				<th colspan="2">&nbsp;
					<!-- Opciones -->
	 				</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<tr v-for="user in users">
	 				<td width="10px">@{{user.id}}</td>
	 				<td><strong>@{{user.name}}</strong></td>
	 				<td width="10px"><a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Editar</a></td>
	 				<td width="10px"><a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</a></td>
	 			</tr>
	 		</tbody>
	 	</table>
	 	<h3>Usuario ganador</h3>
	 	<ul  class="list-group">
	 		<li  v-model="winner" class="list-group-item list-group-item-success">
	 			<strong >@{{winner.name}}</strong> <span class="badge">@{{winner.email}}</span><!-- 	<a class="btn btn-success"
	 			href="#">Contactar</a> -->
			</li>
			<li class="list-group-item">
				<button class="btn btn-primary" v-on:click="getWinner"><span class="fa fa-trophy" aria-hidden="true"></span> Elegir Ganador</button> 
				<button v-model="winner" v-if="winnerflag" class="btn btn-success pull-right"><span class="fa fa-envelope" aria-hidden="true"></span> Contactar</button>
			</li>
		</ul>
	 </div>	 
	 <div class="col-sm-5">
	 	<pre>@{{$data}}</pre>
	 </div>
</div>
@endsection