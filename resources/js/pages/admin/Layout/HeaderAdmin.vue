<script setup>
import Sidebar from '../components/Sidebar.vue';
</script>

<template>
    
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
                        <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                        <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                        <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                        <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                        <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                        <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element mx-lg-0">
                <button  aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-align-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M10 12l10 0" /><path d="M6 18l14 0" /></svg>
                </button>
            </div>
            <!-- End::header-element -->

        
        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <ul class="header-content-right">

            <!-- Start::header-element -->
            <li class="header-element md:!hidden block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                    data-hs-overlay="#header-responsive-search">
                    <!-- Start::header-link-icon -->
                    <i class="bi bi-search header-link-icon"></i>
                    <!-- End::header-link-icon -->
                </a>
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li
                class="header-element country-selector hs-dropdown ti-dropdown  hidden sm:block [--placement:bottom-right] rtl:[--placement:bottom-left]">
                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10"></div>
                <!-- Start::header-link|dropdown-toggle -->
             
                <!-- End::header-link|dropdown-toggle -->
                
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
        

            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element cart-dropdown hs-dropdown ti-dropdown [--auto-close:inside]">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link hs-dropdown-toggle ti-dropdown-toggle"
                    data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    
                  
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu hidden" data-popper-placement="none">
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <p class="mb-0 text-[15px] font-medium"><span
                                    class="badge bg-primarytint2color text-white ms-1 !py-[0.15rem] rounded-full"
                                    id="cart-data">5</span></p>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-medium text-textmuted dark:text-textmuted/50">Sub Total :
                                </span>
                                <h6 class="mb-0"> L740</h6>
                            </div>
                        </div>
                    </div>
                    <hr class="dropdown-divider">
                    <ul class="list-none mb-0" id="header-cart-items-scroll">
                        <li class="ti-dropdown-item block">
                            <div class="flex items-center cart-dropdown-item gap-4">
                                <div class="leading-none">
                                    <span class="avatar avatar-xl bg-primary/10">
                                        <img src="../assets/images/ecommerce/png/30.png" alt="Wireless Headphones">
                                    </span>
                                </div>
                                <div class="flex-auto">
                                    <div class="flex items-center justify-between mb-0">
                                        <div class="mb-0 text-[14px] font-medium">
                                            <a href="cart.html">Wireless Headphones</a>
                                            <div class="truncate">
                                                <p
                                                    class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50">
                                                    Wireless freedom with crystal-clear sound and comfortable </p>
                                                <h6 class="font-medium mb-0 mt-1"><span
                                                        class="text-success font-normal me-1 text-[11px] inline-block">(Qty
                                                        : 1)</span>$78</h6>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close"><i
                                                    class="ri-close-line"></i></a>
                                            <h6 class="font-medium mb-0 mt-3"><span
                                                    class="text-info op-4 font-normal me-1 text-[11px] inline-block">Total
                                                    :</span>$75</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ti-dropdown-item block">
                            <div class="flex items-center cart-dropdown-item gap-4">
                                <div class="leading-none">
                                    <span class="avatar avatar-xl bg-primary/10">
                                        <img src="../assets/images/ecommerce/png/29.png" alt="Ladies Hand Bag">
                                    </span>
                                </div>
                                <div class="flex-auto">
                                    <div class="flex items-center justify-between mb-0">
                                        <div class="mb-0 text-[14px] font-medium">
                                            <a href="cart.html">Ladies Hand Bag</a>
                                            <div class="truncate">
                                                <p
                                                    class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50">
                                                    Both fashion and functionality. </p>
                                                <h6 class="font-medium mb-0 mt-1"><span
                                                        class="text-success font-normal me-1 text-[11px] inline-block">(Qty
                                                        : 2)</span>$15</h6>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close"><i
                                                    class="ri-close-line"></i></a>
                                            <h6 class="font-medium mb-0 mt-3"><span
                                                    class="text-info op-4 font-normal me-1 text-[11px] inline-block">Total
                                                    :</span>$30</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ti-dropdown-item block">
                            <div class="flex items-center cart-dropdown-item gap-4">
                                <div class="leading-none">
                                    <span class="avatar avatar-xl bg-primary/10">
                                        <img src="../assets/images/ecommerce/png/32.png" alt="Alarm Clock">
                                    </span>
                                </div>
                                <div class="flex-auto">
                                    <div class="flex items-center justify-between mb-0">
                                        <div class="mb-0 text-[14px] font-medium">
                                            <a href="cart.html">Alarm Clock</a>
                                            <div class="truncate">
                                                <p
                                                    class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50">
                                                    Add natural beauty to your space </p>
                                                <h6 class="font-medium mb-0 mt-1"><span
                                                        class="text-success font-normal me-1 text-[11px] inline-block">(Qty
                                                        : 1)</span>$84</h6>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close"><i
                                                    class="ri-close-line"></i></a>
                                            <h6 class="font-medium mb-0 mt-3"><span
                                                    class="text-info op-4 font-normal me-1 text-[11px] inline-block">Total
                                                    :</span>$84</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ti-dropdown-item block">
                            <div class="flex items-center cart-dropdown-item gap-4">
                                <div class="leading-none">
                                    <span class="avatar avatar-xl bg-primary/10">
                                        <img src="../assets/images/ecommerce/png/12.png" alt="Kids' Party Wear Frock">
                                    </span>
                                </div>
                                <div class="flex-auto">
                                    <div class="flex items-center justify-between mb-0">
                                        <div class="mb-0 text-[14px] font-medium">
                                            <a href="cart.html">Kids' Party Wear Frock</a>
                                            <div class="truncate">
                                                <p
                                                    class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50">
                                                    Crafted from soft, breathable fabric and adorned with delightful
                                                </p>
                                                <h6 class="font-medium mb-0 mt-1"><span
                                                        class="text-success font-normal me-1 text-[11px] inline-block">(Qty
                                                        : 1)</span>$37</h6>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close"><i
                                                    class="ri-close-line"></i></a>
                                            <h6 class="font-medium mb-0 mt-3"><span
                                                    class="text-info op-4 font-normal me-1 text-[11px] inline-block">Total
                                                    :</span>$37</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ti-dropdown-item block">
                            <div class="flex items-center cart-dropdown-item gap-4">
                                <div class="leading-none">
                                    <span class="avatar avatar-xl bg-primary/10">
                                        <img src="../assets/images/ecommerce/png/16.png" alt="Smart Watch">
                                    </span>
                                </div>
                                <div class="flex-auto">
                                    <div class="flex items-center justify-between mb-0">
                                        <div class="mb-0 text-[14px] font-medium">
                                            <a href="cart.html">Advanced Smart Watch</a>
                                            <div class="truncate">
                                                <p
                                                    class="mb-0 header-cart-text truncate text-[11px] text-textmuted dark:text-textmuted/50">
                                                    ultimate in wearable technology,combining cutting-edge </p>
                                                <h6 class="font-medium mb-0 mt-1"><span
                                                        class="text-success font-normal me-1 text-[11px] inline-block">(Qty
                                                        : 2)</span>$29</h6>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove dropdown-item-close"><i
                                                    class="ri-close-line"></i></a>
                                            <h6 class="font-medium mb-0 mt-3"><span
                                                    class="text-info op-4 font-normal me-1 text-[11px] inline-block">Total
                                                    :</span>$48</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-4 empty-header-item border-t grid items-center">
                        <a href="checkout.html" class="ti-btn ti-btn-primary btn-wave text-center">Proceed to
                            checkout</a>
                    </div>
                    <div class="p-[3rem] empty-item hidden">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-primary/10 !text-primary">
                                <i class="bell-line fs-2"></i>
                            </span>
                            <h6 class="font-medium mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 font-normal text-[13px] block">Add some items to make me happy :)</span>
                            <a href="products.html"
                                class="ti-btn bg-primarytint1color text-white btn-wave ti-btn-sm m-1"
                                data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element header-fullscreen">
                <!-- Start::header-link -->
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-open header-link-icon"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-close header-link-icon hidden"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
                    </svg>
                </a>
                <!-- End::header-link -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element ti-dropdown hs-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link hs-dropdown-toggle ti-dropdown-toggle"
                    id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="flex items-center">
                        <div>
                            <img src="../assets/images/faces/15.jpg" alt="img" class="avatar avatar-sm mb-0">
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu pt-0 overflow-hidden header-profile-dropdown hidden"
                    aria-labelledby="mainHeaderProfile">
                    <li>
                        <div
                            class="ti-dropdown-item text-center border-b border-defaultborder dark:border-defaultborder/10 block">
                            <span>
                                Mr.Henry
                            </span>
                            <span class="block text-xs text-textmuted dark:text-textmuted/50">UI/UX Designer</span>
                        </div>
                    </li>
                    <li><a class="ti-dropdown-item flex items-center" href="profile.html"><i
                                class="fe fe-user p-1 rounded-full bg-primary/10 text-primary me-2 text-[1rem]"></i>Profile</a>
                    </li>
                    <li><a class="ti-dropdown-item flex items-center" href="mail.html"><i
                                class="fe fe-mail p-1 rounded-full bg-primary/10 text-primary me-2 text-[1rem]"></i>Mail
                            Inbox</a></li>
                    <li><a class="ti-dropdown-item flex items-center" href="file-manager.html"><i
                                class="fe fe-database p-1 rounded-full bg-primary/10 text-primary klist me-2 text-[1rem]"></i>File
                            Manger<span
                                class="badge bg-primarytint1color text-white ms-auto text-[0.5625rem]">2</span></a></li>
                    <li><a class="ti-dropdown-item flex items-center" href="mail-settings.html"><i
                                class="fe fe-settings p-1 rounded-full bg-primary/10 text-primary ings me-2 text-[1rem]"></i>Settings</a>
                    </li>
                    <li class="border-t border-defaultborder dark:border-defaultborder/10 bg-light"><a
                            class="ti-dropdown-item flex items-center" href="chat.html"><i
                                class="fe fe-help-circle p-1 rounded-full bg-primary/10 text-primary set me-2 text-[1rem]"></i>Help</a>
                    </li>
                    <li><a class="ti-dropdown-item flex items-center" href="sign-in-cover.html"><i
                                class="fe fe-lock p-1 rounded-full bg-primary/10 text-primary ut me-2 text-[1rem]"></i>Log
                            Out</a></li>
                </ul>
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a href="javascript:void(0);" class="header-link switcher-icon" data-hs-overlay="#hs-overlay-switcher">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
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


<!--SIDEBAR INIT-->

<Sidebar/>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Start::page-header -->
                <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">
                                        Dashboards
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-list">
                    </div>
                </div>
                <!-- End::page-header -->

                <!-- Start: row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-9 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box overflow-hidden main-content-card">
                                    <div class="box-body">
                                        <div class="flex justify-between">
                                            <div>
                                                <div
                                                    class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                    Ingreso por Comisiones</div>
                                                <div class="text-[23px] font-medium mb-0">L 3,250.00</div>
                                            </div>
                                            <div class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden main-content-card">
                                    <div class="box-body">
                                        <div class="flex justify-between">
                                            <div>
                                                <div
                                                    class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                    Ingreso Por Membresias</div>
                                                <div class="text-[23px] font-medium mb-0">L 65,5935</div>
                                            </div>
                                            <div class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="box overflow-hidden main-content-card">
                                    <div class="box-body">
                                        <div class="flex justify-between">
                                            <div>
                                                <div
                                                    class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                    Total de Pedidos </div>
                                                <div class="text-[23px] font-medium mb-0">L 45,5935</div>
                                                
                                            </div>
                                            <div class="avatar avatar-md bg-primarytint3color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden main-content-card">
                                    <div class="box-body">
                                        <div class="flex justify-between">
                                            <div>
                                                <div
                                                    class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                    Ingresos Por Delivery</div>
                                                <div class="text-[23px] font-medium mb-0">L 65,5935</div>
                                            </div>
                                            <div class="avatar avatar-md bg-primarytint1color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M168,56a8,8,0,0,1,8-8h16V32a8,8,0,0,1,16,0V48h16a8,8,0,0,1,0,16H208V80a8,8,0,0,1-16,0V64H176A8,8,0,0,1,168,56Zm62.56,54.68a103.92,103.92,0,1,1-85.24-85.24,8,8,0,0,1-2.64,15.78A88.07,88.07,0,0,0,40,128a87.62,87.62,0,0,0,22.24,58.41A79.66,79.66,0,0,1,98.3,157.66a48,48,0,1,1,59.4,0,79.66,79.66,0,0,1,36.06,28.75A87.62,87.62,0,0,0,216,128a88.85,88.85,0,0,0-1.22-14.68,8,8,0,1,1,15.78-2.64ZM128,152a32,32,0,1,0-32-32A32,32,0,0,0,128,152Zm0,64a87.57,87.57,0,0,0,53.92-18.5,64,64,0,0,0-107.84,0A87.57,87.57,0,0,0,128,216Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="box overflow-hidden main-content-card">
                                    <div class="box-body">
                                        <div class="flex justify-between">
                                            <div>
                                                <div
                                                    class="flex-auto text-[13px] text-textmuted dark:text-textmuted/50">
                                                     Ingresos Total</div>
                                                <div class="text-[23px] font-medium mb-0">L 4,350.17</div>
                                            </div>
                                            <div class="avatar avatar-md bg-primarytint1color svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path
                                                        d="M168,56a8,8,0,0,1,8-8h16V32a8,8,0,0,1,16,0V48h16a8,8,0,0,1,0,16H208V80a8,8,0,0,1-16,0V64H176A8,8,0,0,1,168,56Zm62.56,54.68a103.92,103.92,0,1,1-85.24-85.24,8,8,0,0,1-2.64,15.78A88.07,88.07,0,0,0,40,128a87.62,87.62,0,0,0,22.24,58.41A79.66,79.66,0,0,1,98.3,157.66a48,48,0,1,1,59.4,0,79.66,79.66,0,0,1,36.06,28.75A87.62,87.62,0,0,0,216,128a88.85,88.85,0,0,0-1.22-14.68,8,8,0,1,1,15.78-2.64ZM128,152a32,32,0,1,0-32-32A32,32,0,0,0,128,152Zm0,64a87.57,87.57,0,0,0,53.92-18.5,64,64,0,0,0-107.84,0A87.57,87.57,0,0,0,128,216Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="xl:col-span-9 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">Tendencia de ventas</div>
                                        <div class="flex gap-2">
                                            <div class="ti-btn ti-btn-sm ti-btn-outline-light">Hora</div>
                                            <div class="ti-btn ti-btn-sm ti-btn-outline-light">Semanal</div>
                                            <div class="ti-btn ti-btn-sm ti-btn-light">Anual</div>
                                        </div>
                                    </div>
                                    <div class="box-body pb-2">
                                        <div id="sales-report"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="xxl:col-span-8 xl:col-span-7 col-span-12">
                                <div class="box overflow-hidden">
                                    
                                    <!-- <div class="box-header justify-between">
                                        <div class="box-title">Recent Orders</div>
                                        <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-outline-light border ti-btn-sm flex items-center !text-textmuted dark:text-textmuted/50">
                                            Ver todo
                                        </a>
                                    </div> -->
                                    
                                    <div class="box-body p-0">
                                        
                                        <!-- <div class="table-responsive">
                                            <table class="ti-custom-table ti-custom-table-head ti-custom-table-hover">
                                                <thead>
                                                    <tr
                                                        class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                        <th scope="col">Número de ID</th>
                                                        <th scope="col">Cliente</th>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Monto</th>
                                                        <th scope="col">Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                        <td><a href="javascript:void(0);"
                                                                class="text-primary">#SKU0781</a></td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm">
                                                                        <img src="../assets/images/faces/15.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[14px] font-medium">Juan Perez
                                                                        </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="block text-textmuted dark:text-textmuted/50">Mar
                                                                18,2025</span>
                                                        </td>
                                                        <td>
                                                            <span class="block mb-1">$2,145.90</span>
                                                        </td>
                                                        <td><span class="badge bg-success/10 text-success">Pagado</span>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                        <td><a href="javascript:void(0);"
                                                                class="text-primary">#SPK782</a></td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm">
                                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[14px] font-medium">Elsa Díaz</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="block text-textmuted dark:text-textmuted/50">Mar
                                                                20,2025</span>
                                                        </td>
                                                        <td>
                                                            <span class="block mb-1">$2,145.90</span>
                                                        </td>
                                                        <td><span class="badge bg-danger/10 text-danger">No Pagado</span>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                        <td><a href="javascript:void(0);"
                                                                class="text-primary">#SPK783</a></td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm">
                                                                        <img src="../assets/images/faces/5.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[14px] font-medium">Gloria López</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="block text-textmuted dark:text-textmuted/50">Mar
                                                                24,2025</span>
                                                        </td>
                                                        <td>
                                                            <span class="block mb-1">$2,145.90</span>
                                                        </td>
                                                        <td><span class="badge bg-success/10 text-success">Pagado</span>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                        <td><a href="javascript:void(0);"
                                                                class="text-primary">#SPK784</a></td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm">
                                                                        <img src="../assets/images/faces/6.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[14px] font-medium">Marcela Campos</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="block text-textmuted dark:text-textmuted/50">Mar
                                                                25,2025</span>
                                                        </td>
                                                        <td>
                                                            <span class="block mb-1">$2,145.90</span>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-warning/10 text-warning">Pendiente</span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="border-b  !border-defaultborder dark:!border-defaultborder/10">
                                                        <td><a href="javascript:void(0);"
                                                                class="text-primary">#SPK785</a></td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm">
                                                                        <img src="../assets/images/faces/11.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[14px] font-medium">Adam Smith</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="block text-textmuted dark:text-textmuted/50">Mar
                                                                18,2025</span>
                                                        </td>
                                                        <td>
                                                            <span class="block mb-1">$2,145.90</span>
                                                        </td>
                                                        <td><span class="badge bg-danger/10 text-danger">No Pagado</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="xxl:col-span-4 xl:col-span-5 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">#Total de Ordenes
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button
                                                class="ti-btn ti-btn-outline-light border flex items-center !text-textmuted dark:text-textmuted/50 ti-dropdown-toggle ti-btn-sm hs-dropdown-toggle"
                                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Ver todo <i
                                                    class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Yearly</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Monthly
                                                    </a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Weakly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div
                                            class="flex justify-between items-center text-center bg-light p-4 rounded-sm order-content">
                                            <div>
                                                <p class="mb-1">Total de Ordenes</p>
                                                <h4 class="text-primary mb-0">12,500</h4>
                                            </div>
                                            <div>
                                                <p class="mb-1 text-center">Total de ordenes</p>
                                                <h5 class="text-success mb-0 text-center">+15%</h5>
                                            </div>
                                        </div>
                                        <div id="total-orders"></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        
                    </div>
                    <div class="xxl:col-span-3 col-span-12">
                  
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Top 5 comercios</div>
                                <a href="javascript:void(0);"
                                    class="ti-btn ti-btn-outline-light border flex items-center text-textmuted dark:text-textmuted/50 text-xs px-2 py-[0.26rem]">
                                    Ver todo
                                </a>
                            </div>
                            <div class="box-body">
                                <ul class="list-none mb-0" id="product-list">
                                    <li class="">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                              
                                            </div>
                                            <div class=" flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Comercio Zapateria</span>
                                                <span
                                                    class="text-textmuted dark:text-textmuted/50 text-xs">Ventas de comercio
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-[14px] font-medium">L124,000.00</p>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">260
                                                    Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                               
                                            </div>
                                            <div class="flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Comercio Estilistas</span>
                                                <span
                                                    class="text-textmuted dark:text-textmuted/50 text-xs">Ventas de comercio</span>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-[14px] font-medium">L15,640.00</p>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">181
                                                 Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                             
                                            </div>
                                            <div class="flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Comercio D1</span>
                                                <span
                                                    class="text-textmuted dark:text-textmuted/50 text-xs">Ventas de comercio</span>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-[14px] font-medium">L16,000.00</p>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">134
                                                    Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">

                                            </div>
                                            <div class="flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Comercio Ara</span>
                                                <span
                                                    class="text-textmuted dark:text-textmuted/50 text-xs">Ventas de comercio</span>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-[14px] font-medium">L7,690.00</p>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">127
                                                    Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                                
                                            </div>
                                            <div class="flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Comercio Electronico</span>
                                                <span
                                                    class="text-textmuted dark:text-textmuted/50 text-xs">Ventas de comercio</span>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-[14px] font-medium">L12,000.00</p>
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">108
                                                    Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                           <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Top Membresias</div>
                                <a href="javascript:void(0);"
                                    class="ti-btn ti-btn-outline-light border flex items-center text-textmuted dark:text-textmuted/50 text-xs px-2 py-[0.26rem]">
                                    Ver todo
                                </a>
                            </div>
                            <div class="box-body">
                                <ul class="list-none mb-0" id="product-list">
                                    <li class="">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                              
                                            </div>
                                            <div class=" flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Estandar</span>
                                              
                                            </div>
                                            <div class="text-end">
                                     
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">160
                                                    Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                               
                                            </div>
                                            <div class="flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Primium</span>
                         
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">124
                                                 Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div class="flex items-center flex-wrap">
                                            <div class="me-3 leading-none">
                                                
                                            </div>
                                            <div class="flex-auto">
                                                <span class="text-[14px] block mb-0 font-medium">Basica</span>
                                    
                                            </div>
                                            <div class="text-end">
                           
                                                <p class="mb-0 text-textmuted dark:text-textmuted/50 text-[14px]">93
                                                    Ventas</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="box">
                            <div class="box-header justify-between pb-0">
                                <div class="box-title"> Actividad Reciente </div>
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);"
                                        class="text-xs text-textmuted dark:text-textmuted/50 bg-light rounded ti-btn ti-btn-sm ti-btn-light"
                                        data-bs-toggle="dropdown" aria-expanded="false">    Ver todo<i
                                            class="ri-arrow-down-s-line align-middle inline-block"></i> </a>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Hoy</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Esta Semana</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box-body p-0">
                                <div class="p-4 pb-0">
                                    <div class="progress-stacked progress-sm mb-3 flex gap-1">
                                        <div class="progress-bar w-[25%]" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-primarytint1color w-[15%] !rounded-none" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-primarytint2color !rounded-none w-[15%]" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-primarytint3color !rounded-none w-[20%]" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !rounded-none !rounded-tr-md !rounded-br-md bg-secondary w-[25%]" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="box-body">
                                <ul class="list-none mb-0 ecommerce-recent-activity">
                                    <li class="ecommerce-recent-activity-content">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-primary avatar-rounded">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium">Nueva Orden - #12345</span>
                                                <span class="block text-xs text-textmuted dark:text-textmuted/50">2
                                                    ordenes comprados</span>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">3
                                                    horas atrás</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ecommerce-recent-activity-content">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-success avatar-rounded">
                                                    <i class="ri-checkbox-circle-line text-[14px]"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium">Orden entregada - #12345</span>
                                                <span
                                                    class="block text-xs text-textmuted dark:text-textmuted/50">Entrega
                                                    via FedEx</span>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">1
                                                    Ayer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ecommerce-recent-activity-content">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-primarytint1color avatar-rounded">
                                                    <i class="ri-add-circle-line text-[14px]"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium"> Agregaste nuevos productos</span>
                                                <span
                                                    class="block text-xs text-textmuted dark:text-textmuted/50 pb-2">Categoría Moda</span>
                                                <a href="javascript:void(0);" class="avatar avatar-sm bg-gray-200">
                                                    <img src="../assets/images/ecommerce/png/7.png" alt="">
                                                </a>
                                                <a href="javascript:void(0);" class="avatar avatar-sm bg-gray-200">
                                                    <img src="../assets/images/ecommerce/png/12.png" alt="">
                                                </a>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">12
                                                    días atrás</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ecommerce-recent-activity-content">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-danger avatar-rounded">
                                                    <i class="ri-heart-3-line text-[14px]"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium">Producto Favorito - iPhone 12 Pro</span>
                                                <span class="block text-xs text-textmuted dark:text-textmuted/50">Agregado por Ana Goméz</span>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">2
                                                    días atrás</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ecommerce-recent-activity-content">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-warning avatar-rounded">
                                                    <i class="ri-star-line text-[14px]"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium">Producto Calificado - Samsung Galaxy
                                                    S21</span>
                                                <span class="block text-xs text-textmuted dark:text-textmuted/50">Calificación
                                                    4.5 stars por Antonio Perez</span>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">3
                                                    días atrás</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ecommerce-recent-activity-content">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-info avatar-rounded">
                                                    <i class="ri-price-tag-3-line text-[14px]"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium">Producto en descuento - Nike Air Max</span>
                                                <span
                                                    class="block text-xs text-textmuted dark:text-textmuted/50">Descuento aplicado con éxito</span>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">4
                                                    días atrás</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ecommerce-recent-activity-content !pb-0">
                                        <div class="flex items-top">
                                            <div class="me-3">
                                                <span class="avatar avatar-sm bg-secondary avatar-rounded">
                                                    <i class="ri-chat-1-line text-[14px]"></i>
                                                </span>
                                            </div>
                                            <div class="activity-content">
                                                <span class="block font-medium">Pregunta de cliente en orden - ID:
                                                    #12346</span>
                                                <span
                                                    class="block text-xs text-textmuted dark:text-textmuted/50">Pregunta por parte del cliente</span>
                                            </div>
                                            <div class="flex-auto text-end">
                                                <span
                                                    class="block text-textmuted dark:text-textmuted/50 text-[11px] opacity-70">5
                                                    días atrás</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Newly Added Products
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <div> <input class="form-control form-control-sm" type="text"
                                            placeholder="Search Here" aria-label=".form-control-sm example"> </div>
                                    <div class="hs-dropdown ti-dropdown"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary ti-btn-sm !m-0 btn-wave waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i> </a>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive overflow-auto table-bordered-default">
                                    <table class="ti-custom-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Product Id</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Product Name</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Category</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">%
                                                    Discount</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Price</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Status</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Added Date</th>
                                                <th scope="col"
                                                    class="border-b border-defaultborder dark:border-defaultborder/10">
                                                    Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="font-medium">#1547988</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md bg-light">
                                                                <img src="../assets/images/ecommerce/png/12.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[14px]">Sweater Coat</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="font-medium">Women's wear</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary leading-none">40%</span>
                                                </td>
                                                <td>
                                                    $241.08
                                                </td>
                                                <td>
                                                    <span class="badge bg-success/10 text-success">Published</span>
                                                </td>
                                                <td>
                                                    <span class="font-medium">15-05-5</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                            <i
                                                                class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               View
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                            <i
                                                                class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Edit
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                            <i
                                                            class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Delete
                                                            </span>
                                                        </a>
                                                       </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-medium">#1415023</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md bg-light">
                                                                <img src="../assets/images/ecommerce/png/6.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[14px]">Cushion Chair</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="font-medium">Furniture</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary leading-none">30%</span>
                                                </td>
                                                <td>
                                                    $1,489.00
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning/10 text-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <span class="font-medium">20-05-5</span>
                                                </td>
                                                <td>
                                                   <div class="btn-list">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                            <i
                                                                class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               View
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                            <i
                                                                class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Edit
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                            <i
                                                            class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Delete
                                                            </span>
                                                        </a>
                                                       </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-medium">#4578162</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md bg-light">
                                                                <img src="../assets/images/ecommerce/png/23.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[14px]">Smart Watch</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="font-medium">Gadgets</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary leading-none">10%</span>
                                                </td>
                                                <td>
                                                    $2,457.08
                                                </td>
                                                <td>
                                                    <span class="badge bg-info/10 text-info">Saved as Draft</span>
                                                </td>
                                                <td>
                                                    <span class="font-medium">06-02-5</span>
                                                </td>
                                                <td>
                                                   <div class="btn-list">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                            <i
                                                                class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               View
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                            <i
                                                                class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Edit
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                            <i
                                                            class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Delete
                                                            </span>
                                                        </a>
                                                       </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-medium">#4578954</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md bg-light">
                                                                <img src="../assets/images/ecommerce/png/32.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[14px]">Alarm Clock</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="font-medium">Home Decor</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary leading-none">20%</span>
                                                </td>
                                                <td>
                                                    $359.99
                                                </td>
                                                <td>
                                                    <span class="badge bg-success/10 text-success">Published</span>
                                                </td>
                                                <td>
                                                    <span class="font-medium">26-01-5</span>
                                                </td>
                                                <td>
                                                   <div class="btn-list">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                            <i
                                                                class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               View
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                            <i
                                                                class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Edit
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                            <i
                                                            class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Delete
                                                            </span>
                                                        </a>
                                                       </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-medium">#8745814</span>
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md bg-light">
                                                                <img src="../assets/images/ecommerce/png/28.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[14px]">Running Shoes</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="font-medium">Athletic Footwear</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary leading-none">0%</span>
                                                </td>
                                                <td>
                                                    $568.87
                                                </td>
                                                <td>
                                                    <span class="badge bg-success/10 text-success">Published</span>
                                                </td>
                                                <td>
                                                    <span class="font-medium">24-03-5</span>
                                                </td>
                                                <td>
                                                   <div class="btn-list">
                                                        <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-secondary">
                                                            <i
                                                                class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               View
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-info">
                                                            <i
                                                                class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Edit
                                                            </span>
                                                        </a>
                                                       </div>
                                                       <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon me-2 ti-btn-soft-primary2">
                                                            <i
                                                            class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                               Delete
                                                            </span>
                                                        </a>
                                                       </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="flex items-center flex-wrap">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="ti-pagination mb-0 flex-wrap">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item "><a class="page-link active"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>

                                                <li class="page-item">
                                                    <a class="page-link !text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End:: row-2 -->

            </div>
        </div>
        <!-- End::app-content -->


        
<footer class="mt-auto py-4 bg-white dark:bg-bodybg text-center border-t border-defaultborder dark:border-defaultborder/10">
    <div class="container">
        <span class="text-textmuted dark:text-textmuted/50">
            Copyright © <span id="year"></span> 
            <a href="javascript:void(0);" class="text-dark font-medium">TOKU</a>.
            Designed with <span class="text-danger">&#10084;</span> by 
            <a href="javascript:void(0);">
                <span class="font-medium text-primary"></span>
            </a> 
        </span>
    </div>
</footer>

        <div class="hs-overlay ti-modal hidden" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
    <div class="ti-modal-box">
        <div class="ti-modal-dialog">
            <div class="ti-modal-content">
                <div class="ti-modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control border-end-0 !border-s" placeholder="Search Anything ..."
                            aria-label="Search Anything ..." aria-describedby="button-addon2">
                        <button class="ti-btn ti-btn-primary !m-0" type="button"
                            id="button-addon2"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

</template>