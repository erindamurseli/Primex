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
									<th class="w-1/4  text-left py-2 px-2 uppercase font-semibold text-xs">AboutName</th>
									<th class="w-1/4  text-left py-2 px-2 uppercase font-semibold text-xs">AboutContent</th>
								</tr>
							</thead>
							<tbody class="text-gray-700">
								<tr class="border border-b" v-for="about in abouts" v-bind:key="about.id">
						
									<td class="border text-left py-1 px-2">{{ about.id }}</td>
									<td class="border text-left py-1 px-2">{{ about.title }}</td>
							
									<td class="border text-left py-1 px-2">{{ about.content }}</td>
								
									<td class="border text-left py-1 px-2">
										<div class="flex">
											<router-link :to="{
												name: 'editabout', 
												params: { id: about.id },
												}">
												<button class="">Edit	<i class="fas fa-edit text-gray-700 text-lg hover:text-gray-500"></i>
												</button>
											</router-link>
										</div>
									</td>
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
                abouts:[],
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
            this.getAbouts();
         // this.getComments();
          
        },
        methods: {
            getaAbouts(){ 
			axios.defaults.headers.common["Authorization"] =
				"Bearer " + localStorage.getItem("access_token");
		
			axios
			.get('api/about')
			.then((response) => {
				this.abouts = response.data;
				console.log(response.data);
			});
        },
        getAbout() {
			axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("access_token");
                
			axios.get(`/api/about/${this.abouts}`)
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