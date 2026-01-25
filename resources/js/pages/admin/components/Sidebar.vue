<script setup>
import { useRoute } from "vue-router";
import { computed, ref, watch } from "vue";

const route = useRoute();

const isProductsActive = computed(() => {
    return route.path.startsWith("/admin/products");
});

const isProductsMenuOpen = ref(false);

watch(
    () => route.path,
    (path) => {
        isProductsMenuOpen.value = path.startsWith("/admin/products");
    },
    { immediate: true },
);

const toggleProductsMenu = () => {
    isProductsMenuOpen.value = !isProductsMenuOpen.value;
};

const isDashboardActive = computed(() => {
    return route.name === "admin-dashboard";
});
</script>

<template>
    <!-- /app-header -->
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar" id="sidebar">
        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img
                    src="https://tse2.mm.bing.net/th/id/OIP.zcD4_mIe48lP3Hk3MUcYhAHaB7?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="logo"
                    class="desktop-logo"
                />
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div
            data-sidebar-styles="gradientSidebar"
            class="main-sidebar app-sidebar"
            id="sidebar-scroll"
        >
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-col sub-open">
                <div class="slide-left" id="slide-left">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                        ></path>
                    </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide (Dashboard) -->
                    <li class="slide" :class="{ active: isDashboardActive }">
                        <router-link
                            :to="{ name: 'admin-dashboard' }"
                            class="side-menu__item"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 side-menu__icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                                />
                            </svg>
                            <span class="side-menu__label">Dashboard</span>
                        </router-link>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide (Productos) -->
                    <li
                        class="slide has-sub"
                        :class="{
                            open: isProductsMenuOpen,
                            active: isProductsActive,
                        }"
                    >
                        <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            @click.prevent="toggleProductsMenu"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 side-menu__icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                                />
                            </svg>
                            <span class="side-menu__label">Productos</span>
                            <i
                                class="ri-arrow-down-s-line side-menu__angle"
                            ></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <router-link
                                    :to="{ name: 'admin-products-create' }"
                                    class="side-menu__item"
                                    active-class="active"
                                >
                                    Crear productos
                                </router-link>
                            </li>
                            <li class="slide">
                                <a
                                    href="editar-producto.html"
                                    class="side-menu__item"
                                    >Editar produtos</a
                                >
                            </li>
                            <li class="slide">
                                <router-link
                                    :to="{ name: 'admin-products-list' }"
                                    class="side-menu__item"
                                    active-class="active"
                                >
                                    Todos los productos
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <!---Usuarios-->

                    <li class="slide">
                        <router-link
                            :to="{ name: 'admin-users-index' }"
                            class="side-menu__item"
                            active-class="active"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 side-menu__icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 19.128v-.003a6.375 6.375 0 0 0-12.75 0v.003"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 11.25a3 3 0 1 0-6 0 3 3 0 0 0 6 0Z"
                                />
                            </svg>

                            <span class="side-menu__label">Usuarios</span>
                        </router-link>
                    </li>

                    <li class="slide">
                        <router-link
                            :to="{ name: 'admin-categories-index' }"
                            class="side-menu__item"
                            active-class="active"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 side-menu__icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 6h.008v.008H6V6Z"
                                />
                            </svg>
                            <span class="side-menu__label">Categorias</span>
                        </router-link>
                    </li>
                    <!-- End::slide -->
                </ul>
                <div class="slide-right" id="slide-right">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                        ></path>
                    </svg>
                </div>
            </nav>
            <!-- End::nav -->
        </div>
        <!-- End::main-sidebar -->
    </aside>
    <!-- End::app-sidebar -->
</template>
