<script setup>
import { ref } from "vue";
import logo from "../../../../public/img/JUMLA.png";
import { useAuthStore } from "@/store/authStore";
import { useRouter } from "vue-router";

const authStore = useAuthStore();
const router = useRouter();

const handleLogout = () => {
    authStore.handleLogout();
    router.push({ name: "client-auth" });
};

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
};
</script>

<template>
    <link href="/css/app.min.css" rel="stylesheet" />

    <header class="header-middle style-two bg-color-neutral">
        <div class="container container-lg">
            <nav class="header-inner flex-between">
                <div class="logo">
                    <RouterLink :to="{ name: 'home' }" class="link"
                        ><img :src="logo" alt="Logo " />
                    </RouterLink>
                </div>

                

                <div class="header-right items-center xl:block hidden">
                    <div
                        class="header-two-activities flex items-center flex-wrap gap-32"
                    >
                        <button
                            type="button"
                            class="items-center search-icon xl:hidden flex gap-4 item-hover-two"
                        >
                            <span
                                class="text-2xl text-white flex relative item-hover__text"
                                ><i class="ph ph-magnifying-glass"></i
                            ></span>
                        </button>
                        <div
                            v-if="authStore.isAuthenticated"
                            class="flex items-center gap-16"
                        >
                            <div class="flex items-center flex-col gap-8">
                                <span class="text-md text-white"
                                    >Hola, {{ authStore.user.name }}</span
                                >
                            </div>
                            <button
                                @click="handleLogout"
                                class="flex items-center flex-col gap-8 item-hover-two"
                            >
                                <span
                                    class="text-2xl text-white flex relative item-hover__text"
                                >
                                    <i class="ph ph-sign-out"></i>
                                </span>
                                <span
                                    class="text-md text-white item-hover__text hidden xl:flex"
                                    >Salir</span
                                >
                            </button>
                        </div>
                        <RouterLink
                            v-else
                            to="/client-auth"
                            class="flex items-center flex-col gap-8 item-hover-two"
                        >
                            <span
                                class="text-2xl text-white flex relative item-hover__text"
                            >
                                <i class="ph ph-user"></i>
                            </span>
                            <span
                                class="text-md text-white item-hover__text hidden xl:flex"
                                >Mi cuenta</span
                            >
                        </RouterLink>
                        <a href="wishlist.html" class="flex items-center flex-col gap-8 item-hover-two">
                            <span class="text-2xl text-white flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-heart"></i>
                                <span class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span> 
                            </span
                            ><span
                                class="text-md text-white item-hover__text hidden xl:flex"
                                >Wishlist</span
                            > </a
                        ><a
                            href="cart.html"
                            class="flex items-center flex-col gap-8 item-hover-two"
                            ><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"
                                ><i class="ph-fill ph-shuffle"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4"
                                    >2</span
                                > </span
                            ><span
                                class="text-md text-white item-hover__text hidden xl:flex"
                                >Compare</span
                            > </a
                        ><a
                            href="cart.html"
                            class="flex items-center flex-col gap-8 item-hover-two"
                            ><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"
                                ><i class="ph ph-shopping-cart-simple"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4"
                                    >2</span
                                > </span
                            ><span
                                class="text-md text-white item-hover__text hidden xl:flex"
                                >Cart</span
                            ></a
                        >
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <header class="header bg-white border-b border-gray-100">
        <div class="container container-lg">
            <nav class="header-inner flex justify-between gap-8">
                <div class="flex items-center menu-category-wrapper">
                    <div
                        class="category block on-hover-item bg-main-600 text-white"
                    >
                        <button
                            type="button"
                            class="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-white"
                        >
                            <span class="icon text-2xl sm:flex hidden"
                                ><i class="ph ph-dots-nine"></i
                            ></span>
                            <span class="md:flex hidden">Jumla</span>
                            <span class="arrow-icon text-xl flex"></span>
                        </button>
                        <div
                            class="responsive-dropdown common-dropdown xl:hidden block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100"
                        >
                            <button
                                type="button"
                                class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex"
                            >
                                <i class="ph ph-x"></i>
                            </button>
                            <div class="logo px-16 xl:hidden block">
                                <a href="index.html" class="link"
                                    ><img src="" alt="Logo"
                                /></a>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu xl:block hidden">
                        <ul class="nav-menu flex items-center">
                            <li
                                class="on-hover-item nav-menu__item has-submenu activePage"
                            >
                                <a
                                    href="javascript:void(0)"
                                    class="nav-menu__link"
                                    >Inicio</a
                                >
                                <ul
                                    class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                >
                                    <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <RouterLink
                                            to="/"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Inicio
                                        </RouterLink>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="on-hover-item nav-menu__item has-submenu"
                            >
                                <span
                                    class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4"
                                    >New</span
                                >
                                <a
                                    href="javascript:void(0)"
                                    class="nav-menu__link"
                                    >Tienda</a
                                >
                                <ul
                                    class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                >
                                    <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <RouterLink
                                            to="/shop"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Tienda
                                        </RouterLink>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="on-hover-item nav-menu__item has-submenu"
                            >
                                <span
                                    class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4"
                                    >New</span
                                >
                                <a
                                    href="javascript:void(0)"
                                    class="nav-menu__link"
                                    >Blog</a
                                >
                            </li>
                            <li class="nav-menu__item">
                                <a href="contact.html" class="nav-menu__link"
                                    >Contacto</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>
