@extends('app')
@section('content')
<div id="task-crud" class="row">
	 <div class="col-xs-12">
	 	<h1 class="page-header">CRUD Laravel y VUEjs</h1>
	 </div>
	 <div class="col-sm-7">
	 	<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#createKeep"><i class="fa fa-plus" aria-hidden="true"></i> Nueva tarea</a>
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
	 				<td width="10px"><a v-on:click.prevent="editKeep(keep)" href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></td>
	 				<td width="10px"><a v-on:click.prevent="deleteKeep(keep)" href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a></td>
	 			</tr>
	 		</tbody>
	 	</table>
	 	<nav>
		 	<ul class="pagination">
		 		<li v-if="pagination.current_page > 1">
		 			<a href="#" @click.prevent="changePage(pagination.current_page-1)" ><span>Atrás</span></a>
		 		</li>
		 		<li v-for="page in pagesNumber" v-bind:class="[page==isActived ? 'active' : '']">
		 			<a href="#" @click.prevent="changePage(page)">@{{page}}</a>
		 		</li>
		 		<li v-if="pagination.current_page < pagination.last_page">
		 			<a href="#"  @click.prevent="changePage(pagination.current_page+1)"><span>Siguiente</span></a>
		 		</li>
		 	</ul>
	 	</nav>
	 @include('task.form.create')
	 @include('task.form.edit')
	 </div>
	 <div class="cl-sm-5">
	 	<pre>@{{$data}}</pre>
	 </div>
</div>
@endsection
