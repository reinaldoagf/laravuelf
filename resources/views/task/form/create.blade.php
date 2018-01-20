<form method="POST" v-on:submit.prevent="createKeep">
<div class="modal fade" id="createKeep">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Nueva tarea</h4>
			</div>
			<div class="modal-body">
				<label for="keep">Crear tarea</label>
				<input type="text" name="keep" v-model="newKeep" placeholder="tarea" class="form-control">
					<ul style="list-style-type:none">
					&nbsp;
						<li class="text-danger" v-for="error in errors" v-text="error" >
							@{{error}}
						</li>
					</ul>							
			</div>
			<div class="modal-footer">
				<input type="submit" name="" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</div>
</div>
</form>