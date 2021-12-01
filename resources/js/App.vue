<template>
  <v-app style="height:100vh;">
    <AdminNavigator v-if="this.$store.state.currentUser.loggedIn"/>
    <ClientNavigator v-else/>
    <router-view></router-view>
  </v-app>   

</template>

<script> 
import AdminNavigator from './components/admin/AdminNavigator.vue' 
import ClientNavigator from './components/client/ClientNavigator.vue' 

export default {
  components: {  
    AdminNavigator,
    ClientNavigator
  },
  created() {
    //  This header would be required here in the main component for axios to be used everytime it's being called in this application
    axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("token")
    this.$store.dispatch('currentUser/getCurrentUser')
  }
}
</script>

<style>

</style>
