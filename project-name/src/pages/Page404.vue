<template>
  <main-layout>
    <h1>Error 404</h1>
    <h2>Page not found</h2>
    <router-link to="/"><h3>Go back to home</h3></router-link>
  </main-layout>
</template>

<script>
  import MainLayout from '../layout/MainLayout'
  export default {
    name: 'Page404',
    data () {
      return {
        msg: 'Error 404'
      }
    },
    components: {
      MainLayout
    }
  }
</script>

<style scoped>
  h1,
  h2,
  h3 {
    text-align: center;
    font-weight: normal;
    font-family: sans-serif;
  }
  
  a {
    color: #42b983;
  }
</style>