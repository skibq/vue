<template>
  <div class="listing">
    <div class="posts_container row">
      <div v-for="post in listing" class="post col-md-4" :data-id="post.id">
        <p class="post__date">{{post.date | format_date}}</p>
        <p class="post__authors">
          <router-link v-for="author in post._embedded.author" class="post_author" :to="'autor/'+author.slug" :key="author.slug">
            {{ author.name }}
          </router-link>
        </p>
        <h4 class="post__title">
          <router-link class="post__title-link" :to="post.slug">
            {{post.title.rendered}}
          </router-link>
        </h4>
        <p class="post__description">{{ post.excerpt.rendered | no_html_tags | sub_str(300) }}</p>
      </div>
    </div>
  </div>
</template>
 

<script>
  export default {
    methods: {
      refreshListing () {
        console.log('refreshinh posts')
        this.$store.dispatch('refreshListing')
      }
    },
    computed: {
      listing () {
        return this.$store.state.listing
      }
    },
    created () {
      this.refreshListing()
    }
  }
</script>

<style scoped>
  .listing {
    margin-top: 120px;
    margin-bottom: 80px;
  }
  .post {
    text-align: left;
    margin-bottom: 20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    box-sizing: border-box;
  }
  .post:hover {
    transform: scale(1.02);
    transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;
    background-color: #fff;
    box-shadow: 0px 0px 20px #dedede;
  }
  .listing__container {
    
  }
  .post__date {
    font-weight: 600;
    font-size: 14px;
  }
  .post__author {
    
  }
  .post__title {
    margin-bottom: 40px;
  }
  post__description {
    
  }
</style>












