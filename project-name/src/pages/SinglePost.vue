<template>
    <main-layout>
      <h1 class="h1 h1--main-page">{{singlePost.name}}</h1>
      <h2 class="h2">{{singlePost.description}}</h2>
    </main-layout>
</template>

<script>
  
  import MainLayout from '../layout/MainLayout'
  
  export default {
    components: {
      MainLayout,
    },
    methods: {
      refreshSinglePost () {
        console.log('refreshin single post')
        this.$store.dispatch('refreshSinglePost')
      }
    },
    computed: {
      singlePost () {
        return this.$store.state.post
      }
    },
    created () {
      this.refreshSinglePost()
    }
  }
</script>

<style lang="scss">
@import 'node_modules/bootstrap/scss/bootstrap2.scss';
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