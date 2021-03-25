<template>
  <div>
      <!-- component -->
<!-- This is an example component -->
<div class="h-screen font-sans login bg-cover">
<div class=" mx-auto w-full h-full flex flex-1 justify-center items-center bg-gray-700 border-t-3 border-black">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form @submit.prevent="login" class="max-w-sm m-4 p-10 bg-gray-100 rounded shadow-xl">
            <p class="text-black font-medium text-center text-lg">LOGIN</p>
              <div class="">
                <label class="block text-sm text-black" for="email">E-mail</label>
                <input v-model="email" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none border border-black  focus:bg-white" type="email" id="email"  placeholder="Your Email" aria-label="email" required>
              </div>
              <div class="mt-2">
                <label class="block  text-sm text-black">Password</label>
                 <input class="w-full px-5 py-1 text-gray-700  border border-black bg-gray-300 rounded focus:outline-none focus:bg-white"
                  v-model="password" type="password" id="password" placeholder="Write Password" arial-label="password" required>
              </div>

              <div v-if="errors" class="py-2">
                <span class="text-red-500 font-semibold">
                    {{ errors }}
                </span>
            </div>

              <div class="mt-4 items-center flex justify-between">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-600 hover:bg-gray-800 rounded"
                  type="submit">Login</button>
                <!-- <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                  href="#">Forgot password ?</a> -->
              </div>
              <!-- <div class="text-center">
                <a class="inline-block right-0 align-baseline font-light text-sm text-500 hover:text-red-400">
                    Create an account
                </a>
              </div> -->
        </form>

      </div>
    </div>
  </div>
</div>
  </div>
</template>

<script>
export default {

  data(){
    return {
      email: '',
      password: '',
      errors: '',
    }
  },
  methods: {
    login() {
      // console.log(`${this.email} ${this.password}`)
      this.$store.dispatch("login", {
          email: this.email,
          password: this.password,
        })
        .then((response) => {
        // console.log(response);
        this.errors = response.data.message;
        if (!this.errors) { 
            // console.log(this.$route.query.redirect);
            if (!this.$route.query.redirect) {
            this.$router.push("/home");
            } else {
            this.$router.push(this.$route.query.redirect);
            }
        }
        })
        .catch((error) => {
            console.log(error);
            this.errors = error.response.data.message
        });
    }
  }

}
</script>

<style>
  .login{
  /*
    background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
  */
  background-color: gray ;
  /* background-repeat: no-repeat;
  background-size: cover; */
}
</style>