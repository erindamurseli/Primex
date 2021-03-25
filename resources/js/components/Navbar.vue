<template>
  <nav v-if="!['login'].includes($route.name)" class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white-500 mb-3 border-t-2   border-blue-400 " >
      <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start ">
        
          <button class="text-black cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" v-on:click="toggleNavbar()">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        
        <div v-bind:class="{'hidden': !showMenu, 'flex': showMenu}" class="lg:flex lg:flex-grow items-center">
          <ul class="flex flex-col lg:flex-row list-none ml-auto">
                <router-link to="/home">
            <li class="nav-item">
              <a class="px-3 py-2 flex items-center text-lg uppercase font-bold leading-snug text-black hover:opacity-75" >
                <i class="fab fa-facebook-square text-lg leading-lg text-white opacity-75" /><span class="ml-2">HOME</span>
              </a>
            </li>
                </router-link>
          <div>  
        <router-link to="/about">
  
            <li class="nav-item">
              <a class="px-3 py-2 flex items-center text-lg uppercase font-bold leading-snug text-black hover:opacity-75">
                <i class="fab fa-twitter text-lg leading-lg text-white opacity-75" /><span class="ml-2">ABOUT</span>
              </a>
            </li>
            </router-link>
          </div>
          <router-link to="/contact">
                  <li class="nav-item">
                    <a class="px-3 py-2 flex items-center text-lg uppercase font-bold leading-snug text-black hover:opacity-75" h>
                      <i class="fab fa-pinterest text-lg leading-lg text-white opacity-75" /><span class="ml-2">CONTACT</span>
                    </a>
                  </li>
          </router-link>
          </ul>
        </div>
      </div>
  </nav>
</template>

// <script>
// import axios from 'axios';
// export default {
//     data() {
//         return {

//         }
//     },
//     computed:{
//         loggedIn() {
//             return this.$store.getters.loggedIn;
//         },
//     },
//     methods: {
//         logout() {
//             axios.defaults.headers.common["Authorization"] =
//                 "Bearer " + localStorage.getItem("access_token");
        
//             this.$store.dispatch("destroyToken").then(() => {
//                 this.$router.push("/").catch(()=>{});
//             });
//         },
//     }
// }
// </script>

<style>

</style>