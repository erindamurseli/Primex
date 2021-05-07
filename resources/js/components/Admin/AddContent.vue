<template>
	<section class="h-screen  py-5 bg-gray-100">
		<div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
			<div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-gray-700 rounded-t mt-2">
				<div class="max-w-sm mx-auto md:w-full md:mx-0">
					<div class="inline-flex items-center space-x-4">
						<h1 class="text-gray-800"> SHTO Content</h1>
					</div>
				</div>
			</div>
			<div class="bg-white space-y-6">
				<hr />
				<div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-800 items-center">
					<h2 class="md:w-1/3 mx-auto max-w-sm">Shto kontent</h2>
					<div class="md:w-2/3 mx-auto max-w-sm space-y-5">
						<div>
							<label class="text-sm text-gray-800">Titull</label>
							<div class="w-full inline-flex border">
								<input type="text" v-model="name" class="w-full focus:outline-none focus:text-gray-800 p-2" placeholder="Content" />
							</div>
						</div>
						<div>
							<label class="text-sm text-gray-800">Koment</label>
							<div class="md:inline-flex w-full    text-gray-500 items-center">
								<div class="w-full md:inline-flex  mb-2 mt-2">
									<textarea class="border   leading-normal  w-11/12 h-20  placeholder-gray-400 focus:outline-none focus:bg-white" v-model="content" name="body" placeholder='Shkruaj një koment'></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr />
			</div>
			<hr />
			<div class="md:w-3/12 text-center md:pl-6">
				<button @click="addContent()" class=" inline-flex text-white w-full mx-auto max-w-sm rounded-md text-center bg-gray-700 py-2 px-14 items-center focus:outline-none md:float-left my-3">Ruaj</button>
			</div>
			<br>
			<div class="w-full pb-4 text-right text-gray-500">
				<router-link to="/content">
					<button class="inline-flex items-center focus:outline-none mr-4">Anulo</button>
				</router-link>
			</div>
		</div>
		<br>
		<br>
	</section>
</template>
<script>
import axios from "axios";
export default {

      data() 
      {
          return {
               name: "",
               content:"",
          }
      },


      methods: {

      addContent() 
      {
        // axios.defaults.headers.common["Authorization"] =
        //   "Bearer " + localStorage.getItem("access_token");

        axios
        .post('api/addcontent', 
              {
                   name: this.name,
                   content: this.content,
               
                // comment: this.comment
              })
        .then((response) => {
                  alert("Content u ruajt me sukses!");
                  this.$router.push('/content');
              })

        .catch((error) => {
                    // console.log(error);
                   this.errors = error.response.data.errors;
              })
      }, 
    }
}
</script>