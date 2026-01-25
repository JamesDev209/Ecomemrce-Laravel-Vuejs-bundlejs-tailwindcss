<script setup>
import { useRouter } from "vue-router";
import { ref } from "vue";
import user2 from "../../../../assets/images/users/user2.jpg";

const openProfile = ref(false);

const toggleProfile = () => {
    openProfile.value = !openProfile.value;
};

//Bloque de codigo para redirigir al login
const router = useRouter()

const goToLogin = () => {
    router.push('/admin/login')
}

</script>

<template>
    <header class="app-header sticky" id="header">
        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">
            <!-- Start::header-content-left -->
            <div class="header-content-left">
                <!-- Start::header-element -->
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
                </li>

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
                        <hr class="dropdown-divider" />
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
                                <span class="mb-3 font-normal text-[13px] block"
                                    >Add some items to make me happy :)</span
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
                <li class="relative">
                    <button
                        @click="toggleProfile"
                        type="button"
                        class="header-link"
                    >
                        <img :src="user2" class="avatar avatar-sm" />
                    </button>

                    <ul
                        v-if="openProfile"
                        class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded z-50"
                    >
                        <li>
                            <button
                                @click="goToLogin"
                                class="block w-full text-left px-4 py-2 hover:bg-gray-100"
                            >
                                Logout
                            </button>
                        </li>

                    </ul>
                </li>

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
</template>
