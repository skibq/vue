<template>
    <main-layout>
      <h1 class="h1 h1--main-page">{{globalInfo.name}}</h1>
      <h2 class="h2">{{globalInfo.description}}</h2>
      <listing class="container"></listing>
    </main-layout>
</template>

<script>
  
  import MainLayout from '../layout/MainLayout'
  import Listing from '../components/listing'
  
  export default {
    components: {
      MainLayout,
      Listing
    },
    methods: {
      refreshGlobalInfo () {
        console.log('refreshinh global data')
        this.$store.dispatch('refreshGlobalInfo')
      }
    },
    computed: {
      globalInfo () {
        return this.$store.state.globalInfo
      }
    },
    created () {
      this.refreshGlobalInfo()
    }
  }
</script>

<style scoped>
  .h1 {
    padding-top: 100px;
    text-align: center;
  }
  .h2 {
    text-align: center;
  }
  
  a {
    color: #42b983;
  }
</style>