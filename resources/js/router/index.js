import { createRouter, createWebHistory } from 'vue-router'
import ShopView from '../pages/ShopView.vue'    
import HomeView from '../pages/HomeView.vue'
import Dashboard from '../pages/admin/Dashboard.vue'
import Login from '../pages/admin/Login.vue'



const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeView,
    },
{
        path: '/shop',
        name: 'shop',
        component: ShopView,
},
// //Admin
// {
//     path: '/admin',
//     name: 'admin',
//     component: Dashboard,
// },

]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
