<template>
    <main-layout>
      <h1>Skontaktuj się z nami!</h1>
      <h2>tel.: {{tel}}</h2>
      <h3>{{email}}</h3>
      <router-link to="/">Strona główna</router-link>
    </main-layout>
</template>

<script>
  import MainLayout from '../layout/MainLayout'
  export default {
    name: 'Contact',
    data () {
      return {
        email: 'skiba.kontakt@gmail.com',
        tel: '880-097-830'
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