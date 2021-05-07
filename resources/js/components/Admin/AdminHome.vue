<template>
	<nav class="w-60 bg-gray-700 dark:bg-gray-800 select-none overflow-y-auto
			transition duration-500 ease-in-out">
		<div class="flex flex-col items-center ">
			<router-link to="/worker">
				<button class="focus:outline-none">
					<!-- <img class="my-10"  src="images/logo.png" alt="logo" width="200" height="100"> -->
				</button>
			</router-link>
		</div>
		<ul class="text-sm">
			<li class="pl-8 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to="/content">
					<button class="focus:text-gray-500 dark-focus:text-gray-400
				focus:outline-none w-full transition duration-500 ease-in-out">	<span class="flex items-center">
						<i class="fas fa-users"></i>
						<span class="ml-4 capitalize" >Admin HOME </span>
						</span>
					</button>
				</router-link>
			</li>
			<li class="pl-9 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to="/adminabout">
					<button class="focus:text-gray-500 dark-focus:text-gray-400
				focus:outline-none w-full transition duration-500 ease-in-out">	<span class="flex items-center">
						<i class="far fa-file-excel"></i>
						<span class="ml-4 capitalize" >Admin ABOUT</span>
						</span>
					</button>
				</router-link>
			</li>
			<li class="pl-9 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to="/admincontact">
					<button class="focus:text-gray-500 dark-focus:text-gray-400
				focus:outline-none w-full transition duration-500 ease-in-out">	<span class="flex items-center">
						<i class="far fa-file-excel"></i>
						<span class="ml-4 capitalize" >Admin CONTACT</span>
						</span>
					</button>
				</router-link>
			</li>
			<li class="pl-8 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 transition duration-500
				ease-in-out">
				<button v-if="loggedIn" @click="logout" class="focus:text-gray-500 dark-focus:text-pink-400
					focus:outline-none w-full transition duration-500 ease-in-out">	<span class="flex items-center">
						<i class="fas fa-sign-out-alt"></i>
						<span class="ml-4 capitalize">SHKYÇU</span>
					</span>
				</button>
			</li>
		</ul>
	</nav>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {

        }
    },
    computed:{
        loggedIn() {
        return this.$store.getters.loggedIn;
        },
    },
    methods: {
        logout() {
            axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("access_token");
        
            this.$store.dispatch("destroyToken").then(() => {
            this.$router.push("/").catch(()=>{});
            });
        },
    }
}
</script>

<style>

</style>