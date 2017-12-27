<template>
  <div class="header">
    <div class="logo">
      <router-link to="/">
        <img src="" class="header-logo" alt="LOGO Placeholder">
      </router-link>
    </div>
      <div class="menu">
        <router-link class="menu-item" v-for="item in menu" :to="item.url" :key="item.title">
          {{item.title}}
        </router-link> 
      </div>
  </div>
</template>
 

<script>
  import axios from 'axios'
  import Config from '../config'
  export default {
    data () {
      return {
        menu: this.getMenu()
      }
    },
    methods: {
      getMenu: function () {
        axios.get(`${Config.ajax_url}custom-routes/menu/`)
        .then(response => {
          this.menu = response.data
        })
        .catch(response => {
          console.log('ajax call error header.vue')
        })
      }
    }
  }
</script>

<style scoped>
  
  .header {
    width: 100%;
    color: #000;
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left: 40px;
    padding-right: 40px;
    box-sizing: border-box;
    box-shadow: 0px 0px 20px #d4d4d4;
  }
  .header-logo {
    font-size: 1.5em;
    color: #000;
  }
  .menu-container {
    
  }
  .menu {
    margin: 0;
    margin-top: 30px;
    padding: 0;
    box-shadow: 0px 0px 0px #000;
  }
  .menu:after {
    clear: both;
    display: table;
    content: ' ';
  }
  .menu-item {
    list-style: none;
    margin-left: 0;
    float: left;
    padding: 5px 10px;
    font-size: 1em;
    font-weight: 500;
    text-transform: uppercase;
    border-radius: 5px;
    margin-left: 5px;
    box-sizing: border-box;
  }
  .menu-item:first-child {
    margin-left: 0px;
    padding-left: 0px;
  }

</style>












