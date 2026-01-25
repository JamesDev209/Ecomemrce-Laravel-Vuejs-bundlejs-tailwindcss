import { createRouter, createWebHistory } from "vue-router";
import Login from "../pages/admin/Login.vue";
import AdminLayout from "../pages/admin/Layout/AdminLayout.vue";
import Dashboard from "../pages/admin/Dashboard.vue";

//Productos routes
import CreateProduct from "../pages/admin/products/CreateProduct.vue";
import ProductsList from "../pages/admin/products/ProductsList.vue";
//Categorías routes
import CategoriesIndex from "../pages/admin/categorias/CategoriesIndex.vue";

const routes = [
    {
        path: "/admin/login",
        name: "admin-login",
        component: Login,
    },
    {
        path: "/admin",
        component: AdminLayout,
        children: [
            {
                path: "dashboard",
                name: "admin-dashboard",
                component: Dashboard,
            },
            {
                path: "products/create",
                name: "admin-products-create",
                component: CreateProduct,
            },
            {
                path: "products",
                name: "admin-products-list",
                component: ProductsList,
            },
            {
                path: "categories",
                name: "admin-categories-index",
                component: CategoriesIndex,
            },
        ],
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
