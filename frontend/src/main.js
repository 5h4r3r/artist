import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import Vuelidate from 'vuelidate'
import VueLazyload from 'vue-lazyload'

var VueScrollTo = require('vue-scrollto');
 
Vue.use(VueAxios, axios)
Vue.use(VueScrollTo)
Vue.use(Vuelidate)
Vue.use(VueLazyload, {
  preLoad: 1.3,
  attempt: 1,
  lazyComponent: true
})
//[
//  [VueAxios, axios],
//  [VueScrollTo],
// [Vuelidate]
//].forEach(args => Vue.use(...args));

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
