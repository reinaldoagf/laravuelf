new Vue({
	el:'#task-crud',
	created:function(){
		this.getKeeps();
	},
	data:{
		keeps:[]
	},
	methods:{
		getKeeps:function () {
			var urlKeeps='tasks';
			axios.get(urlKeeps).then(response=>{
				this.keeps=response.data
			});
		},
		deleteKeep:function (keep) {
			var urlKeep='tasks/'+keep.id;
			axios.delete(urlKeep).then(response=>{
				this.getKeeps();
			});
		},
	}
});
new Vue({
	el:'#user-crud',
	created:function(){
		this.getUsers();
	},
	data:{
		users:[],
		winner:{"name"       : "Nombre",
    			"email"      : "Correo",},
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
				this.winner=response.data.randomUser,
				this.winnerflag=true
			});
		}
	}
});