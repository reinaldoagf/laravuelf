<form method="POST" v-on:submit.prevent="updateKeep(fillKeep.id)">
<div class="modal fade" id="editKeep">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Editar tarea</h4>
			</div>
			<div class="modal-body">
				<label for="keep">Actualizar tarea</label>
				<input type="text" name="keep" v-model="fillKeep.keep" placeholder="tarea" class="form-control">
					<ul style="list-style-type:none">
					&nbsp;
						<li class="text-danger" v-for="error in errors" v-text="error" >
							@{{error}}
						</li>
					</ul>							
			</div>
			<div class="modal-footer">
				<input type="submit" name="" class="btn btn-primary" value="Actualizar">
			</div>
		</div>
	</div>
</div>
</form>