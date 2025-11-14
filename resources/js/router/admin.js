import { createRouter, createWebHistory } from 'vue-router'
import Login from '../pages/admin/Login.vue'

export default createRouter({
  history: createWebHistory('/admin'),
  routes: [
    {
      path: '/',
      name: 'admin-login',
      component: Login
    }
  ]
})
