import { createRouter, createWebHistory } from "vue-router";
import Login from "../pages/admin/Login.vue";
import Dashboard from "../pages/admin/Dashboard.vue";


//Productos routes
import CreateProduct from "../pages/admin/products/CreateProduct.vue";

import CategoriesIndex from "../pages/admin/categorias/CategoriesIndex.vue";




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
    {
        path: "/admin/products/create",
        name: "admin-products-create",
        component: CreateProduct,
    },
    {
        path: "/admin/categories",
        name: "admin-categories-index",
        component: CategoriesIndex,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
