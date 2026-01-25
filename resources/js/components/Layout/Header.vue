
<script setup>
import { ref } from "vue";
import logo from '../../../../public/img/JUMLA.png'
</script>

<template>
    <link href="/css/app.min.css" rel="stylesheet" />

    <header class="header-middle style-two bg-color-neutral">
        <div class="container container-lg">
            <nav class="header-inner flex-between">
                <div class="logo">
                    <a href="index.html" class="link"
                        ><img
                            :src="logo"
                            alt="Logo "
                        />
                    </a>
                </div>
    <!-- 
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
                    </div> -->
            </nav>
        </div>
    </header>

    <header class="header bg-white border-b border-gray-100">
        <div class="container container-lg">
            <nav class="header-inner flex justify-between gap-8">
                <div class="flex items-center menu-category-wrapper">
                    <div class="category-two hidden">
                        <button
                            type="button"
                            class="category__button flex items-center gap-8 font-[500] bg-main-two-600 p-16 text-white"
                        >
                            <span class="icon text-2xl sm:flex hidden"
                                ><i class="ph ph-dots-nine"></i
                            ></span>
                            <span class="md:flex hidden">All</span> Categories
                            <span class="arrow-icon text-xl flex"
                                ><i class="ph ph-caret-down"></i
                            ></span>
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
                            <ul class="scroll-sm p-0 py-8 overflow-y-auto">
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Cell Phone</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Cell Phone
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Wear</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Wear
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Computer</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Computer
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Headphone</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Headphone
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Smart Screen</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Smart Screen
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Smart Home</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Smart Home
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Digital Accessories</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Digital Accessories
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Value Added Services</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Value Added Services
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Car Products</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Car Products
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Ecological Products</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Ecological Products
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Flat</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Flat
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Commercial Terminal</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Commercial Terminal
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Headphone</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Headphone
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                                        ><span>Smart Screen</span>
                                        <span class="icon text-md flex ms-auto"
                                            ><i
                                                class="ph ph-caret-right"
                                            ></i></span
                                    ></a>
                                    <div class="submenus-submenu py-16">
                                        <h6
                                            class="text-lg px-16 submenus-submenu__title"
                                        >
                                            Smart Screen
                                        </h6>
                                        <ul
                                            class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm"
                                        >
                                            <li>
                                                <a href="shop.html">Samsung</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Iphone</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Vivo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Oppo</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Itel</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Realme</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                            <span class="arrow-icon text-xl flex"
                            ></span>
                        </button>
                        <div
                            class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper"
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
                                    <!-- <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <a
                                            href="index-two.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                            >Home Electronics</a
                                        >
                                    </li> -->
                                    <!-- <li
                                        class="common-dropdown__item nav-submenu__item"
                                    >
                                        <a
                                            href="index-three.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                            >Home Fashion</a
                                        >
                                    </li> -->
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
