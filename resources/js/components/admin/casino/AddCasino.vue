<template>
  <v-container fluid fill-height>
    <v-main class="mt-1" align-center justify-center>
      <h2 class="center">Add New Casino</h2>
      <v-form
        ref="form"
      >
        <v-text-field
          :counter="35"
          label="Name"
          v-model="name"
          required
        ></v-text-field>

        <v-text-field
          label="Bonus"
          v-model="bonus"
          required
        ></v-text-field>

        <v-text-field
          v-model="link"
          label="Affiliate Link"
          required
        ></v-text-field>

      <v-textarea
          counter
          label="Description"
          v-model="description"      
        ></v-textarea>

        <v-row class="mb-2">
        <font-awesome-icon
          icon="camera" 
          class="mt-4 ml-2" 
          style="font-size:30px;margin-right:-20px"
        />
        <v-file-input label="Image" show-size v-model="image"></v-file-input>
        </v-row>    

        <v-btn
          color="success"
          class="mr-4"
          @click="addCasino()"
        >
          Submit
        </v-btn>
      </v-form>
    </v-main>
  </v-container>  
</template>

<script>
 export default {
    data() {
        return {
            name: '',
            bonus: null,
            link: '',
            image: null,
            description: ''
        }
    },
    methods: {
        addCasino() {
            const FormData = require('form-data');
            const formData = new FormData();

            formData.append('name', this.name);
            formData.append('bonus', this.bonus);
            formData.append('link', this.link);
            formData.append('image', this.image);
            formData.append('description', this.description);

            axios.post('/api/casino', formData).then(response => {
                if(response.status >= 200 && response.status < 300){
                  this.$router.push('casinos')
                  this.$toaster.success('A new Casino has been added successfully!')
                }
            }).catch((errors) => console.log(errors))
        }
    }
 }
</script>