// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'

import MainPage from './pages/MainPage'
import DefaultPage from './pages/DefaultPage'
import Contact from './pages/Contact'

import Config from './config'
import axios from 'axios'

Vue.use(Vuex)
Vue.use(VueRouter)
Vue.config.productionTip = false

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
    path: '/:slug',
    component: DefaultPage,
    props: true
  }
]

const router = new VueRouter({
  base: '/',
  routes
})

//eslint-disable-next-line
const store = new Vuex.Store({
  state: {
    globalInfo: {},
    menu: {},
    listing: {},
    siteInfo: []
  },
  mutations: {
    refreshGlobalInfo (state, data) {
      state.globalInfo = data
    },
    refreshMenu (state, data) {
      state.menu = data
    },
    refreshListing (state, data) {
      state.listing = data
    },
    refreshSiteInfo (state, data) {
      console.log('----------------')
      console.log(state.siteInfo.filter(id => data[0].id === 'id'))
      if (state.siteInfo.length > 0) {
        if (state.siteInfo.filter(id => data[0].id === 'id').length === 0) {
          console.log(data[0])
          state.siteInfo.push(data[0])
        } else {
          console.log('current post exist in memory')
        }
      } else {
        state.siteInfo.push(data[0])
      }
    }
  },
  actions: {
    refreshGlobalInfo (contex) {
      return new Promise((resolve) => {
        axios.get(Config.ajax_url).then(response => {
          contex.commit('refreshGlobalInfo', response.data)
          resolve()
        })
        .catch(response => {
          console.error('ajax call error globalInfo')
          console.log(response)
        })
      })
    },
    refreshMenu (contex) {
      return new Promise((resolve) => {
        axios.get(`${Config.ajax_url}custom-routes/menu/`)
        .then(response => {
          contex.commit('refreshMenu', response.data)
          resolve()
        })
        .catch(response => {
          console.error('ajax call error refreshMenu')
          console.log(response)
        })
      })
    },
    refreshListing (contex) {
      return new Promise((resolve) => {
        axios.get(`${Config.ajax_url}wp/v2/posts?_embed`)
        .then(response => {
          contex.commit('refreshListing', response.data)
          resolve()
        })
        .catch(response => {
          console.error('ajax call error refreshListing')
          console.log(response)
        })
      })
    },
    refreshSiteInfo (contex, post) {
      return new Promise((resolve) => {
        axios.get(`${Config.ajax_url}wp/v2/posts?slug=${post.slug}&_embed`)
        .then(response => {
          console.log('action done')
          contex.commit('refreshSiteInfo', response.data)
          resolve()
        })
        .catch(response => {
          console.warn(response)
        })
      })
    }
  }
})

Vue.filter('no_html_tags', function (txt) {
  var tmp = document.createElement('div')
  tmp.innerHTML = txt
  return tmp.textContent || tmp.innerText || ''
})

Vue.filter('sub_str', function (txt, num) {
  if (!txt) return ''
  return txt.substr(0, num)
})

Vue.filter('format_date', function (date) {
  const dateObj = new Date(date)
  return `${dateObj.getDate()} / ${dateObj.getMonth()} / ${dateObj.getFullYear()}`
})

//eslint-disable-next-line
const app = new Vue({
  router,
  store
}).$mount('#app')
