<template>
<v-container>
    <div class="relative min-h-50  pb-10 font-mono text-cyan-900 "  >
  <div class="flex justify-center py-5 ">
       <div class="container max-w-6xl p-4  " >
               <h1 class="py-5 text-left ml-16 font-semibold text-blue text-3xl  ">{{titlee}}</h1>

<div  class="flex  pl-1 ">
      <div class="border-2 absolute opacity-30  bg-blue h-60  fixed mx-3 "  ></div>
   <div class="block  " >


    <div @click="goto('div1')" >
    <div class=" flex  items-center order-1 mt-4 ml-2 bg-blue shadow-xl w-3 h-3 rounded-full  transition delay-4 duration-800 ease-in-out bg-blue hover:bg-blue transform  hover:scale-150  "  >
     </div>
   </div>

    <div @click="goto('div2')">
        <div class=" flex mt-4 items-center order-1 ml-2 bg-blue shadow-xl w-3 h-3 rounded-full  transition delay-4  duration-800 ease-in-out bg-blue hover:bg-blue transform  hover:scale-150 ">
     </div>
    </div>
    
    <div @click="goto('div3')">  <div class=" flex ml-2  mt-4 items-center order-1 bg-blue shadow-xl w-3 h-3 rounded-full  transition delay-4  duration-800 ease-in-out bg-blue hover:bg-blue transform  hover:scale-150">
     </div>
     </div>

<!-- butoni test -->
       <div @click="goto('div3')">  <div class=" flex ml-2 mt-4  items-center order-1 bg-blue shadow-xl w-3 h-3 rounded-full transition delay-4  duration-800 ease-in-out bg-blue hover:bg-blue transform  hover:scale-150">
     </div>
     </div>
     <!-- butoni test -->
       <div  @click="goto('div3')">  <div class="  flex ml-2 mt-4 items-center order-1 bg-blue shadow-xl w-3 h-3 rounded-full transition delay-4  duration-800 ease-in-out bg-blue hover:bg-blue transform  hover:scale-150">
     </div>
     </div>
</div>




    <br />
       <div class=" ml-11  pt-2">
    <div class="div post py-2 text-left " ref="div1"><p >{{test}}</p></div>
    <div class="div post py-2 text-left" ref="div2"><p >The investigation into the root cause and exact scope of the compromise is still ongoing.</p></div>
    <div class="div post py-2 text-left" ref="div3"><p >As announced on the php.internals mailing list, a pair .</p></div>




    	<div class="post py-2  ">
				<img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ3JhbW1pbmd8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80">
			</div>   
     	<div class="post py-5">
						<div class="flex">
										<router-link :to="{
                      name: 'editabout', 
                      params: { id: about.id },
                      }">
											<button v-if="loggedIn" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Edit <i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
											</button>
										</router-link>
						</div>
					</div>
   </div>
  
    </div>
    
     

  </div>
      </div>
     </div>


 <!-- <v-row>
      <v-slider
        v-model="value"
        vertical
        label="Regular">
	  </v-slider>
    </v-row> -->

<!-- Footeri -->
       <footer class="mb-0 overflow-hidden">
            <div class="flex items-center justify-end h-20 w-full relative bg-blue my-0">
                <div class="text-justify ml-24">
                    <h1 class="text-white text-xl capitalize bold">Need more information ?</h1>
                    <p class="text-white text-xs justify md:text-xs">Need more information more information information ..</p>
                </div>
                <div class="relative mr-6 my-4" >
                    <form class="m-4 flex">
                        <input class="p-4  mr-0  text-gray-800 border-gray-200 bg-white" placeholder="Need more information...." />
                        <button class="px-8 bg-yellow text-gray-800 font-bold p-4 uppercase hover:bg-blue border-yellow-500">Search</button>
                    </form>
                </div>
            </div>
            <!-- start container -->
            <div class="pt- 0 pb-0 h-80 w-full bg-blackk">
                <div class="flex flex-wrap sm:-mx-1 md:-mx-px xl:-mx-2">
                    <div class="w-full sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-4 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/4 pb-0">
                        <!-- Column 1 Content -->
                        <img class="pl-8 ml-14 pb-0 w-auto mt-10 h-14 w-8" src="images/logo.png" />
                        <p class="pl-8 ml-14 mt-4 pb-0 w-auto sm:h-10 text-gray">Lorem Ipsum is simplye industry's standard dummy text ever since the 1500s, of type secimen book.</p>
                        <div class="text-center mt-20 inline-flex ml-14">
                            <div>
                                <img class="pl-8 pb-0 w-13 h-8" src="images/calli.png" />
                            </div>
                            <div class="text-xl ml-3">
                                <p class="text-blue italic">2300 8596 3274 256</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-0 mt-0">
                        <!-- Column 2 Content -->
                        <h4 class="text-grayy mt-10 ml-44 font-bold text-2xl">Follow US</h4>
                        <ul class="nav ml-0 navbar-nav">
                            <li id="navi-2" class="leading-7 text-sm mt-4 ml-44 inline-flex" style="margin-left: 150px;">
                                <div>
                                    <img class="pl-8 pb-0 w-13 h-5" src="images/facebook.png" />
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> Primex </a></div>
                            </li>
                            <li id="navi-2" class="leading-7 text-sm mt-3 ml-44 inline-flex" style="margin-left: 150px;">
                                <div>
                                    <img class="pl-8 pb-0 w-13 h-5" src="images/linkedin.png" />
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> Primex.shpk </a></div>
                            </li>
                            <li id="navi-2" class="leading-7 text-sm mt-3 ml-44 inline-flex" style="margin-left: 150px;">
                                <div>
                                    <img class="pl-8 pb-0 w-13 h-5" src="images/instagram.png" />
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> Primexshpk </a></div>
                            </li>
                            <li id="navi-2" class="leading-7 text-sm mt-3 ml-44 inline-flex" style="margin-left: 150px;">
                                <div>
                                    <img class="pl-8 pb-0 w-13 h-5" src="images/internet.png" />
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> Primexshpk </a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-0 mt-0">
                        <!-- Column 2 Content -->
                        <h4 class="text-grayy mt-10 ml-24 font-bold text-2xl">Follow US</h4>
                        <ul class="nav ml-3 navbar-nav">
                            <li id="navi-2" class="leading-7 text-sm mt-2 ml-32 inline-flex" style="margin-left: 90px;">
                                <div>
                                    <div class="flex items-center bg-grayy shadow-xl w-2 h-2 mt-3 rounded-full"></div>
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> primex shpk search for more </a></div>
                            </li>
                            <li id="navi-2" class="leading-7 text-sm ml-32 inline-flex" style="margin-left: 90px;">
                                <div>
                                    <div class="flex items-center bg-grayy shadow-xl w-2 h-2 mt-3 rounded-full"></div>
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> primex shpk search</a></div>
                            </li>
                            <li id="navi-2" class="leading-7 text-sm ml-32 inline-flex" style="margin-left: 90px;">
                                <div>
                                    <div class="flex items-center bg-grayy shadow-xl w-2 h-2 mt-3 rounded-full"></div>
                                </div>
                                <div><a class="text-gray text-small ml-4" href=""> primex shpk search now</a></div>
                            </li>
                            <li id="navi-2" class="leading-7 text-sm ml-32 inline-flex" style="margin-left: 90px;">
                                <div>
                                    <div class="flex items-center bg-grayy shadow-xl w-2 h-2 mt-3 rounded-full"></div>
                                </div>
                                <div>
                                    <a class="text-gray text-small ml-4" href="">
                                        primex shpk to search now
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full relative sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-0 mt-0">
                        <!-- Column 2 Content -->
                        <h4 class="text-grayy mt-10 ml-30 font-bold text-2xl" style="margin-left: 20px;">Business hours</h4>
                        <ul class="nav ml-3 mt-2 navbar-nav">
                            <li id="navi-2" class="leading-7 text-sm mt-3 mt-2 ml-30"><a class="text-gray text-small ml-4" href=""> Primex shpk search for more information </a></li>
                            <li id="navi-2" class="leading-7 text-sm ml-30"><a class="text-gray text-small ml-4" href=""> Primex shpk.........search now!</a></li>
                            <li id="navi-2" class="leading-7 text-sm ml-30"><a class="text-gray text-small ml-4" href=""> Primex shpk.....................information now! </a></li>
                            <li id="navi-2" class="leading-7 text-sm ml-30"><a class="text-gray text-small ml-4" href="/"> Primex shpk...................now!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center h-20 w-full bg-bblack my-0">
                <div class="text-left mr-80">
                    <div class="flex items-center bg-grayy shadow-xl w-2 h-2 rounded-full">
                        <p class="text-grayy text-xl ml-5 md:text-xs">test12345678@gmail.com</p>
                    </div>
                </div>
                <div class="ml-80">
                    <img class="pl-8 ml-8 pb-0 w-auto sm:h-10" src="images/logo.png" style="margin-left: 700px;" />
                </div>
            </div>
        </footer>
  
</v-container>
</template>



<script>
import axios from "axios";
export default {
	
   data() 
      {
          return {
            
            isAdmin: true,
            test:"",
            about: null,
            abouts:[],
			 value: 10,
        
          }
      },
  computed:{
     
        loggedIn() {
           return this.$store.getters.loggedIn;
       },
      filteredComments: function () 
      {
        return this.data.filter(d => 
        {
          return d.full_name.toString().toLowerCase().match(this.search);
        });
      },
    }, 
   
      created() {
            this.getAbouts();
             ;
      },
        
      methods: {
          goto(refName) {
      var element = this.$refs[refName];
      var top = element.offsetTop;

      window.scrollTo(0, top);
    },

        getAbouts(){ 
          axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("access_token");
    
          axios
          .get('api/about')
          .then((response) => {
            this.about = response.data[0];

            this.test = this.about.content;
            
            this.titlee = this.about.title;


          });
        },
        getAbout() {
          axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("access_token");
                
          axios.get(`/api/editabout/${this.about}`)
              .then((response) => {
                this.data = response.data;
      });
        }, 
    }

}
</script>

<style scoped>

  .sidebar {
    position: fixed;
    top: 30px;
    left: 10px;
    max-width: 230px;
    font-size: 18px;
  }
  .menu {
    padding: 0;
    list-style: none;
  }
  .current-section {
    padding-top: 50px;
  }
  .current-section input {
    max-width: 3em;
  }
  .menu-item {
    margin-bottom: 20px;
  }
  .menu-item a {
    cursor: pointer;
  }
  .main {
    margin-left: 300px;
    font-size: 25px;
 }
  .customActive {
    color: #178ce6;
    border-left: 1px solid #178ce6;
    padding-left: 5px;
    transition: all 0.5s;
  }
</style>