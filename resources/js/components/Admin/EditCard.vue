<template>
	<section class="h-screen  py-5 bg-gray-100">
		<div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
			<div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-gray-700 rounded-t">
				<div class="max-w-sm mx-auto md:w-full md:mx-0">
					<div class="inline-flex items-center space-x-4">
						<h1 class="text-gray-800"> EDIT Card</h1>
					</div>
				</div>
			</div>
			<div class="bg-white space-y-6">
				<hr />
				<div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-800 items-center">
					<div class="md:w-2/3 mx-auto max-w-sm space-y-5">
						<div>
							<label class="text-sm text-gray-800">Edit Contenttt</label>
							<div class="md:inline-flex w-full    text-gray-500 items-center">
								<div class="w-full md:inline-flex px-2 mb-2 mt-2">
									<textarea class="border  leading-normal resize-none w-full h-20 py-2 px-3  placeholder-gray-400 focus:outline-none focus:bg-white" v-model="card.cardcontent" name="body" placeholder='Type a comment'></textarea>
								</div>
							</div>
						</div>
						<div>
							<label class="text-sm text-gray-800">Edit Title Content</label>
							<div class="md:inline-flex w-full    text-gray-500 items-center">
								<div class="w-full md:inline-flex px-2 mb-2 mt-2">
									<textarea class="border  leading-normal resize-none w-full h-20 py-2 px-3  placeholder-gray-400 focus:outline-none focus:bg-white" v-model="card.cardname" name="body" placeholder='Type a comment'></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr />
			</div>
			<hr />
			<div class="md:w-3/12 text-center md:pl-6">
				<button @click="updateCard(card.id)" class=" inline-flex text-black w-full mx-auto max-w-sm rounded-md text-center bg-gray-700 py-2 px-14 items-center focus:outline-none md:float-left my-3">Save</button>
			</div>
			<br>
			<div class="w-full pb-4 text-right text-gray-500">
				<router-link to="/home">
					<button class="inline-flex items-center focus:outline-none mr-4">Cancel</button>
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
  data(){
    return{
      card:{},
      id:this.$route.params.id,
      errors: []
    }
  },

  created(){
    this.getCard()
  },

  methods:{
    getCard() {
    //   axios.defaults.headers.content["Authorization"] =
    //     "Bearer " + localStorage.getItem("access_token");
        
      axios.get(`/api/editcard/${this.id}`)
          .then((response) => 
          {
            this.card = response.data;
            console.log(response.data);

          });
    },
      updateCard() 
      {
        // axios.defaults.headers.content["Authorization"] =
        //   "Bearer " + localStorage.getItem("access_token");
          
        axios
        .put(`/api/editcard/${this.id}`, 
        {
          
            cardname: this.card.cardname,
            cardcontent: this.card.cardcontent,
            
        })
        .then((response) => 
        {
          alert("Permbajtja u ndryshua me sukses!");
          this.$router.push('/home');
        })
        .catch((error) => 
        {
          this.errors = error.response.data.errors;
        })
      }
  }
}
</script>