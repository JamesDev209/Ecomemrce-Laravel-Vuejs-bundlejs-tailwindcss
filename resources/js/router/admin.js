import { createRouter, createWebHistory } from "vue-router";
import Login from "../pages/admin/Login.vue";
import Dashboard from "../pages/admin/Dashboard.vue";

const routes = [
    {
        path: "/admin",
        name: "admin-login",
        component: Login,
    },
    {
        path: "/admin/dashboard",
        name: "admin-dashboard",
        component: Dashboard,
    },
    // //Admin
    // {
    //     path: '/admin',
    //     name: 'admin',
    //     component: Dashboard,
    // },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
