<template>
	<div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out mt-10">
		<div class="mt-10 mb-4 flex items-center justify-between"></div>
		<div>
			<h1 class="text-center font-light text-gray-500 text-2xl py-3">CONTENT</h1>
			<!-- Tabela -->
			<div>
				<div class="mx-auto container w-4/5 mt-10">
			
		     	</div>

				<div class="flex justify-center py-4 font-semibold border mt-10">
					<div class="align-middle inline-block w-4/5 overflow-hidden border border-gray-300">
						<table class="w-full leading-normal border bg-white">
							<thead class="bg-gray-700 text-white">
								<tr>
									<th class="w-1/10 text-left py-2 px-2 uppercase font-semibold text-xs">id</th>
									<th class="w-1/4  text-left py-2 px-2 uppercase font-semibold text-xs">ContactName</th>
									<th class="w-1/4  text-left py-2 px-2 uppercase font-semibold text-xs">contactContent</th>
								
								</tr>
							</thead>
							<tbody class="text-gray-700">
								<tr class="border border-b" v-for="contact in contacts" v-bind:key="contact.id">
									<td class="border text-left py-1 px-2">{{ contact.id }}</td>
									<td class="border text-left py-1 px-2">{{contact.email }}</td>
							    	<td class="border text-left py-1 px-2">{{ contact.address }}</td>
									<td class="border text-left py-1 px-2">{{ contact.phonenumber }}</td>
										<td class="border text-left py-1 px-2">{{ contact.internet }}</td>
												<td class="border text-left py-1 px-2">{{ contact.address2 }}</td>
							     	<td class="border text-left py-1 px-2">
										<div class="flex">
											<router-link :to="{
												name: 'editcontact', 
												params: { id: contact.id },
												}">
												<button class="">Edit	<i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
												</button>
											</router-link>
											<!-- <span class="ml-2">
												<button @click="deleteAbout(content.id)">Delete
													<i class="fas ml-3 fa-trash-alt text-red-500 text-lg hover:text-red-300"></i>
												</button>
											</span> -->
										</div>
									</td>
								</tr>
								<!-- <div class="md:w-3/12 text-center md:pl-6"> -->
								<!-- <button @click="updateContent(content.id , content.content_id, content.month)" class=" inline-flex text-white w-full mx-auto max-w-sm rounded-md text-center bg-gray-700 py-2 px-14 items-center focus:outline-none md:float-left my-3">
          Save
        </button> -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
    import axios from "axios";

    export default {
       
        data() {
            return{
              contacts:[],
            }
        },
		// computed:{
		// 	filteredComments: function () 
		// 	{
		// 		return this.data.filter(d => 
		// 		{
		// 			return d.full_name.toString().toLowerCase().match(this.search);
		// 		});
		// 	},
		// }, 
        created() {
            this.getContacts();
            // this.getComments();
          
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
                
			axios.get(`/api/contact/${this.contacts}`)
			     .then((response) => {
				  this.data = response.data;
			});
        },
//         	deleteContent(id)
// 		{
// 			if(confirm("Are you sure you want to delete this Salary?"))
// 			{
// 				axios.defaults.headers.common["Authorization"] =
// 					"Bearer " + localStorage.getItem("access_token");
// 				axios
// 				.delete(`api/deletecontent/${id}`)
// 				.then(() => {
// 				})
// 				.finally(() => {
// 					this.getContent();
// 				})
// 			}
//   },
        
    }
    }
</script>

<style>

</style>