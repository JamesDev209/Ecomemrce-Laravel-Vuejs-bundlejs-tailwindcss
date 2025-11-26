import { createRouter, createWebHistory } from "vue-router";
import Login from "../pages/admin/Login.vue";
import Dashboard from "../pages/admin/Dashboard.vue";
import CreateProduct from "../pages/admin/products/CreateProduct.vue";
import ProductList from "../pages/admin/products/ProductList.vue";

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
        path: "/admin/products/index",
        name: "admin-products-index",
        component: ProductList,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
