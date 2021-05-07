<template>
    <v-container>
        <div class="w-full bg-cover  bg-center min-h-50    ">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked" />
                <div class="carousel-item absolute opacity-0" style="height: 40vh;">
                    <div
                        class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center  object-cover object-center bg-cover bg-center"
                        style="background-image: url('https://2.bp.blogspot.com/-sxTqp90OFNY/VBAoyZ6V_MI/AAAAAAAAAZU/7_KKmv02dKA/s1600/3.jpg');"
                    >
                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <label
                    for="carousel-3"
                    class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto"
                >
                    ‹
                </label>
                <label
                    for="carousel-2"
                    class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto"
                >
                    ›
                </label>
                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" />
                <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height: 40vh;">
                    <div
                        class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center  object-cover object-center bg-cover bg-center"
                        style="background-image: url('https://2.bp.blogspot.com/-xC7_xPtKCCY/V9vr6k3HaAI/AAAAAAAAAvc/itneDJTG5iQroxWwIcxES8tRXJx6Ma07gCLcB/s1600/Foto%2BPemandangan%2BAir%2BTerjun%2B1.jpg');"
                    >
                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <label
                    for="carousel-1"
                    class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto"
                >
                    ‹
                </label>
                <label
                    for="carousel-3"
                    class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto"
                >
                    ›
                </label>
                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="" />
                <div class="carousel-item absolute opacity-0" style="height: 40vh;">
                    <div
                        class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center  object-cover object-center bg-cover bg-center"
                        style="background-image: url('https://aipontiverona.it/en/wp-content/uploads/sites/13/2018/05/Foto-Verona.jpg');"
                    >
                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <label
                    for="carousel-2"
                    class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto"
                >
                    ‹
                </label>
                <label
                    for="carousel-1"
                    class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto"
                >
                    ›
                </label>
                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                </ol>
            </div>
        </div>

   
        
        <!-- //////////////////////////////////cardd///////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class=" container m-auto">
   <div class="inline-flex flex jusfify-beetwen ">
        <div class="py-16 mt-8 overflow-hidden container m-auto ">
            <div class="container m-auto px-20 mx-30 " style="padding-left: 120px;" >
                <div
                    class="inline-block justify-between max-w-sm shadow-lg rounded-lg my-4 mx-10 transition duration-500 ease-in-out hover:bg-blue transform hover:-translate-y-1 hover:scale-110"
                     >
                    <div class="w-full relative h-full object-cover object-center bg-cover bg-center" style="width: 20rem; height: 20rem; background-image: url(https://wallpapercave.com/wp/wp1838743.jpg);">
                        <div class="flex items-end opacity-50 bg-blue left-0 absolute bottom-0 right-0">
                            <h1 class="mx-4 text-white bold font-semibold text-lg mt-8">{{titlee0}}</h1>

                            <div class="justify" v-if="!['login'].includes($route.login)">
                                <router-link
                                    :to="{
                            name: 'editcardd', 
                            params: { id: cardid0.id },
                            }"
                                >
                                    <button v-if="loggedIn" class="bg-white  hover:bg-gray-100 text-gray-800 font-semibold py-2 px-6 ml-12 border border-gray-400 rounded shadow">
                                        Edit <i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
                                    </button>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <div class="py-16 mt-8 overflow-hidden container m-auto ">
            <div class="container m-auto px-2 mx-30 " style="padding-left: 70px;" >
                <div
                    class="inline-block justify-between max-w-sm shadow-lg rounded-lg my-4 mx-10 transition duration-500 ease-in-out hover:bg-blue transform hover:-translate-y-1 hover:scale-110"
                     >
                    <div class="w-full relative h-full object-cover object-center bg-cover bg-center" style="width: 20rem;  height: 20rem; background-image: url(https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg);">
                        <div class="flex items-end opacity-50 bg-blue left-0 absolute bottom-0 right-0">
                            <h1 class="mx-4 text-white bold font-semibold text-lg mt-8">{{titlee1}}</h1>

                            <div class="justify" v-if="!['login'].includes($route.login)">
                                <router-link
                                    :to="{
                            name: 'editcardd', 
                            params: { id: cardid1.id },
                            }"
                                >
                                    <button v-if="loggedIn" class="bg-white  hover:bg-gray-100 text-gray-800 font-semibold py-2 px-6 ml-12 border border-gray-400 rounded shadow">
                                        Edit <i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
                                    </button>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
           <div class="py-16 mt-8 overflow-hidden container m-auto ">
            <div class="container m-auto px-2 mx-30 " style="padding-left: 20px;" >
                <div
                    class="inline-block justify-between max-w-sm shadow-lg rounded-lg my-4 mx-10 transition duration-500 ease-in-out hover:bg-blue transform hover:-translate-y-1 hover:scale-110"
                     >
                    <div class="w-full relative h-full object-cover object-center bg-cover bg-center" style="width: 20rem; height: 20rem; background-image: url(http://yesofcorsa.com/wp-content/uploads/2017/11/Students-Wallpaper-Background-1024x682.jpg);">
                        <div class="flex items-end opacity-50 bg-blue left-0 absolute bottom-0 right-0">
                            <h1 class="mx-4 text-white bold font-semibold text-lg mt-8">{{titlee2}}</h1>

                            <div class="justify" v-if="!['login'].includes($route.login)">
                                <router-link
                                    :to="{
                            name: 'editcardd', 
                            params: { id: cardid2.id },
                            }"
                                >
                                    <button v-if="loggedIn" class="bg-white  hover:bg-gray-100 text-gray-800 font-semibold py-2 px-6 ml-12 border border-gray-400 rounded shadow">
                                        Edit <i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
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




       
        <div class="py-0 bold text-left container m-auto   px-20 mx-50 mt-2 text-2xl text-lg leading-6 bold font-medium text-blue" style="padding-left: 190px;"><span class="underline ">Our</span><span class="hover:underline "> services</span></div>
           <div class="  container m-auto">
<div class="inline-flex flex jusfify-beetwen">
            <div class="py-0 flex justify items mt-2 overflow-hidden"  >
                <div class="container m-auto px-2 mx-30 " style="padding-left: 150px;" >
                    <div class="inline-block justify-between max-w-sm my-0 mx-0  ">
                        <div class="relative mt-4">
                            <!-- <h4 class="absolute flex items   justify  w-4 h-20  tracking-wide font-regular text-sm text-blue-500">
                                GETt
                            </h4> -->
                            <img class="pl-6 pb-0 w-15 absolute flex items mt-4 justify h-12" src="images/business-plan.png" />
                            <h5 class="pt-1 ml-24 text-lg leading-6 bold font-medium text-gray-900">{{name1}}</h5>
                            <div >
                                <p class="mt-1 ml-24  text-sm text-gray-500  "   >
                                    {{content1}}
                                </p>
                            </div>
                        </div>
                        <router-link
                            :to="{
                        name: 'editcontent', 
                        params: { id: card1.id },
                        }"
                        >
                        <!-- //per mouse mbi element shfaqet foto -->
                        <!-- v-on:mouseenter="toggleTooltip()" v-on:mouseleave="toggleTooltip()" -->
                            <button v-if="loggedIn" class="bg-white mt-2 ml-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow">Edit</button>
                        </router-link>
                    </div>
                </div>
            </div>
      <div class="py-0 flex justify items mt-2 overflow-hidden"  >
                <div class="container m-auto px-2 mx-30 " style="padding-left: 2px;" >
                    <div class="inline-block justify-between max-w-sm my-0 mx-0  ">
                        <div class="relative mt-4">
                            <!-- <h4 class="absolute flex items   justify  w-4 h-20  tracking-wide font-regular text-sm text-blue-500">
                                GETt
                            </h4> -->
                            <img class="pl-6 pb-0 w-15 absolute flex items mt-4 justify h-12" src="images/tax.png" />
                            <h5 class="pt-1 ml-24 text-lg leading-6 bold font-medium text-gray-900">{{name2}}</h5>
                            <div ref="btnReff" >
                                <p class="mt-1 ml-24  text-sm text-gray-500 "   >
                                    {{content2}}
                                </p>
                            </div>
                        </div>
                        <router-link
                            :to="{
                        name: 'editcontent', 
                        params: { id: card2.id },
                        }"
                        >
                            <button v-if="loggedIn" class="bg-white mt-2 ml-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow">Edit</button>
                        </router-link>
                    </div>
                </div>
            </div>
            
            <div class="py-0 flex justify items mt-2 overflow-hidden"  >
                <div class="container m-auto px-20 mx-30 " style="padding-left: 2px;" >
                    <div class="inline-block justify-between max-w-sm my-0 mx-0  " >
                        <div class="relative mt-4">
                            <!-- <h4 class="absolute flex items   justify  w-4 h-20  tracking-wide font-regular text-sm text-blue-500">
                                GETt
                            </h4> -->
                            <img class="pl-6 pb-0 w-15 absolute flex items mt-4 justify h-12" src="images/accumulator.png" />
                            <h5 class="pt-1 ml-24 text-lg leading-6 bold font-medium text-gray-900">{{name3}}</h5>
                            <div >
                                <p class="mt-1 ml-24  text-sm text-gray-500" >
                                    {{content3}}
                                </p>
                            </div>
                        </div>
                        <router-link
                            :to="{
                        name: 'editcontent', 
                        params: { id: card3.id },
                        }"
                        >
                            <button v-if="loggedIn" class="bg-white mt-2 ml-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow">Edit</button>
                        </router-link>
                    </div>
                </div>
            </div>

</div>

<div class=" flex inline-flex jusfity-beetwen">


              <div class="py-0 flex justify items mt-2 overflow-hidden"  >
                <div class="container m-auto px-2 mx-30 " style="padding-left: 150px;" >
                    <div class="inline-block justify-between max-w-sm my-0 mx-0  " >
                        <div class="relative mt-4">
                            <!-- <h4 class="absolute flex items   justify  w-4 h-20  tracking-wide font-regular text-sm text-blue-500">
                                GETt
                            </h4> -->
                            <img class="pl-6 pb-0 w-15 absolute flex items mt-4 justify h-12" src="images/checklist.png" />
                            <h5 class="pt-1 ml-24 text-lg leading-6 bold font-medium text-gray-900">{{name4}}</h5>
                            <div >
                                <p class="mt-1 ml-24  text-sm text-gray-500" >
                                    {{content4}}
                                </p>
                            </div>
                        </div>
                        <router-link
                            :to="{
                        name: 'editcontent', 
                        params: { id: card4.id },
                        }"
                        >
                            <button v-if="loggedIn" class="bg-white mt-2 ml-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow">Edit</button>
                        </router-link>
                    </div>
                </div>
            </div>
           
              <div class="py-0 flex justify items mt-2 overflow-hidden"  >
                <div class="container m-auto px-2 mx-30" style="padding-left: 2px;" >
                    <div class="inline-block justify-between max-w-sm my-0 mx-0  " >
                        <div class="relative mt-4">
                            <!-- <h4 class="absolute flex items   justify  w-4 h-20  tracking-wide font-regular text-sm text-blue-500">
                                GETt
                            </h4> -->
                            <img class="pl-6 pb-0 w-15 absolute flex items mt-4 justify h-12" src="images/retirement-plan.png" />
                            <h5 class="pt-1 ml-24 text-lg leading-6 bold font-medium text-gray-900">{{name5}}</h5>
                            <div >
                                <p class="mt-1 ml-24  text-sm text-gray-500" >
                                    {{content5}}
                                </p>
                            </div>
                        </div>
                        <router-link
                            :to="{
                        name: 'editcontent', 
                        params: { id: card5.id },
                        }"
                        >
                            <button v-if="loggedIn" class="bg-white mt-2 ml-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow">Edit</button>
                        </router-link>
                    </div>
                </div>
            </div>

             <div class="py-0 flex justify items mt-2 overflow-hidden"  >
                <div class="container m-auto px-2 mx-30" style="padding-left: 2px;" >
                    <div class="inline-block justify-between max-w-sm my-0 mx-0  " >
                        <div class="relative mt-4">
                            <!-- <h4 class="absolute flex items   justify  w-4 h-20  tracking-wide font-regular text-sm text-blue-500">
                                GETt
                            </h4> -->
                            <img class="pl-6 pb-0 w-15 absolute flex items mt-4 justify h-12" src="images/risk.png" />
                            <h5 class="pt-1 ml-24 text-lg leading-6 bold font-medium text-gray-900">{{name6}}</h5>
                            <div >
                                <p class="mt-1 ml-24  text-sm text-gray-500" >
                                    {{content6}}
                                </p>
                            </div>
                        </div>
                        <router-link
                            :to="{
                        name: 'editcontent', 
                        params: { id: card6.id },
                        }"
                        >
                            <button v-if="loggedIn" class="bg-white mt-2 ml-20 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow">Edit</button>
                        </router-link>
                    </div>
                </div>
            </div>
            

</div> 
</div>


 

<!-- 
        <div class="flex flex-wrap">
            <div class="w-full text-center ">
      
        <div>
            <div class="py-16 mt-6 overflow-hidden">
                <div class="container m-auto px-4 mx-40" style="padding-left: 40px;">
                    <div
                        class="inline-block justify-between max-w-sm shadow-lg rounded-lg my-4 mx-10 transition duration-500 ease-in-out hover:bg-blue transform hover:-translate-y-1 hover:scale-110"
                        style=""  >
                        <div class="w-full relative h-full object-cover object-center bg-repeat-round" style="width: 20rem; height: 20rem; background-image: url(https://tse3.mm.bing.net/th?id=OIP.1GMOlW0ZvW7APir85L-yywHaF7&pid=Api&P=0&w=218&h=175);">
                            <div class="flex items-end opacity-50 bg-blue left-0 absolute bottom-0 right-0">
                                <h1 class="mx-2 text-white bold font-semibold text-lg mt-2 font-bold">{{name1}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 </div>
        </div>
		</div> -->

                <!-- <div class="flex flex-wrap">
            <div class="w-full text-center "> -->
        <!-- <button  class="" type="button"> 
        test
        </button>  -->
        <!-- <div ref="tooltipReff" v-bind:class="{'hidden': !tooltipShow, 'inline': tooltipShow}" class=" ">
            <div class="py-16 mt-6 overflow-hidden">
                <div class="container m-auto px-4 mx-40" style="padding-left: 40px;">
                    <div
                        class="inline-block justify-between max-w-sm shadow-lg rounded-lg my-4 mx-10 transition duration-500 ease-in-out hover:bg-blue transform hover:-translate-y-1 hover:scale-110"
                        style=""  >
                        <div class="w-full relative h-full object-cover object-center bg-repeat-round" style="width: 20rem; height: 20rem; background-image: url(http://html5box.com/html5gallery/images/Wilderness_1024.jpg);">
                            <div class="flex items-end opacity-50 bg-blue left-0 absolute bottom-0 right-0">
                                <h1 class="mx-2 text-white bold font-semibold text-lg mt-2 font-bold">{{name2}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 </div>
        </div>
		</div> -->





		  <!-- <div class="flex flex-wrap">
    <div class="w-full text-center ">
      <button ref="btnRef" v-on:mouseenter="toggleTooltip()" v-on:mouseleave="toggleTooltip()" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
        left pink
      </button>
      <div ref="tooltipRef" v-bind:class="{'hidden': !tooltipShow, 'block': tooltipShow}" class="bg-pink-600 border-0 mr-3 block z-50 font-normal leading-normal text-sm max-w-xs text-left no-underline break-words ">
        <div>
          <div class="bg-pink-600 text-white opacity-75 font-semibold p-4 mb-0  border-b border-solid border-blueGray-100 uppercase ">
            pink tooltip title
          </div>
          <div class="text-white p-4">
            And here's some amazing content. It's very engaging. Right?
          </div>
        </div>
      </div>
    </div>
  </div> -->
        <!-- <p :style="{'text-decoration': decoration}">Hi!</p> -->

        <!-- <p :class="{underline: isUnderlined}">Hi!</p> -->

        <!-- <div>
    <span
      @mouseover="hover = true"
      @mouseleave="hover = false"
    >
      Hover me to show the message!
    </span>
    <span v-if="hover">underline</span>
  </div> -->



        <div class="py-16 bg-grayyy mt-10   ">
            <div class="m-auto container">
                <div class="lg:flex justify-between items-center" v-for="card in cards" v-bind:key="card.id">
                    <div class="lg:w-6/12 lg:p-0 p-7">
                        <h2 class="text-3xl font-semibold mr-10 ml-0 pl-60 text-gray-800 md:text-xl font-bold">{{card.cardname}}</h2>
                        
                        <p class="mt-2 mr-10 ml-0 pl-60 text-base text-gray-500 " >{{card.cardcontent}}</p>
                        <div class="px-6 py-4" v-if="!['login'].includes($route.login)">
                            <div class="flex" style="margin-left: 210px;">
                           
                            

                                
    <div id="app" class="app">
        <ul v-show-slide="featuresOpen" class="features  text-base">
 <li class="ml-2 mt-4">{{card.cardcontent}}</li>
  
        </ul>
 <button @click="toggleFeatures" class="toggle-features-2 mt-4 bg-white  hover:bg-gray-100 text-gray-800 font-semibold py-2 px-8 ml-20 border-gray-400  shadow-lg">{{ featuresOpen ? 'HIDE' : 'MORE' }}</button>
  </div>
     <router-link
                                    :to="{
                        name: 'editcard', 
                        params: { id: card.id },
                        }"
                                >
    <button v-if="loggedIn"  class="bg-white mr-6 hover:bg-gray-100 text-gray-800 font-semibold py-0 px-4 border border-gray-400 rounded shadow">
                                        Edit <i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
    </button>
                                </router-link>



                            </div>
                        </div>
                    </div>
                    <div class="lg:w-7/12 mr-0 z-4 shadow-2xl">
                        <img src="http://www.allison-gabbiano.it/public/foto/maxi/478-Madonna-di-Campiglio2.jpeg" />
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16  mt-2 container m-auto ">

<h1 class="uppercase bold text-3xl font-semibold mr-10 ml-0 pl-64 text-gray-800 md:text-xl font-bold">The Latest News</h1>


<!-- start -->
    <div class="container flex flex-col justify-center items-center mx-auto my-0 py-2"> 

            
            
          <!-- <a class="w-8 mr-1 mt-40 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-1">1</a> -->

        </div>



        <!-- Card -->
        <!-- <div class="bg-white -mt-28 shadow-md overflow-hidden">
            <div class="items-center justify-between py-20 bg-grayyy  px-10 bg-white shadow-2xl mx-auto text-center">
                
                <div class="px-4 -mt-6 ">
                  
                    <div class="text-center ">
                        <h1 class="font-normal text-3xl text-blue font-medium leading-loose my-3 w-full">News</h1>
                        <div class="w-full text-center">
                            <form action="#">
                                <div class="max-w-sm mx-auto p-1 pr-0 ">
                                            <p>Ipsum has bLorem Ipsm has bLorem Ipsum </p>
                                               <p>Ipsum has bLorem Ipsm has bLorem Ipsum </p>
                                                  <p>Ipsum has bLorem Ipsm has bLorem Ipsum </p>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end card -->

     <div class="flex flex-col items-center">
  <div class="flex flex-col items-center ">
    <div class="swiper flex overflow-x-scroll w-1/2 shadow border-2 p-8">
      <img class="w-full h-1/2 object-cover bg-gray-300 p-8" src="https://images.pexels.com/photos/1718337/pexels-photo-1718337.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
      <img class="w-full h-1/2 object-cover bg-gray-300 p-8" src="https://images.pexels.com/photos/373883/pexels-photo-373883.jpeg?cs=srgb&dl=pexels-burst-373883.jpg&fm=jpg" id="slide2">
      <img class="w-full h-1/2 object-cover bg-gray-300 p-8" src="https://images.pexels.com/photos/1154198/pexels-photo-1154198.jpeg?cs=srgb&dl=pexels-anderson-guerra-1154198.jpg&fm=jpg">
            <img class="w-full h-1/2 object-cover bg-gray-300 p-8" src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?cs=srgb&dl=pexels-lisa-1083822.jpg&fm=jpg">
                 
                        <img class="w-full h-1/2 object-cover bg-gray-300 p-8" src="https://images.pexels.com/photos/3067710/pexels-photo-3067710.jpeg?cs=srgb&dl=pexels-lucas-pezeta-3067710.jpg&fm=jpg">
    </div>
  </div>
  <div class="flex mt-4">
    <a href="#slide1" class="w-4 h-4 mx-1 bg-gray-400 rounded-full"></a>
    <a href="#slide2" class="w-4 h-4 mx-1 bg-gray-400 rounded-full"></a>
    <a href="#slide3" class="w-4 h-4 mx-1 bg-gray-400 rounded-full"></a>
  </div>
</div>




<div id="example">
  <carousel-3d :controls-visible="true" :clickable="false">
    <slide v-for="(slide, i) in slides" :index="i" :key="slide.id">
      <figure>
        <img src="https://placehold.it/360x270">
        <figcaption>
          The sky is the limit only for those who aren't afraid to fly!
                    The sky is the limit only for those who aren't afraid to fly!

        </figcaption>
      </figure>
    </slide>
  </carousel-3d>
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


import { createPopper } from "@popperjs/core";
    import axios from "axios";
    export default {
 
		 
        data() {
            return {
                  
			    test: "",
                title1: "",
                titlee0: "",
                titlee1: "",
                titlee2: "",
                contentt1: "",
                name1: "",
                name2: "",
                name3: "",
                name4: "",
                name5: "",
                name6: "",
                content1: "",
                content2: "",
                content3: "",
                content4: "",
                content5: "",
                content6: "",
                isAdmin: true,
                card: null,
                content: null,
                cards: [],
                contents: [],
                cardds: [],
                cardid0: [],
                cardid1: [],
                cardid2: [],
                card1: [],
                card2: [],
                card3: [],
                card4: [],
                card5: [],
                card6: [],
                hover: false,
                 featuresOpen: false,
				
  tooltipShow: false,
                //    decoration: 'underline'
                // isUnderlined: false
            };
        },
        computed: {
            loggedIn() {
                return this.$store.getters.loggedIn;
            },

            // filteredComments: function () {
            //     return this.data.filter((d) => {
            //         return d.full_name.toString().toLowerCase().match(this.search);
            //     });
            // },
        },

        created() {
            this.getCards();
            this.getContents();
            this.getCardds();
        },

        methods: {
             toggleFeatures () {
      this.featuresOpen = !this.featuresOpen
    },
			
    toggleTooltip: function(){
      if(this.tooltipShow){
        this.tooltipShow = false;
      } else {
        this.tooltipShow = true;
        createPopper(this.$refs.btnRef, this.$refs.tooltipRef, {
          placement: "top"
        });
      }
	},

    //  toggleTooltipp: function(){
    //   if(this.tooltipShow){
    //     this.tooltipShow = false;
    //   } else {
    //     this.tooltipShow = true;
    //     createPopper(this.$refs.btnReff, this.$refs.tooltipReff, {
    //       placement: "left"
    //     });
    //   }
	// },
		    getCards() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                axios.get("api/card").then((response) => {
                    this.cards = response.data;
                });
            },
            getCard() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                axios.get(`/api/editcard/${this.card}`).then((response) => {
                    this.data = response.data;
                });
            },

            getContents() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                axios.get("api/content").then((response) => {
                    this.card1 = response.data[0];
                    this.card2 = response.data[1];
                    this.card3 = response.data[2];
                    this.card4 = response.data[3];
                    this.card5 = response.data[4];
                    this.card6 = response.data[5];

                    this.name1 = this.card1.name
                    this.content1 = this.card1.content
                    this.name2 = this.card2.name
                    this.content2 = this.card2.content
                    this.name3 = this.card3.name
                    this.content3 = this.card3.content
                    this.name4 = this.card4.name
                    this.content4 = this.card4.content
                    this.name5 = this.card5.name
                    this.content5 = this.card5.content
                    this.name6 = this.card6.name
                    this.content6 = this.card6.content


                    console.log(this.name1);
                });
            },

            getContent() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                axios.get(`/api/editcontent/${this.content}`).then((response) => {
                    this.data = response.data;
                });
            },

            getCardds() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                axios.get("api/cardd").then((response) => {

                    this.cardd0 = response.data[0];
                    this.titlee0 = this.cardd0.title

                    this.cardd1 = response.data[1];
                    this.titlee1 = this.cardd1.title

                    this.cardd2 = response.data[2];
                    this.titlee2 = this.cardd2.title

                    this.cardid0 = response.data[0];
                    this.cardid1 = response.data[1];
                    this.cardid2= response.data[2];


                    // console.log(this.titlee1);

                    // this.cardds = response.data;
                    // this.card1 = response.data[0];
                    // this.title1 = this.card1.title;
                    // this.contentt1 = this.card1.content;

                });
            },
            getCardd() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                axios.get(`/api/editcardd/${this.cardd}`).then((response) => {
                    this.data = response.data;
                });
            },

            logout() {
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("access_token");

                this.$store.dispatch("destroyToken").then(() => {
                    this.$router.push("/login").catch(() => {});
                });
            },
            
        },
    };
</script>




<style>
    .work-sans {
        font-family: "Work Sans", sans-serif;
    }

    #menu-toggle:checked + #menu {
        display: block;
    }

    .hover\:grow {
        transition: all 0.3s;
        transform: scale(1);
    }

    .hover\:grow:hover {
        transform: scale(1.02);
    }

    .carousel-open:checked + .carousel-item {
        position: static;
        opacity: 100;
    }

    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked ~ .control-1,
    #carousel-2:checked ~ .control-2,
    #carousel-3:checked ~ .control-3 {
        display: block;
    }

    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #000;
        /*Set to match the Tailwind colour you want the active one to be */
    }

      .swiper {
    scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
  }
  .swiper > img {
    scroll-snap-align: start;
  }

  .carousel-3d-container figure {
  margin:0;
}

.carousel-3d-container figcaption {
  position: absolute;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  bottom: 0;
  position: absolute;
  bottom: 0;
  padding: 15px;
  font-size: 12px;
  min-width: 100%;
  box-sizing: border-box;
}
</style>
