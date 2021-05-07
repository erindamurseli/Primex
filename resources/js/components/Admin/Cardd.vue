<template>
	<div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out mt-10">
		<div class="mt-10 mb-4 flex items-center justify-between"></div>
		<div>
			<h1 class="text-center font-light text-gray-500 text-2xl py-3">Cardd</h1>
			<!-- Tabela -->
			<div>
				<div class="mx-auto container w-4/5 mt-10">
					<!-- Add Butoni -->
					<router-link to="/addcardd">
						<button class="bg-green-500 text-white font-bold py-1 px-3 border-b-2 hover:border-b-2 hover:border-t-2 border-green-600 hover:border-blue rounded-xl mt-5 mr-5">AddContent	<i class="fas fa-plus"></i>
						</button>
					</router-link>
				</div>
				<div class="flex justify-center py-4 font-semibold border mt-10">
					<div class="align-middle inline-block w-4/5 overflow-hidden border border-gray-300">
						<table class="w-full leading-normal border bg-white">
							<thead class="bg-gray-700 text-white">
								<tr>
									<th class="w-1/10 text-left py-2 px-2 uppercase font-semibold text-xs">id</th>
									<th class="w-1/4  text-left py-2 px-2 uppercase font-semibold text-xs">CarddContent</th>
									<th class="w-1/4  text-left py-2 px-2 uppercase font-semibold text-xs">CarddTitle</th>
								</tr>
							</thead>
							<tbody class="text-gray-700">
								<tr class="border border-b" v-for="cardd in cardds" v-bind:key="cardd.id">
								<td class="border text-left py-1 px-2">{{ cardd.id }}</td>
									<td class="border text-left py-1 px-2">{{ cardd.title }}</td>
									<td class="border text-left py-1 px-2">{{ cardd.content }}</td>
									<div class="flex">
										<router-link :to="{
												name: 'editcardd', 
												params: { id: cardd.id },
												}">
											<button class="">Edit	<i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
											</button>
										</router-link>
										<!-- <span class="ml-2">
												<button @click="delete1Card(card.id)">Delete
													<i class="fas ml-3 fa-trash-alt text-red-500 text-lg hover:text-red-300"></i>
												</button>
											</span> -->
									</div>
								</tr>
					
			
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
                cardds:[],
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
            this.getCardds();
            // this.getComments();
          
        },
        methods: {
            getCardds(){ 
			axios.defaults.headers.common["Authorization"] =
				"Bearer " + localStorage.getItem("access_token");
		
			axios
			.get('api/cardd')
			.then((response) => {
				this.cardds = response.data;
				console.log(response.data);
			});
        },
        getCardd() {
			axios.defaults.headers.common["Authorization"] =
                "Bearer " + localStorage.getItem("access_token");
                
			axios.get(`/api/cardd/${this.cardds}`)
			     .then((response) => {
				  this.data = response.data;
			});
        },
        	deleteCardd(id)
		{
			if(confirm("Are you sure you want to delete this Salary?"))
			{
				axios.defaults.headers.common["Authorization"] =
					"Bearer " + localStorage.getItem("access_token");
				axios
				.delete(`api/deletecardd/${id}`)
				.then(() => {
				})
				.finally(() => {
				 this.getCardd();
				})
			}
  },
        
    }
    }
</script>

<style>

</style>