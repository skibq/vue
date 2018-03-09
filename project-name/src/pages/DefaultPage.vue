<template>
    <main-layout>
      <h1 class="post__main-title">{{ siteInfo.title.rendered }}</h1>
      <div class="content container" v-html="siteInfo.content.rendered"></div>
    </main-layout>
</template>

<script>
  
  import MainLayout from '../layout/MainLayout'
  
  export default {
    components: {
      MainLayout
    },
    methods: {
      refreshSiteInfo () {
        console.log(this.$route.params.slug)
        this.$store.dispatch('refreshSiteInfo', {slug: this.$route.params.slug})
      }
    },
    computed: {
      siteInfo () {
        console.log(this.$store.state.siteInfo.filter(post => post.slug === this.$route.params.slug)[0])
        return this.$store.state.siteInfo.filter(post => post.slug === this.$route.params.slug)[0]
      }
    },
    created () {
      this.refreshSiteInfo()
    }
  }
</script>

<style scoped>
  .post__main-title {
    padding-top: 100px;
    padding-bottom: 150px;
    text-align: center;
  }
  
  a {
    color: #42b983;
  }
</style>