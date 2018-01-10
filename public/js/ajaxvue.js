// var urlUsers='https://randomuser.me/api/?results=5';
// var urlUsers='http://cinemalf.dev/usersjson';
var urlUsers='getusers';
new Vue({
	el:'#main',
	created:function(){
		this.getUsers();
	},
	data:{
		list:[]
	},
	methods:{
		getUsers:function(){
			//Con vue resource
			// this.$http.get(urlUsers).then(function(response){
			// 	this.list=response.data.data;
			// });
			//Con axios
			axios.get(urlUsers).then(response=>{
				this.list=response.data.data
			});
		}
	}
});