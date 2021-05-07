<template>
	<v-container>

    <div class="w-full bg-cover bg-center" style="height:50rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
	<div class="flex items-center justify-center h-full w-full bg-blue bg-opacity-30">
		<div class="text-center">
		
		
		</div>
			<div class="container flex flex-col justify-center items-center mx-auto my-0 py-0" v-for="contact in contacts" v-bind:key="contact.id">

			<!-- Card -->
			<div class="container justify-center px-80 -mt-50  my-0 py-0">
				<div class="items-center justify-between py-10 px-6 pt-0 bg-white bg-opacity-70 shadow-2xl rounded-lg mx-auto  text-center">
					<div class="px-10 -mt-6">
						<div class="text-right">
							<!-- <h1 class="font-serif text-3xl text-grey-800 font-medium leading-loose my-3 w-30">CONTACT
                           </h1> -->
							<h2 class="font-normal text-xl font-medium text-blackk  leading-loose my-9 pt-0 w-full">PRIMEX | CONTACT
                           </h2>
			</div>
			<div  class="mt-0 pb-6">
            <div class="text-left">
                          	<h2 class="mt-2 text-3xl font-medium text-blackk leading-loose my-4 pt-0 w-full">KONTAKT
                           </h2>
						</div>

               <div class="flex mt-2 py-3  pl-9 mr-60 ">

             <div>
								<img class="inline-block w-auto pt-3 sm:h-12 " src="images/call.png">
        
                </div>
                  <div class=" ml-11 text-2xl pt-2">
             <p>Telefon:</p>
              <!-- <p>Telefon: +49 5231 964009-0</p> -->
                </div>

                <div class="ml-4 font-medium text-2xl pt-2">
             <p > {{contact.phonenumber}}</p>
              <!-- <p>Telefon: +49 5231 964009-0</p> -->
                </div>
               </div>

               
               
                
          
             
             <div  class="flex py-3  pl-9 mr-60 ">
               <div>
								<img class="inline-block w-auto pt-3 sm:h-12" src="images/mail.png">
                </div>
                    <div class=" ml-11 text-2xl pt-2">
             <p>E-mail:</p>
            
                </div>

                 <div class="ml-8  font-medium  text-2xl  pt-2">
             <p>{{contact.email}}</p>
             
                </div>
                  <!-- <div class=" text-justify ml-10"> {{contact.address}}</div> -->
             </div>

         
          <div  class="flex py-3  pl-9 mr-60  ">
               <div>
          	<img class="inline-block w-auto pt-3 sm:h-12" src="images/location.png">
                </div>
                        <div class=" ml-11 text-2xl pt-2">
             <p>Address:</p>
         
                </div>
                    <div class=" ml-4 font-medium   text-2xl  pt-2">
           
             <p>{{contact.address}}</p>
              
             <p>{{contact.address2}}</p>
           
              
             
                </div>
          </div>

          
						
						
             <div  class="flex py-3  pl-9 mr-60  ">
               <div>
								<img class="inline-block w-auto pt-3 sm:h-12" src="images/globe.png">
                    </div>
                            <div class=" ml-11 text-2xl pt-2">
             <p>E-mail:</p>
         
                </div>
                    <div class=" ml-8 font-medium  text-2xl  pt-2">
                      <p>{{contact.internet}}</p>
             <!-- <p>Internet:www.unirez.de</p> -->
             
                </div>
          </div>

  <div class="flex mt-8 ml-8">
                    <router-link 
                      :to="{
                      name: 'editcontact', 
                      params: { id: contact.id },
                      }" >
                    <button 
                    v-if="loggedIn"
                      class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-6 border border-gray-400 rounded shadow">   Edit  <i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
                      </button>
                    </router-link>    
                  </div>

          </div>
						</div>
					</div>
				</div>

     


			</div>
	</div>
</div>

	

      

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
            test:"",
            show :true,
            contact: null,
            contacts:[],
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
            this.getContacts();
             ;
      },
        
      methods: {

        getContacts(){ 
          axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("access_token");
    
          axios
          .get('api/contact')
          .then((response) => {
            this.contacts = response.data;
            console.log(response.data);
          });
        },
        getContact() {
          axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("access_token");
                
          axios.get(`/api/editcontact/${this.contact}`)
              .then((response) => {
                this.data = response.data;
      });
        }, 
    }

}
</script>