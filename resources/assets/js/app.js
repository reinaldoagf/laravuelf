new Vue({
	el:'#task-crud',
	created:function(){
		this.getKeeps();
	},
	data:{
		keeps              : [],
		newKeep            : '',
		fillKeep           : {'id':'','keep':''},
		errors             : [],
		pagination:{
			'total'        : 0, //total
            'current_page' : 0, //Pagina actual
            'per_page'     : 0, //Por pagina
            'last_page'    : 0, //Ultima pagina
            'from'         : 0, //Desde
            'to'           : 0, //Hasta
		},
		offset             : 3,
	},
	computed:{
		isActived:function(){
			return this.pagination.current_page;
		},
		pagesNumber:function(){
			 if (!this.pagination.to) {
			 	return[];
			 }
			 var from=this.pagination.current_page-this.offset; //
			 if (from<1) {
			 	from=1;
			 }
			 var to= from+(this.offset*2); 
			 if (to>=this.pagination.last_page) {
			 	to=this.pagination.last_page;
			 }
			 var pagesArray=[];
			 while(from<=to){
			 	pagesArray.push(from);
			 	from++;
			 }
			 return pagesArray;
		}
	},
	methods:{
		getKeeps:function (page) {
			var urlKeeps='tasks?page='+page;
			axios.get(urlKeeps).then(response=>{
				this.keeps=response.data.tasks.data,
				this.pagination=response.data.pagination
			});
		},
		createKeep:function () {
			var urlKeep='tasks';
			axios.post(urlKeep,{
				keep:this.newKeep
			}).then(response=>{
				this.getKeeps();
				this.newKeep ='';
				this.errors  =[];				
				$('#createKeep').modal('hide');//Usando jquery para ocultar la ventana
				toastr.success('Tarea creada satisfactoriamente');
			}).catch(error=>{
				this.errors=error.response.data;
			});
		},
		editKeep:function(keep){
			this.fillKeep.id   = keep.id;
			this.fillKeep.keep = keep.keep;
			$('#editKeep').modal('show');////Usando jquery para mostrar la ventana
		},
		updateKeep:function(id){
			var urlKeeps='tasks/'+id;
			axios.put(urlKeeps,this.fillKeep).then(response=>{
				this.getKeeps();
				this.fillKeep={'id':'','keep':''};
				this.errors=[];
				$('#editKeep').modal('hide');
				toastr.success('Tarea actulizada satisfactoriamente');
			}).catch(error=>{
				this.errors=error.response.data
			});
		},
		deleteKeep:function (keep) {
			var urlKeep='tasks/'+keep.id;
			axios.delete(urlKeep).then(response=>{
				this.getKeeps();
				toastr.success('Tarea eliminada satisfactoriamente');
			});
		},
		changePage:function(page){
			this.pagination.current_page=page;
			this.getKeeps(page);
		}
	}
});
new Vue({
	el:'#user-crud',
	created:function(){
		this.getUsers();
	},
	data:{
		users:[],
		winner:{"name"  : "Nombre",
    			"email" : "Correo",},
    	winnerflag:false
	},
	methods:{
		getUsers:function () {
			var urlUsers='getusers';
			axios.get(urlUsers).then(response=>{
				this.users=response.data.data
			});
		},
		getWinner:function () {
			var urlUsers='getrandomuser';
			axios.get(urlUsers).then(response=>{
				this.winner     = response.data.randomUser,
				this.winnerflag = true
			});
		}
	}
});