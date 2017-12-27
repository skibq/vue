<template>
  <div class="main-layout">
    <header-template></header-template>
    <div class="main-container">
      <slot></slot>
    </div>
    <footer-template></footer-template>
  </div>
</template>

<script>
  import HeaderTemplate from '../components/header'
  import FooterTemplate from '../components/footer'
  
  export default {
    data () {
      return {
      }
    },
    components: {
      HeaderTemplate,
      FooterTemplate
    }
  }
</script>


<style>
  * {
    box-sizing: border-box;
  }
  body {
    @import url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&subset=latin-ext');
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    font-size: 16px;
  }
  h1 {
    text-align: center;
  }
  a {
    color: #2e7aff /*#005dff*/;
    text-decoration: none;
    transition: color ease-in-out 0.5s;
  }
  a:hover {
    color: #0a59e2;
  }
  .main-layout {
    
  }

</style>