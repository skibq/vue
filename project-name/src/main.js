// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuex from 'vuex'

import VueRouter from 'vue-router'
import MainPage from './pages/MainPage'
import Page404 from './pages/Page404'
import Contact from './pages/Contact'

Vue.use(VueRouter)
Vue.use(Vuex)
Vue.config.productionTip = false


import Config from '../config'
import axios from 'axios'
  
const store = new Vuex.Store({
  state: {
    title: 'just temp title'
  },
  mutations: {
    changeTitle () {
      state.title = 'title changed'
    }
  }
})

const routes = [
  {
    path: '/',
    component: MainPage
  },
  {
    path: '/kontakt',
    component: Contact
  },
  {
    path: '*',
    component: Page404
  }
]

const router = new VueRouter({
  base: '/',
  routes
})
//eslint-disable-next-line
const app = new Vue({
  router
}).$mount('#app')
