<script setup>
import Sidebar from "../components/Sidebar.vue";
import { ref, onMounted } from "vue";
import axios from "axios";

const products = ref([]);

onMounted(async () => {
    const response = await axios.get("/api/products");
    products.value = response.data;
});
</script>

<template>
    <Sidebar />
    <!-- ========== Switcher  ========== -->
    <div
        id="hs-overlay-switcher"
        class="hs-overlay hidden ti-offcanvas ti-offcanvas-right"
        tabindex="-1"
    >
        <div class="ti-offcanvas-header z-10 relative">
            <h5 class="ti-offcanvas-title">Switcher</h5>
            <button
                type="button"
                class="ti-btn flex-shrink-0 p-0 !mb-0 transition-none text-defaulttextcolor dark:text-defaulttextcolor/80 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher"
            >
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div
            class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto"
        >
            <div
                class="flex rtl:space-x-reverse"
                aria-label="Tabs"
                role="tablist"
            >
                <button
                    type="button"
                    class="hs-tab-active:bg-danger/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-[0.813rem] border-0 hs-tab-active:text-danger dark:hs-tab-active:bg-danger/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-danger -mb-px bg-white font-normal text-center text-defaulttextcolor dark:text-defaulttextcolor/80 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10 active"
                    id="switcher-item-1"
                    data-hs-tab="#switcher-1"
                    aria-controls="switcher-1"
                    role="tab"
                >
                    Theme Style
                </button>
                <button
                    type="button"
                    class="hs-tab-active:bg-danger/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-[0.813rem] border-0 hs-tab-active:text-danger dark:hs-tab-active:bg-danger/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-danger -mb-px bg-white font-normal text-center text-defaulttextcolor dark:text-defaulttextcolor/80 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10 dark:hover:text-gray-300"
                    id="switcher-item-2"
                    data-hs-tab="#switcher-2"
                    aria-controls="switcher-2"
                    role="tab"
                >
                    Theme Colors
                </button>
            </div>
        </div>
        <div class="ti-offcanvas-body !p-0 !pb-[20rem]" id="switcher-body">
            <div
                id="switcher-1"
                role="tabpanel"
                aria-labelledby="switcher-item-1"
                class=""
            >
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex items-center">
                            <input
                                type="radio"
                                name="theme-style"
                                class="ti-form-radio"
                                id="switcher-light-theme"
                                checked
                            />
                            <label
                                for="switcher-light-theme"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Light</label
                            >
                        </div>
                        <div class="flex items-center">
                            <input
                                type="radio"
                                name="theme-style"
                                class="ti-form-radio"
                                id="switcher-dark-theme"
                            />
                            <label
                                for="switcher-dark-theme"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Dark</label
                            >
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex items-center">
                            <input
                                type="radio"
                                name="direction"
                                class="ti-form-radio"
                                id="switcher-ltr"
                                checked
                            />
                            <label
                                for="switcher-ltr"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >LTR</label
                            >
                        </div>
                        <div class="flex items-center">
                            <input
                                type="radio"
                                name="direction"
                                class="ti-form-radio"
                                id="switcher-rtl"
                            />
                            <label
                                for="switcher-rtl"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >RTL</label
                            >
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex items-center">
                            <input
                                type="radio"
                                name="navigation-style"
                                class="ti-form-radio"
                                id="switcher-vertical"
                                checked
                            />
                            <label
                                for="switcher-vertical"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Vertical</label
                            >
                        </div>
                        <div class="flex items-center">
                            <input
                                type="radio"
                                name="navigation-style"
                                class="ti-form-radio"
                                id="switcher-horizontal"
                            />
                            <label
                                for="switcher-horizontal"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Horizontal</label
                            >
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="navigation-data-menu-styles"
                                class="ti-form-radio"
                                id="switcher-menu-click"
                                checked
                            />
                            <label
                                for="switcher-menu-click"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Menu Click</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="navigation-data-menu-styles"
                                class="ti-form-radio"
                                id="switcher-menu-hover"
                            />
                            <label
                                for="switcher-menu-hover"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Menu Hover</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="navigation-data-menu-styles"
                                class="ti-form-radio"
                                id="switcher-icon-click"
                            />
                            <label
                                for="switcher-icon-click"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Icon Click</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="navigation-data-menu-styles"
                                class="ti-form-radio"
                                id="switcher-icon-hover"
                            />
                            <label
                                for="switcher-icon-hover"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Icon Hover</label
                            >
                        </div>
                    </div>
                </div>
                <div class="sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="sidemenu-layout-styles"
                                class="ti-form-radio"
                                id="switcher-default-menu"
                                checked
                            />
                            <label
                                for="switcher-default-menu"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Default Menu</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="sidemenu-layout-styles"
                                class="ti-form-radio"
                                id="switcher-closed-menu"
                            />
                            <label
                                for="switcher-closed-menu"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                            >
                                Closed Menu</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="sidemenu-layout-styles"
                                class="ti-form-radio"
                                id="switcher-icontext-menu"
                            />
                            <label
                                for="switcher-icontext-menu"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Icon Text</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="sidemenu-layout-styles"
                                class="ti-form-radio"
                                id="switcher-icon-overlay"
                            />
                            <label
                                for="switcher-icon-overlay"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Icon Overlay</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="sidemenu-layout-styles"
                                class="ti-form-radio"
                                id="switcher-detached"
                            />
                            <label
                                for="switcher-detached"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Detached</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="sidemenu-layout-styles"
                                class="ti-form-radio"
                                id="switcher-double-menu"
                            />
                            <label
                                for="switcher-double-menu"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Double Menu</label
                            >
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-page-styles"
                                class="ti-form-radio"
                                id="switcher-regular"
                                checked
                            />
                            <label
                                for="switcher-regular"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Regular</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-page-styles"
                                class="ti-form-radio"
                                id="switcher-classic"
                            />
                            <label
                                for="switcher-classic"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Classic</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-page-styles"
                                class="ti-form-radio"
                                id="switcher-modern"
                            />
                            <label
                                for="switcher-modern"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                            >
                                Modern</label
                            >
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="layout-width"
                                class="ti-form-radio"
                                id="switcher-full-width"
                                checked
                            />
                            <label
                                for="switcher-full-width"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >FullWidth</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="layout-width"
                                class="ti-form-radio"
                                id="switcher-boxed"
                            />
                            <label
                                for="switcher-boxed"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Boxed</label
                            >
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-menu-positions"
                                class="ti-form-radio"
                                id="switcher-menu-fixed"
                                checked
                            />
                            <label
                                for="switcher-menu-fixed"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Fixed</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-menu-positions"
                                class="ti-form-radio"
                                id="switcher-menu-scroll"
                            />
                            <label
                                for="switcher-menu-scroll"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-header-positions"
                                class="ti-form-radio"
                                id="switcher-header-fixed"
                                checked
                            />
                            <label
                                for="switcher-header-fixed"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                            >
                                Fixed</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="data-header-positions"
                                class="ti-form-radio"
                                id="switcher-header-scroll"
                            />
                            <label
                                for="switcher-header-scroll"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input
                                type="radio"
                                name="page-loader"
                                class="ti-form-radio"
                                id="switcher-loader-enable"
                                checked
                            />
                            <label
                                for="switcher-loader-enable"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                            >
                                Enable</label
                            >
                        </div>
                        <div class="flex">
                            <input
                                type="radio"
                                name="page-loader"
                                class="ti-form-radio"
                                id="switcher-loader-disable"
                            />
                            <label
                                for="switcher-loader-disable"
                                class="text-[0.813rem] text-defaulttextcolor dark:text-defaulttextcolor/80 ms-2 font-normal"
                                >Disable
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div
                id="switcher-2"
                class="hidden"
                role="tabpanel"
                aria-labelledby="switcher-item-2"
            >
                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div
                        class="flex switcher-style space-x-3 rtl:space-x-reverse"
                    >
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-white"
                                type="radio"
                                name="menu-colors"
                                id="switcher-menu-light"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Light Menu
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-dark"
                                type="radio"
                                name="menu-colors"
                                id="switcher-menu-dark"
                                checked
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Dark Menu
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-primary"
                                type="radio"
                                name="menu-colors"
                                id="switcher-menu-primary"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Color Menu
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-gradient"
                                type="radio"
                                name="menu-colors"
                                id="switcher-menu-gradient"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Gradient Menu
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio"
                                name="menu-colors"
                                id="switcher-menu-transparent"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs !font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Transparent Menu
                            </span>
                        </div>
                    </div>
                    <div
                        class="px-4 text-textmuted dark:text-textmuted/50 text-[.6875rem]"
                    >
                        <b class="me-2 font-normal">Note:</b>If you want to
                        change color Menu dynamically change from below Theme
                        Primary color picker.
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div
                        class="flex switcher-style space-x-3 rtl:space-x-reverse"
                    >
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-white !border"
                                type="radio"
                                name="header-colors"
                                id="switcher-header-light"
                                checked
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Light Header
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-dark"
                                type="radio"
                                name="header-colors"
                                id="switcher-header-dark"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Dark Header
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-primary"
                                type="radio"
                                name="header-colors"
                                id="switcher-header-primary"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Color Header
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-gradient"
                                type="radio"
                                name="header-colors"
                                id="switcher-header-gradient"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Gradient Header
                            </span>
                        </div>
                        <div
                            class="hs-tooltip ti-main-tooltip ti-form-radio switch-select"
                        >
                            <input
                                class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio"
                                name="header-colors"
                                id="switcher-header-transparent"
                            />
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip"
                            >
                                Transparent Header
                            </span>
                        </div>
                    </div>
                    <div
                        class="px-4 text-textmuted dark:text-textmuted/50 text-[.6875rem]"
                    >
                        <b class="me-2 !font-normal">Note:</b>If you want to
                        change color Header dynamically change from below Theme
                        Primary color picker.
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div
                        class="flex switcher-style space-x-3 rtl:space-x-reverse"
                    >
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-primary-1"
                                type="radio"
                                name="theme-primary"
                                id="switcher-primary"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-primary-2"
                                type="radio"
                                name="theme-primary"
                                id="switcher-primary1"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-primary-3"
                                type="radio"
                                name="theme-primary"
                                id="switcher-primary2"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-primary-4"
                                type="radio"
                                name="theme-primary"
                                id="switcher-primary3"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-primary-5"
                                type="radio"
                                name="theme-primary"
                                id="switcher-primary4"
                            />
                        </div>
                        <div
                            class="ti-form-radio switch-select ps-0 mt-1 color-primary-light"
                        >
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div
                        class="flex switcher-style space-x-3 rtl:space-x-reverse"
                    >
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-bg-1"
                                type="radio"
                                name="theme-background"
                                id="switcher-background"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-bg-2"
                                type="radio"
                                name="theme-background"
                                id="switcher-background1"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-bg-3"
                                type="radio"
                                name="theme-background"
                                id="switcher-background2"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-bg-4"
                                type="radio"
                                name="theme-background"
                                id="switcher-background3"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio color-input color-bg-5"
                                type="radio"
                                name="theme-background"
                                id="switcher-background4"
                            />
                        </div>
                        <div
                            class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent"
                        >
                            <div
                                class="theme-container-background hidden"
                            ></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">
                        Menu With Background Image:
                    </p>
                    <div
                        class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3"
                    >
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio bgimage-input bg-img1"
                                type="radio"
                                name="theme-images"
                                id="switcher-bg-img"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio bgimage-input bg-img2"
                                type="radio"
                                name="theme-images"
                                id="switcher-bg-img1"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio bgimage-input bg-img3"
                                type="radio"
                                name="theme-images"
                                id="switcher-bg-img2"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio bgimage-input bg-img4"
                                type="radio"
                                name="theme-images"
                                id="switcher-bg-img3"
                            />
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input
                                class="ti-form-radio bgimage-input bg-img5"
                                type="radio"
                                name="theme-images"
                                id="switcher-bg-img4"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer sm:flex justify-between">
            <a
                href="javascript:void(0);"
                id="reset-all"
                class="ti-btn ti-btn-danger w-full m-1"
                >Reset</a
            >
        </div>
    </div>
    <!-- ========== END Switcher  ========== -->
    <!-- Loader -->
    <div id="loader">
        <img src="../assets/images/media/loader.svg" alt="" />
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header sticky" id="header">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">
                <!-- Start::header-content-left -->
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img
                                    src="../assets/images/brand-logos/desktop-logo.png"
                                    alt="logo"
                                    class="desktop-logo"
                                />
                                <img
                                    src="../assets/images/brand-logos/toggle-dark.png"
                                    alt="logo"
                                    class="toggle-dark"
                                />
                                <img
                                    src="../assets/images/brand-logos/desktop-dark.png"
                                    alt="logo"
                                    class="desktop-dark"
                                />
                                <img
                                    src="../assets/images/brand-logos/toggle-logo.png"
                                    alt="logo"
                                    class="toggle-logo"
                                />
                                <img
                                    src="../assets/images/brand-logos/toggle-white.png"
                                    alt="logo"
                                    class="toggle-white"
                                />
                                <img
                                    src="../assets/images/brand-logos/desktop-white.png"
                                    alt="logo"
                                    class="desktop-white"
                                />
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element mx-lg-0">
                        <a
                            aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar"
                            href="javascript:void(0);"
                            ><span></span
                        ></a>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div
                        class="header-element header-search md:!block !hidden my-auto auto-complete-search"
                    >
                        <!-- Start::header-link -->
                        <input
                            type="text"
                            class="header-search-bar form-control"
                            id="header-search"
                            placeholder="Search anything here ..."
                            spellcheck="false"
                            autocomplete="off"
                            autocapitalize="off"
                        />

                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <ul class="header-content-right">
                    <!-- Start::header-element -->
                    <li class="header-element md:!hidden block">
                        <a
                            href="javascript:void(0);"
                            class="header-link"
                            data-bs-toggle="modal"
                            data-hs-overlay="#header-responsive-search"
                        >
                            <!-- Start::header-link-icon -->
                            <i class="bi bi-search header-link-icon"></i>
                            <!-- End::header-link-icon -->
                        </a>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li
                        class="header-element country-selector hs-dropdown ti-dropdown hidden sm:block [--placement:bottom-right] rtl:[--placement:bottom-left]"
                    >
                        <div
                            class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10"
                        ></div>
                        <!-- Start::header-link|dropdown-toggle -->

                        <!-- End::header-link|dropdown-toggle -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->

                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li
                        class="header-element cart-dropdown hs-dropdown ti-dropdown [--auto-close:inside]"
                    >
                        <!-- Start::header-link|dropdown-toggle -->
                        <a
                            href="javascript:void(0);"
                            class="header-link hs-dropdown-toggle ti-dropdown-toggle"
                            data-bs-auto-close="outside"
                            data-bs-toggle="dropdown"
                        >
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div
                            class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu hidden"
                            data-popper-placement="none"
                        >
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <p class="mb-0 text-[15px] font-medium">
                                        <span
                                            class="badge bg-primarytint2color text-white ms-1 !py-[0.15rem] rounded-full"
                                            id="cart-data"
                                            >5</span
                                        >
                                    </p>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-xs font-medium text-textmuted dark:text-textmuted/50"
                                            >Sub Total :
                                        </span>
                                        <h6 class="mb-0">L740</h6>
                                    </div>
                                </div>
                            </div>
                            <hr class="dropdown-divider" />
                            <ul
                                class="list-none mb-0"
                                id="header-cart-items-scroll"
                            >
                                <li class="ti-dropdown-item block">
                                    <div
                                        class="flex items-center cart-dropdown-item gap-4"
                                    >
                                        <div class="leading-none">
                                            <span
                                                class="avatar avatar-xl bg-primary/10"
                                            >
                                                <img
                                                    src="../assets/images/ecommerce/png/30.png"
                                                    alt="Wireless Headphones"
                                                />
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <div
                                                class="flex items-center justify-between mb-0"
                                            >
                                                <div
                                                    class="mb-0 text-[14px] font-medium"
                                                >
                                                    <a href="cart.html"
                                                        >Wireless Headphones</a
                                                    >
                                                    <div class="truncate">
                                                        <p
                                                            class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50"
                                                        >
                                                            Wireless freedom
                                                            with crystal-clear
                                                            sound and
                                                            comfortable
                                                        </p>
                                                        <h6
                                                            class="font-medium mb-0 mt-1"
                                                        >
                                                            <span
                                                                class="text-success font-normal me-1 text-[11px] inline-block"
                                                                >(Qty : 1)</span
                                                            >$78
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close"
                                                        ><i
                                                            class="ri-close-line"
                                                        ></i
                                                    ></a>
                                                    <h6
                                                        class="font-medium mb-0 mt-3"
                                                    >
                                                        <span
                                                            class="text-info op-4 font-normal me-1 text-[11px] inline-block"
                                                            >Total :</span
                                                        >$75
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div
                                        class="flex items-center cart-dropdown-item gap-4"
                                    >
                                        <div class="leading-none">
                                            <span
                                                class="avatar avatar-xl bg-primary/10"
                                            >
                                                <img
                                                    src="../assets/images/ecommerce/png/29.png"
                                                    alt="Ladies Hand Bag"
                                                />
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <div
                                                class="flex items-center justify-between mb-0"
                                            >
                                                <div
                                                    class="mb-0 text-[14px] font-medium"
                                                >
                                                    <a href="cart.html"
                                                        >Ladies Hand Bag</a
                                                    >
                                                    <div class="truncate">
                                                        <p
                                                            class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50"
                                                        >
                                                            Both fashion and
                                                            functionality.
                                                        </p>
                                                        <h6
                                                            class="font-medium mb-0 mt-1"
                                                        >
                                                            <span
                                                                class="text-success font-normal me-1 text-[11px] inline-block"
                                                                >(Qty : 2)</span
                                                            >$15
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close"
                                                        ><i
                                                            class="ri-close-line"
                                                        ></i
                                                    ></a>
                                                    <h6
                                                        class="font-medium mb-0 mt-3"
                                                    >
                                                        <span
                                                            class="text-info op-4 font-normal me-1 text-[11px] inline-block"
                                                            >Total :</span
                                                        >$30
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div
                                        class="flex items-center cart-dropdown-item gap-4"
                                    >
                                        <div class="leading-none">
                                            <span
                                                class="avatar avatar-xl bg-primary/10"
                                            >
                                                <img
                                                    src="../assets/images/ecommerce/png/32.png"
                                                    alt="Alarm Clock"
                                                />
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <div
                                                class="flex items-center justify-between mb-0"
                                            >
                                                <div
                                                    class="mb-0 text-[14px] font-medium"
                                                >
                                                    <a href="cart.html"
                                                        >Alarm Clock</a
                                                    >
                                                    <div class="truncate">
                                                        <p
                                                            class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50"
                                                        >
                                                            Add natural beauty
                                                            to your space
                                                        </p>
                                                        <h6
                                                            class="font-medium mb-0 mt-1"
                                                        >
                                                            <span
                                                                class="text-success font-normal me-1 text-[11px] inline-block"
                                                                >(Qty : 1)</span
                                                            >$84
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close"
                                                        ><i
                                                            class="ri-close-line"
                                                        ></i
                                                    ></a>
                                                    <h6
                                                        class="font-medium mb-0 mt-3"
                                                    >
                                                        <span
                                                            class="text-info op-4 font-normal me-1 text-[11px] inline-block"
                                                            >Total :</span
                                                        >$84
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div
                                        class="flex items-center cart-dropdown-item gap-4"
                                    >
                                        <div class="leading-none">
                                            <span
                                                class="avatar avatar-xl bg-primary/10"
                                            >
                                                <img
                                                    src="../assets/images/ecommerce/png/12.png"
                                                    alt="Kids' Party Wear Frock"
                                                />
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <div
                                                class="flex items-center justify-between mb-0"
                                            >
                                                <div
                                                    class="mb-0 text-[14px] font-medium"
                                                >
                                                    <a href="cart.html"
                                                        >Kids' Party Wear
                                                        Frock</a
                                                    >
                                                    <div class="truncate">
                                                        <p
                                                            class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50"
                                                        >
                                                            Crafted from soft,
                                                            breathable fabric
                                                            and adorned with
                                                            delightful
                                                        </p>
                                                        <h6
                                                            class="font-medium mb-0 mt-1"
                                                        >
                                                            <span
                                                                class="text-success font-normal me-1 text-[11px] inline-block"
                                                                >(Qty : 1)</span
                                                            >$37
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close"
                                                        ><i
                                                            class="ri-close-line"
                                                        ></i
                                                    ></a>
                                                    <h6
                                                        class="font-medium mb-0 mt-3"
                                                    >
                                                        <span
                                                            class="text-info op-4 font-normal me-1 text-[11px] inline-block"
                                                            >Total :</span
                                                        >$37
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div
                                        class="flex items-center cart-dropdown-item gap-4"
                                    >
                                        <div class="leading-none">
                                            <span
                                                class="avatar avatar-xl bg-primary/10"
                                            >
                                                <img
                                                    src="../assets/images/ecommerce/png/16.png"
                                                    alt="Smart Watch"
                                                />
                                            </span>
                                        </div>
                                        <div class="flex-auto">
                                            <div
                                                class="flex items-center justify-between mb-0"
                                            >
                                                <div
                                                    class="mb-0 text-[14px] font-medium"
                                                >
                                                    <a href="cart.html"
                                                        >Advanced Smart Watch</a
                                                    >
                                                    <div class="truncate">
                                                        <p
                                                            class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50"
                                                        >
                                                            ultimate in wearable
                                                            technology,combining
                                                            cutting-edge
                                                        </p>
                                                        <h6
                                                            class="font-medium mb-0 mt-1"
                                                        >
                                                            <span
                                                                class="text-success font-normal me-1 text-[11px] inline-block"
                                                                >(Qty : 2)</span
                                                            >$29
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close"
                                                        ><i
                                                            class="ri-close-line"
                                                        ></i
                                                    ></a>
                                                    <h6
                                                        class="font-medium mb-0 mt-3"
                                                    >
                                                        <span
                                                            class="text-info op-4 font-normal me-1 text-[11px] inline-block"
                                                            >Total :</span
                                                        >$48
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div
                                class="p-4 empty-header-item border-t grid items-center"
                            >
                                <a
                                    href="checkout.html"
                                    class="ti-btn ti-btn-primary btn-wave text-center"
                                    >Proceed to checkout</a
                                >
                            </div>
                            <div class="p-[3rem] empty-item hidden">
                                <div class="text-center">
                                    <span
                                        class="avatar avatar-xl avatar-rounded bg-primary/10 !text-primary"
                                    >
                                        <i class="bell-line fs-2"></i>
                                    </span>
                                    <h6 class="font-medium mb-1 mt-3">
                                        Your Cart is Empty
                                    </h6>
                                    <span
                                        class="mb-3 font-normal text-[13px] block"
                                        >Add some items to make me happy
                                        :)</span
                                    >
                                    <a
                                        href="products.html"
                                        class="ti-btn bg-primarytint1color text-white btn-wave ti-btn-sm m-1"
                                        data-abc="true"
                                        >continue shopping
                                        <i class="bi bi-arrow-right ms-1"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li
                        class="header-element notifications-dropdown !hidden xl:!block hs-dropdown ti-dropdown [--auto-close:inside]"
                    >
                        <!-- Start::header-link|dropdown-toggle -->
                        <a
                            href="javascript:void(0);"
                            class="header-link hs-dropdown-toggle ti-dropdown-toggle"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            id="messageDropdown"
                            aria-expanded="false"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 header-link-icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"
                                />
                            </svg>
                            <span
                                class="header-icon-pulse bg-primarytint2color rounded pulse pulse-secondary"
                            ></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div
                            class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu hidden"
                            data-popper-placement="none"
                        >
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <p class="mb-0 text-[15px] font-medium">
                                        Notifications
                                    </p>
                                    <span
                                        class="badge bg-secondary text-white rounded-sm"
                                        id="notifiation-data"
                                        >5 Unread</span
                                    >
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul
                                class="list-none mb-0"
                                id="header-notification-scroll"
                            >
                                <li class="ti-dropdown-item block">
                                    <div class="flex items-center">
                                        <div class="pe-2 leading-none">
                                            <span
                                                class="avatar avatar-md avatar-rounded bg-primary"
                                            >
                                                <img
                                                    src="../assets/images/faces/1.jpg"
                                                    alt="user1"
                                                />
                                            </span>
                                        </div>
                                        <div
                                            class="grow flex items-center justify-between"
                                        >
                                            <div>
                                                <p class="mb-0 font-medium">
                                                    <a href="chat.html"
                                                        >New Messages</a
                                                    >
                                                </p>
                                                <div
                                                    class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate"
                                                >
                                                    Jane Sam sent you a message.
                                                </div>
                                                <div
                                                    class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8"
                                                >
                                                    Now
                                                </div>
                                            </div>
                                            <div>
                                                <a
                                                    href="javascript:void(0);"
                                                    class="min-w-fit-content dropdown-item-close1"
                                                >
                                                    <i
                                                        class="ri-close-line"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div class="flex items-center">
                                        <div class="pe-2 leading-none">
                                            <span
                                                class="avatar avatar-md bg-primary avatar-rounded text-xl"
                                            >
                                                <i
                                                    class="fe fe-shopping-cart leading-none"
                                                ></i>
                                            </span>
                                        </div>
                                        <div
                                            class="grow flex items-center justify-between"
                                        >
                                            <div>
                                                <p class="mb-0 font-medium">
                                                    <a href="chat.html"
                                                        >Order Updates</a
                                                    >
                                                </p>
                                                <div
                                                    class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate"
                                                >
                                                    Order
                                                    <span
                                                        class="text-primarytint1color"
                                                        >#54321</span
                                                    >
                                                    has been shipped.
                                                </div>
                                                <div
                                                    class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8"
                                                >
                                                    2 hours ago
                                                </div>
                                            </div>
                                            <div>
                                                <a
                                                    href="javascript:void(0);"
                                                    class="min-w-fit-content dropdown-item-close1"
                                                >
                                                    <i
                                                        class="ri-close-line"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div class="flex items-center">
                                        <div class="pe-2 leading-none">
                                            <span
                                                class="avatar avatar-md bg-orange avatar-rounded"
                                            >
                                                <img
                                                    src="../assets/images/faces/10.jpg"
                                                    alt="user1"
                                                />
                                            </span>
                                        </div>
                                        <div
                                            class="grow flex items-center justify-between"
                                        >
                                            <div>
                                                <p class="mb-0 font-medium">
                                                    <a href="chat.html"
                                                        >Comment on Post</a
                                                    >
                                                </p>
                                                <div
                                                    class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate"
                                                >
                                                    Reacted:
                                                    <span class="text-primary3"
                                                        >John Richard</span
                                                    >
                                                    on your next purchase!
                                                </div>
                                                <div
                                                    class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8"
                                                >
                                                    2 hours ago
                                                </div>
                                            </div>
                                            <div>
                                                <a
                                                    href="javascript:void(0);"
                                                    class="min-w-fit-content dropdown-item-close1"
                                                >
                                                    <i
                                                        class="ri-close-line"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div class="flex items-center">
                                        <div class="pe-2 leading-none">
                                            <span
                                                class="avatar avatar-md bg-success avatar-rounded"
                                            >
                                                <img
                                                    src="../assets/images/faces/11.jpg"
                                                    alt="user1"
                                                />
                                            </span>
                                        </div>
                                        <div
                                            class="grow flex items-center justify-between"
                                        >
                                            <div>
                                                <p class="mb-0 font-medium">
                                                    <a href="chat.html"
                                                        >Follow Request</a
                                                    >
                                                </p>
                                                <div
                                                    class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate"
                                                >
                                                    <span class="text-info"
                                                        >Kelin Brown</span
                                                    >
                                                    has sent you the request.
                                                </div>
                                                <div
                                                    class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8"
                                                >
                                                    1 Day ago
                                                </div>
                                            </div>
                                            <div>
                                                <a
                                                    href="javascript:void(0);"
                                                    class="min-w-fit-content dropdown-item-close1"
                                                >
                                                    <i
                                                        class="ri-close-line"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-dropdown-item block">
                                    <div class="flex items-center">
                                        <div class="pe-2 leading-none">
                                            <span
                                                class="avatar avatar-md bg-primarytint2color avatar-rounded"
                                            >
                                                <i
                                                    class="ri-gift-line leading-none text-[1rem]"
                                                ></i>
                                            </span>
                                        </div>
                                        <div
                                            class="grow flex items-center justify-between"
                                        >
                                            <div>
                                                <p class="mb-0 font-medium">
                                                    <a href="chat.html"
                                                        >Exclusive Offers</a
                                                    >
                                                </p>
                                                <div
                                                    class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate"
                                                >
                                                    Enjoy<span
                                                        class="text-success"
                                                        >20% off</span
                                                    >
                                                    on your next purchase!
                                                </div>
                                                <div
                                                    class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8"
                                                >
                                                    5 hours ago
                                                </div>
                                            </div>
                                            <div>
                                                <a
                                                    href="javascript:void(0);"
                                                    class="min-w-fit-content dropdown-item-close1"
                                                >
                                                    <i
                                                        class="ri-close-line"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="p-4 empty-header-item1 border-t">
                                <div class="grid">
                                    <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary btn-wave"
                                        >View All</a
                                    >
                                </div>
                            </div>
                            <div class="p-[3rem] empty-item1 hidden">
                                <div class="text-center">
                                    <span
                                        class="avatar avatar-xl avatar-rounded bg-secondary/10 !text-secondary"
                                    >
                                        <i
                                            class="ri-notification-off-line fs-2"
                                        ></i>
                                    </span>
                                    <h6 class="font-medium mt-3">
                                        No New Notifications
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a
                            onclick="openFullscreen();"
                            href="javascript:void(0);"
                            class="header-link"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 full-screen-open header-link-icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"
                                />
                            </svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 full-screen-close header-link-icon hidden"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25"
                                />
                            </svg>
                        </a>
                        <!-- End::header-link -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element ti-dropdown hs-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a
                            href="javascript:void(0);"
                            class="header-link hs-dropdown-toggle ti-dropdown-toggle"
                            id="mainHeaderProfile"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-expanded="false"
                        >
                            <div class="flex items-center">
                                <div>
                                    <img
                                        src="../assets/images/faces/15.jpg"
                                        alt="img"
                                        class="avatar avatar-sm mb-0"
                                    />
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul
                            class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu pt-0 overflow-hidden header-profile-dropdown hidden"
                            aria-labelledby="mainHeaderProfile"
                        >
                            <li>
                                <div
                                    class="ti-dropdown-item text-center border-b border-defaultborder dark:border-defaultborder/10 block"
                                >
                                    <span> Mr.Henry </span>
                                    <span
                                        class="block text-xs text-textmuted dark:text-textmuted/50"
                                        >UI/UX Designer</span
                                    >
                                </div>
                            </li>
                            <li>
                                <a
                                    class="ti-dropdown-item flex items-center"
                                    href="profile.html"
                                    ><i
                                        class="fe fe-user p-1 rounded-full bg-primary/10 text-primary me-2 text-[1rem]"
                                    ></i
                                    >Profile</a
                                >
                            </li>
                            <li>
                                <a
                                    class="ti-dropdown-item flex items-center"
                                    href="mail.html"
                                    ><i
                                        class="fe fe-mail p-1 rounded-full bg-primary/10 text-primary me-2 text-[1rem]"
                                    ></i
                                    >Mail Inbox</a
                                >
                            </li>
                            <li>
                                <a
                                    class="ti-dropdown-item flex items-center"
                                    href="file-manager.html"
                                    ><i
                                        class="fe fe-database p-1 rounded-full bg-primary/10 text-primary klist me-2 text-[1rem]"
                                    ></i
                                    >File Manger<span
                                        class="badge bg-primarytint1color text-white ms-auto text-[0.5625rem]"
                                        >2</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a
                                    class="ti-dropdown-item flex items-center"
                                    href="mail-settings.html"
                                    ><i
                                        class="fe fe-settings p-1 rounded-full bg-primary/10 text-primary ings me-2 text-[1rem]"
                                    ></i
                                    >Settings</a
                                >
                            </li>
                            <li
                                class="border-t border-defaultborder dark:border-defaultborder/10 bg-light"
                            >
                                <a
                                    class="ti-dropdown-item flex items-center"
                                    href="chat.html"
                                    ><i
                                        class="fe fe-help-circle p-1 rounded-full bg-primary/10 text-primary set me-2 text-[1rem]"
                                    ></i
                                    >Help</a
                                >
                            </li>
                            <li>
                                <a
                                    class="ti-dropdown-item flex items-center"
                                    href="sign-in-cover.html"
                                    ><i
                                        class="fe fe-lock p-1 rounded-full bg-primary/10 text-primary ut me-2 text-[1rem]"
                                    ></i
                                    >Log Out</a
                                >
                            </li>
                        </ul>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a
                            href="javascript:void(0);"
                            class="header-link switcher-icon"
                            data-hs-overlay="#hs-overlay-switcher"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 header-link-icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                />
                            </svg>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </li>
                    <!-- End::header-element -->
                </ul>
                <!-- End::header-content-right -->
            </div>
            <!-- End::main-header-container -->
        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar" id="sidebar">
            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img
                        src="../assets/images/brand-logos/toku-logo.jpg"
                        alt="logo"
                        class="desktop-logo"
                    />
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->

            <!-- End::main-sidebar -->
        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div
                    class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2"
                >
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Apps</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Ecommerce</a>
                                </li>
                                <li
                                    class="breadcrumb-item active"
                                    aria-current="page"
                                >
                                    Products List
                                </li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">
                            Products List
                        </h1>
                    </div>
                    <div class="btn-list">
                        <button
                            class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0"
                        >
                            <i
                                class="ri-filter-3-line align-middle me-1 leading-none"
                            ></i>
                            Filter
                        </button>
                        <button
                            class="ti-btn ti-btn-primary !border-0 btn-wave me-0"
                        >
                            <i class="ri-share-forward-line me-1"></i> Share
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Products List</div>
                            </div>
                            <div class="box-body">
                                <div
                                    class="table-responsive overflow-auto table-bordered-default"
                                >
                                    <table class="ti-custom-table text-nowrap">
                                        <thead>
                                            <tr
                                                class="border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <th
                                                    scope="col"
                                                    class="!text-start"
                                                >
                                                    <input
                                                        class="form-check-input check-all"
                                                        type="checkbox"
                                                        id="all-products"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Seller</th>
                                                <th scope="col">Published</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product1"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/30.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                >
                                                                    Wireless
                                                                    Headphones</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                SoundWave
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Electronics</span>
                                                </td>
                                                <td>$1,299</td>
                                                <td>283</td>
                                                <td>
                                                    <span
                                                        class="badge bg-primary/10 text-primary"
                                                        >Published</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/4.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Mayor Kelly</a
                                                        >
                                                    </div>
                                                </td>
                                                <td>24,Nov 2023 - 04:42PM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product2"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/14.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                >
                                                                    Elegant
                                                                    Flower
                                                                    Pot</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                Serene Garden
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Ceramic</span>
                                                </td>
                                                <td>$799</td>
                                                <td>98</td>
                                                <td>
                                                    <span
                                                        class="badge bg-danger/10 text-danger"
                                                        >Unpublished</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/15.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Andrew Garfield
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>18,Nov 2023 - 06:53AM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product3"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/31.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    >Wireless
                                                                    Earbuds</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                AirPods Max
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Electronics</span>
                                                </td>
                                                <td>$2,499</td>
                                                <td>194</td>
                                                <td>
                                                    <span
                                                        class="badge bg-primary/10 text-primary"
                                                        >Published</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/11.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Simon Cowel
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>12,Aug 2023 - 11:21AM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product4"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/12.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    >Kids' Party
                                                                    Wear
                                                                    Frock</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                Twinkle Twirl
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Fashion Wear</span>
                                                </td>
                                                <td>$899</td>
                                                <td>267</td>
                                                <td>
                                                    <span
                                                        class="badge bg-danger/10 text-danger"
                                                        >Unpublished</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/8.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Mirinda Hers</a
                                                        >
                                                    </div>
                                                </td>
                                                <td>05,Sep 2023 - 10:14AM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product5"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/32.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    >Alarm
                                                                    Clock</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                Midest Brand
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Home Needs</span>
                                                </td>
                                                <td>$499</td>
                                                <td>143</td>
                                                <td>
                                                    <span
                                                        class="badge bg-primary/10 text-primary"
                                                        >Published</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/1.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Simon Cowel</a
                                                        >
                                                    </div>
                                                </td>
                                                <td>18,Nov 2023 - 14:35PM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product6"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/23.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    >Advanced
                                                                    Smartwatch</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                SmartSync 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Watches</span>
                                                </td>
                                                <td>$999</td>
                                                <td>365</td>
                                                <td>
                                                    <span
                                                        class="badge bg-primary/10 text-primary"
                                                        >Published</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/2.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Mirinda Hers</a
                                                        >
                                                    </div>
                                                </td>
                                                <td>27,Nov 2023 - 05:12AM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="product-list border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <td class="product-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="product7"
                                                        value=""
                                                        aria-label="..."
                                                    />
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span
                                                            class="avatar avatar-md avatar-square bg-light"
                                                            ><img
                                                                src="../assets/images/ecommerce/png/15.png"
                                                                class="w-full h-full"
                                                                alt="..."
                                                        /></span>
                                                        <div class="ms-2">
                                                            <p
                                                                class="font-semibold mb-0 flex items-center"
                                                            >
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    >Sport
                                                                    shoe</a
                                                                >
                                                            </p>
                                                            <p
                                                                class="text-xs text-textmuted dark:text-textmuted/50 mb-0"
                                                            >
                                                                Conit Brand
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Sports</span>
                                                </td>
                                                <td>$1,499</td>
                                                <td>257</td>
                                                <td>
                                                    <span
                                                        class="badge bg-danger/10 text-danger"
                                                        >Unpublished</span
                                                    >
                                                </td>
                                                <td>
                                                    <div
                                                        class="flex items-center font-semibold"
                                                    >
                                                        <span
                                                            class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded"
                                                        >
                                                            <img
                                                                src="../assets/images/faces/9.jpg"
                                                                alt=""
                                                            />
                                                        </span>
                                                        <a
                                                            href="javascript:void(0);"
                                                            >Jhon Trendy</a
                                                        >
                                                    </div>
                                                </td>
                                                <td>29,Nov 2023 - 16:32PM</td>
                                                <td>
                                                    <div
                                                        class="flex flex-row items-center !gap-2 text-[0.9375rem]"
                                                    >
                                                        <a
                                                            aria-label="anchor"
                                                            href="edit-products.html"
                                                            class="ti-btn btn-wave ti-btn-sm ti-btn-soft-primary waves-effect waves-light"
                                                            ><i
                                                                class="ri-edit-line"
                                                            ></i
                                                        ></a>
                                                        <a
                                                            aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="ti-btn btn-wave product-btn ti-btn-sm ti-btn-soft-danger waves-effect waves-light"
                                                            ><i
                                                                class="ri-delete-bin-line"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div
                                    class="flex items-center flex-wrap overflow-auto"
                                >
                                    <div class="mt-2">
                                        Showing <b>1</b> to <b>5</b> of
                                        <b>10</b> entries
                                        <i
                                            class="bi bi-arrow-right ms-2 font-semibold"
                                        ></i>
                                    </div>
                                    <div class="ms-auto my-2">
                                        <nav aria-label="" class="">
                                            <ul
                                                class="ti-pagination mb-0 !p-0 justify-end float-end"
                                            >
                                                <li class="page-item disabled">
                                                    <a
                                                        class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !border-e-0 !rounded-tr-none !rounded-br-none"
                                                        >Previo</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                        href="javascript:void(0);"
                                                        >1</a
                                                    >
                                                </li>
                                                <li
                                                    class="page-item"
                                                    aria-current="page"
                                                >
                                                    <a
                                                        class="page-link active px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                        href="javascript:void(0);"
                                                        >2</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                        href="javascript:void(0);"
                                                        >3</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                        href="javascript:void(0);"
                                                        >4</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-none !border-e-0"
                                                        href="javascript:void(0);"
                                                        >5</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link px-3 py-[0.375rem] !text-[1rem] bg-white dark:bg-bodybg !rounded-tl-none !rounded-bl-none !border-s-0"
                                                        href="javascript:void(0);"
                                                        >Siguiente</a
                                                    >
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
            </div>
        </div>
        <!-- End::app-content -->

        <footer
            class="mt-auto py-4 bg-white dark:bg-bodybg text-center border-t border-defaultborder dark:border-defaultborder/10"
        >
            <div class="container">
                <span class="text-textmuted dark:text-textmuted/50">
                    Copyright © <span id="year"></span>
                    <a href="javascript:void(0);" class="text-dark font-medium"
                        >TOKU</a
                    >. Designed with
                    <span class="text-danger">&#10084;</span> by
                    <a href="javascript:void(0);">
                        <span class="font-medium text-primary">Web Unify</span>
                    </a>
                    Todos los derechos reservados
                </span>
            </div>
        </footer>

        <div
            class="hs-overlay ti-modal hidden"
            id="header-responsive-search"
            tabindex="-1"
            aria-labelledby="header-responsive-search"
            aria-hidden="true"
        >
            <div class="ti-modal-box">
                <div class="ti-modal-dialog">
                    <div class="ti-modal-content">
                        <div class="ti-modal-body">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control border-end-0 !border-s"
                                    placeholder="Search Anything ..."
                                    aria-label="Search Anything ..."
                                    aria-describedby="button-addon2"
                                />
                                <button
                                    class="ti-btn ti-btn-primary !m-0"
                                    type="button"
                                    id="button-addon2"
                                >
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
