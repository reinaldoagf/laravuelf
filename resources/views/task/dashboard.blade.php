@extends('app')
@section('content')
<div id="task-crud" class="row">
	 <div class="col-xs-12">
	 	<h1 class="page-header">CRUD Laravel y VUEjs</h1>
	 </div>
	 <div class="col-sm-7">
	 	<a href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus "></i> Nueva tarea</a>
	 	<table class="table table-hover table-striped">
	 		<thead>
	 			<tr>
	 				<th>ID</th>
	 				<th>Tarea</th>
	 				<th colspan="2">&nbsp;
					<!-- Opciones -->
	 				</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<tr v-for="keep in keeps">
	 				<td width="10px">@{{keep.id}}</td>
	 				<td>@{{keep.keep}}</td>
	 				<td width="10px"><a href="#" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Editar</a></td>
	 				<td width="10px"><a v-on:click.prevent="deleteKeep(keep)" href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Eliminar</a></td>
	 			</tr>
	 		</tbody>
	 	</table>
	 </div>
	 <div class="col-sm-5">
	 	<pre>@{{$data}}</pre>
	 </div>
</div>
@endsection
