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

    <div class="mobile-menu scroll-sm xl:hidden block">
        <button type="button" class="close-button">
            <i class="ph ph-x"></i>
        </button>
        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo"
                ><img :src="logo" alt="Logo"
            /></a>
            <div class="mobile-menu__menu">
                <ul class="nav-menu flex items-center nav-menu--mobile">
                    <li
                        class="on-hover-item nav-menu__item"
                    >
                        <RouterLink
                            :to="{ name: 'home' }"
                            class="nav-menu__link"
                            >Home</RouterLink
                        >
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu">
                        <span
                            class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4"
                            >New</span
                        >
                        <a href="javascript:void(0)" class="nav-menu__link"
                            >Shop</a
                        >
                        <ul
                            class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                        >
                            <li class="common-dropdown__item nav-submenu__item">
                                <RouterLink
                                    :to="{ name: 'shop' }"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                    >Shop</RouterLink
                                >
                            </li>
                   
                        </ul>
                    </li>

                    <li class="on-hover-item nav-menu__item has-submenu">
                        <span
                            class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4"
                            >New</span
                        >
                        <a href="javascript:void(0)" class="nav-menu__link"
                            >Blog</a
                        >
                        <ul
                            class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                        >
                            <li class="common-dropdown__item nav-submenu__item">
                                <a
                                    href="blog.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                    >Blog</a
                                >
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a
                                    href="blog-details.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                    >Blog Details</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link"
                            >Contact Us</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
                        <a
                            href="wishlist.html"
                            class="flex items-center flex-col gap-8 item-hover-two"
                        >
                            <span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"
                            >
                                <i class="ph ph-heart"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4"
                                    >2</span
                                > </span
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
                    <div class="header-menu xl:block hidden">
                        <ul class="nav-menu flex items-center">
                            <li
                                class="on-hover-item nav-menu__item"
                            >
                                <RouterLink
                                    :to="{ name: 'home' }"
                                    class="nav-menu__link"
                                    >Home</RouterLink
                                >
                              
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
                                    >Shop</a
                                >
                                <ul
                                    class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                >
                          
                                    <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <RouterLink
                                            :to="{ name: 'shop' }"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                            >Shop</RouterLink
                                        >
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
                                <ul
                                    class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                >
                                    <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <a
                                            href="blog.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                            >Blog</a
                                        >
                                    </li>
                                    <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <a
                                            href="blog-details.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                            >Blog Details</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="contact.html" class="nav-menu__link"
                                    >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-right flex items-center">
                    <div class="select-dropdown-for-home-two xl:block hidden">
                       
                    </div>
                    <div class="me-8 xl:hidden block">
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
                            <a
                                href="account.html"
                                class="flex items-center flex-col gap-8 item-hover-two"
                                ><span
                                    class="text-2xl text-white flex relative item-hover__text"
                                    ><i class="ph ph-user"></i> </span
                                ><span
                                    class="text-md text-white item-hover__text hidden xl:flex"
                                    >Profile</span
                                > </a
                            ><a
                                href="wishlist.html"
                                class="flex items-center flex-col gap-8 item-hover-two"
                                ><span
                                    class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"
                                    ><i class="ph ph-heart"></i>
                                    <span
                                        class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4"
                                        >2</span
                                    > </span
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
                    <button
                        type="button"
                        class="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex"
                    >
                        <i class="ph ph-list"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>
</template>
