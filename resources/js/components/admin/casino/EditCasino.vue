<template>
   <v-container>
  <v-form
    ref="form"
  >
    <v-text-field
      dark
      :counter="35"
      label="Name"
      v-model="name"
      required
    ></v-text-field>

    <v-text-field
      dark
      label="Bonus"
      v-model="bonus"
      required
    ></v-text-field>

    <v-text-field
      dark
      v-model="link"
      label="Affiliate Link"
      required
    ></v-text-field>

    <v-row class="mb-2">
     <font-awesome-icon
      icon="camera" 
      class="white--text mt-4 ml-2" 
      style="font-size:30px;margin-right:-20px"
     />
     <v-file-input label="Image" show-size dark v-model="image"></v-file-input>
    </v-row>    

    <v-btn
      color="success"
      class="mr-4"
      @click="editCasino()"
    >
      Submit
    </v-btn>
  </v-form>
 </v-container>  
</template>

<script>
export default {
    props: ['casino'],
    data: function() {
        return {
            name: this.casino.name,
            bonus: this.casino.bonus,
            link: this.casino.affiliate_link,
            image: this.casino.image
        }
    },
    methods: {
        editCasino() {
            const FormData = require('form-data');
            const formData = new FormData();

            this.name && formData.append('name', this.name);
            this.bonus && formData.append('bonus', this.bonus);
            this.link && formData.append('link', this.link);
            this.image && formData.append('image', this.image);
            axios.post('http://localhost:8000/api/edit/casino/' + this.casino.id, formData).then(response => {
                if(response.status >= 200 && response.status < 300){
                    this.$router.push('casinos')
                }
            })
        }
    }
}
</script>

<style>

</style>