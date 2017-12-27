<template>
    <main-layout>
      <h1>{{blog_title}}</h1>
      <h2>{{blog_description}}</h2>
      <h3>{{title}}</h3>
    </main-layout>
</template>

<script>
  import MainLayout from '../layout/MainLayout'
  import axios from 'axios'
  import Config from '../config'
  
    
  export default {
    data () {
      return {
        blog_title: (this.blog_title === undefined ? 'placeholder' : this.blog_title),
        blog_description: ''
      }
    },
    components: {
      MainLayout
    },
    mounted () {
      axios.get(Config.ajax_url)
        .then(response => {
          this.blog_title = response.data.name
          this.blog_description = response.data.description
        })
        .catch(response => {
          console.log('ajax call error')
        })
    },
    computed: {
      title () {
        return store.state.title
      }
      
    }
  }
</script>

<style scoped>
  h1,
  h2 {
    font-weight: normal;
    text-align: center;
  }
  
  a {
    color: #42b983;
  }
</style>