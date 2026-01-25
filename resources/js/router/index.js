import { createRouter, createWebHistory } from "vue-router";

import MainLayout from "@/layouts/MainLayout.vue";
import HomeView from "@/pages/home/HomeView.vue";
import ShopProducts from "@/pages/shop/ShopProducts.vue";
import ProductDetails from "@/pages/shop/ProductDetails.vue";

const routes = [
    {
        path: "/",
        component: MainLayout,
        children: [
            {
                path: "",
                name: "home",
                component: HomeView,
            },
            {
                path: "shop",
                name: "shop",
                component: ShopProducts,
            },
            {
                path: "shop/:id",
                name: "product-details",
                component: ProductDetails,
            },

        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
