<template>
	<div class="flex flex-row justify-between items-center   space-x-3 py-1 pt-4 pb-0  bg-blue mt-0 ml-0 mr-0 px-6">
		<a href="#" class="block">
			<!-- <span class="sr-only">themes.dev</span> -->
			<router-link to="/home">
				<img class="pl-8  pb-0 w-auto sm:h-10" src="images/logo.png">
			</router-link>
		</a>
		<nav class="flex flex-row space-x-6 text-white  font-bold " v-if="!['login'].includes($route.login)">
			<router-link to="/home"> <a href="#" class="mx-3 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500  ">HOME</a>
			</router-link>
			<router-link to="/about"> <a href="#" class="mx-3 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500 ">ABOUT</a>
			</router-link>
			<router-link to="/contact"> <a href="#" class="mx-3 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">CONTACT</a>
			</router-link>
			<button class="text-white font-bold" v-if="loggedIn" @click="logout "> <a href="#" class="mx-3 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-white transition duration-500">LOGOUT</a>
			</button>
		</nav>
	</div>
</template>
<script>
	import axios from "axios";
	export default {
	   data() 
	      {
	          return {
	              isAdmin: true,
	              test:"",
	          
	          }
	      },
	    computed:{
	
	    loggedIn() {
	           return this.$store.getters.loggedIn;
	       },
	     
	    }, 
	   
	      created() {
	          
       },
	        
	      methods: {
	
	       logout()  {
	          axios.defaults.headers.common["Authorization"] =
	             "Bearer " + localStorage.getItem("access_token");
	        
	      this.$store.dispatch("destroyToken").then(() => {
	             this.$router.push("/login").catch(()=>{});
	             
	           });
	        },
	     
	    }
	  
	}
</script>
<style>
</style>