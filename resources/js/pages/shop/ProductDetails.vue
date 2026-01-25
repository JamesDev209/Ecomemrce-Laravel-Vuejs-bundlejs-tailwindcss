<script setup>
import { ref, onMounted, onUnmounted, computed } from "vue";
import { useRoute } from "vue-router";
import axios from "axios";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';

const route = useRoute();
const product = ref(null);
const loading = ref(true);

// 🖼️ Galería de imágenes
const thumbsSwiper = ref(null);
const setThumbsSwiper = (swiper) => {
    thumbsSwiper.value = swiper;
};

// Módulos de Swiper
const modules = [FreeMode, Navigation, Thumbs];

// Computed para obtener todas las imágenes (principal + galería)
const productImages = computed(() => {
    if (!product.value?.product) return [];
    
    const images = [];
    const mainImage = product.value.product.image;
    
    // Agregar imagen principal
    if (mainImage) {
        images.push(`/storage/${mainImage}`);
    }
    
    // Si hay galería (cuando lo implementes en backend)
    if (product.value.product.gallery && Array.isArray(product.value.product.gallery)) {
        product.value.product.gallery.forEach(img => {
            images.push(`/storage/${img}`);
        });
    } else if (product.value.product.images && Array.isArray(product.value.product.images)) {
        // Si usaste tabla relacionada
        product.value.product.images.forEach(img => {
            images.push(`/storage/${img.image_path}`);
        });
    } else {
        // Por ahora: repetir imagen principal 3 veces más para demo
        for (let i = 0; i < 3; i++) {
            if (mainImage) images.push(`/storage/${mainImage}`);
        }
    }
    
    return images;
});

// 🕐 Countdown Timer - Comienza en 1 hora
const countdown = ref({
    hours: 1,
    minutes: 0,
    seconds: 0
});

let countdownInterval = null;

const formatCOP = (value) => {
    if (!value) return '$0'
    return new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    }).format(value)
}

const startCountdown = () => {
    // Establecer tiempo final: 20 horas desde ahora
    const endTime = new Date().getTime() + (20 * 60 * 60 * 1000);
    
    const updateCountdown = () => {
        const now = new Date().getTime();
        const distance = endTime - now;

        if (distance < 0) {
            clearInterval(countdownInterval);
            countdown.value = { hours: 0, minutes: 0, seconds: 0 };
            return;
        }

        countdown.value = {
            hours: Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
            minutes: Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
            seconds: Math.floor((distance % (1000 * 60)) / 1000)
        };
    };

    // Actualizar inmediatamente
    updateCountdown();
    
    // Actualizar cada segundo
    countdownInterval = setInterval(updateCountdown, 1000);
};

onMounted(async () => {
    try {
        const res = await axios.get(`/api/products/${route.params.id}`);
        console.log("RESPUESTA API:", res.data);
        product.value = res.data;
        
        // Iniciar el countdown
        startCountdown();
    } catch (error) {
        console.error("Error cargando producto", error);
    } finally {
        loading.value = false;
    }
});

onUnmounted(() => {
    // Limpiar el intervalo cuando se destruya el componente
    if (countdownInterval) {
        clearInterval(countdownInterval);
    }
});
</script>

<template>
    <div
        v-if="loading"
        class="preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white"
    >0
        <div class="text-center">
            <div
                class="animate-spin rounded-full h-16 w-16 border-b-2 border-main-600 mx-auto"
            ></div>
            <p class="mt-4 text-gray-600">Cargando producto...</p>
        </div>
    </div>
    <div
        class="progress-wrap fixed right-[36px] bottom-[36px] h-[46px] w-[46px] leading-[46px] cursor-pointer block rounded-[50px] shadow-inset z-[10000] opacity-0 invisible translate-y-[15px] transition-all duration-200 ease-linear bg-transparent max-lg:right-[24px] max-lg:bottom-[24px] max-lg:h-[40px] max-lg:w-[40px] max-lg:leading-[40px] hover:scale-[1.06] after:absolute after:font-[900] after:text-center after:w-[46px] after:h-[46px] after:leading-[46px] after:text-[18px] after:left-0 after:top-0 after:cursor-pointer after:block after:content-['\e08e'] after:font-phospor after:z-[1] after:transition-all after:duration-200 after:ease-linear after:text-main max-lg:after:h-[40px] max-lg:after:w-[40px] max-lg:after:leading-[40px]"
    >
        <svg
            class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
        >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <form action="#" class="search-box">
        <button
            type="button"
            class="search-box__close absolute inset-block-start-0 right-0 m-16 w-48 h-48 border border-gray-100 rounded-[50%] flex items-center justify-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1"
        >
            <i class="ph ph-x"></i>
        </button>
        <div class="container">
            <div class="relative">
                <input
                    class="form-control block w-full p-[0.375rem_0.75rem] leading-6 text-[#495057] bg-white bg-clip-padding border border-[#ced4da] transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none py-16 px-24 text-xl rounded-[50rem] pe-64 h-[64px]"
                    placeholder="Search for a product or brand"
                />
                <button
                    type="submit"
                    class="w-48 h-48 bg-main-600 rounded-[50%] flex items-center justify-center text-xl text-white absolute top-[50%] translate-y-[-50%] right-0 me-8"
                >
                    <i class="ph ph-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- <header class="header-middle bg-color-one border-b border-gray-100">
        <div class="container container-lg">
            <nav class="header-inner flex-between">
                <div class="logo">
                    <a href="index.html" class="link"
                        ><img src="" alt="Logo"
                    /></a>
                </div>
                <div class="header-right items-center xl:block hidden">
                    <div class="flex items-center flex-wrap gap-12">
                        <button
                            type="button"
                            class="search-icon flex items-center xl:hidden flex gap-4 item-hover"
                        >
                            <span
                                class="text-2xl text-gray-700 flex relative item-hover__text"
                                ><i class="ph ph-magnifying-glass"></i
                            ></span>
                        </button>
                        <a
                            href="cart.html"
                            class="flex items-center gap-4 item-hover"
                            ><span
                                class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text"
                                ><i class="ph ph-heart"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4"
                                    >2</span
                                > </span
                            ><span
                                class="text-md text-gray-500 item-hover__text hidden xl:flex"
                                >Wishlist</span
                            > </a
                        ><a
                            href="cart.html"
                            class="flex items-center gap-4 item-hover"
                            ><span
                                class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text"
                                ><i class="ph ph-shopping-cart-simple"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4"
                                    >2</span
                                > </span
                            ><span
                                class="text-md text-gray-500 item-hover__text hidden xl:flex"
                                >Cart</span
                            ></a
                        >
                    </div>
                </div>
            </nav>
        </div>
    </header> -->

    <div class="breadcrumb mb-0 py-26 bg-color-one">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">Detalles de Producto</h6>
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm">
                        <a
                            href="index.html"
                            class="text-main-600 flex items-center gap-8"
                            ><i class="ph ph-house"></i> Inicio</a
                        >
                    </li>
                    <li class="flex items-center text-gray-500">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm">
                        <a
                            href="shop.html"
                            class="text-main-600 flex items-center gap-8"
                            >Tienda</a
                        >
                    </li>
                    <li class="flex items-center text-gray-500">
                        <i class="ph ph-caret-right"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="product-details py-80">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div v-if="product?.product" class="row g-4">
                        <div
                            class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        >
                            <div v-if="product" class="product-details__left">
                                <!-- Slider Principal -->
                                <swiper
                                    :style="{
                                        '--swiper-navigation-color': '#fff',
                                        '--swiper-pagination-color': '#fff',
                                    }"
                                    :loop="true"
                                    :spaceBetween="10"
                                    :navigation="true"
                                    :thumbs="{ swiper: thumbsSwiper }"
                                    :modules="modules"
                                    class="border border-gray-100 rounded-16 mb-24"
                                >
                                    <swiper-slide 
                                        v-for="(image, index) in productImages" 
                                        :key="index"
                                        class="flex items-center justify-center bg-gray-50 p-16"
                                    >
                                        <img 
                                            :src="image" 
                                            :alt="`${product.product.name} - Imagen ${index + 1}`"
                                            class="w-full h-auto object-contain max-h-[400px]"
                                        />
                                    </swiper-slide>
                                </swiper>

                                <!-- Miniaturas -->
                                <swiper
                                    @swiper="setThumbsSwiper"
                                    :loop="true"
                                    :spaceBetween="10"
                                    :slidesPerView="4"
                                    :freeMode="true"
                                    :watchSlidesProgress="true"
                                    :modules="modules"
                                    class="product-thumbnails"
                                >
                                    <swiper-slide 
                                        v-for="(image, index) in productImages" 
                                        :key="index"
                                        class="cursor-pointer border border-gray-100 rounded-8 overflow-hidden hover:border-main-600 transition-colors"
                                    >
                                        <div class="flex items-center justify-center bg-gray-50 p-8 h-20">
                                            <img 
                                                :src="image" 
                                                :alt="`Miniatura ${index + 1}`"
                                                class="w-full h-full object-contain"
                                            />
                                        </div>
                                    </swiper-slide>
                                </swiper>
                            </div>
                        </div>
                        <div
                            class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        >
                            <div
                                v-if="product"
                                class="product-details__content"
                            >
                                <h5 class="mb-12">
                                    {{ product.product.name }}
                                </h5>
                                <div class="flex items-center flex-wrap gap-12">
                                    <div
                                        class="flex items-center gap-12 flex-wrap"
                                    >
                                        <div class="flex items-center gap-8">
                                            <span
                                                class="text-15 font-[500] text-warning-600 flex"
                                                ><i class="ph-fill ph-star"></i
                                            ></span>
                                            <span
                                                class="text-15 font-[500] text-warning-600 flex"
                                                ><i class="ph-fill ph-star"></i
                                            ></span>
                                            <span
                                                class="text-15 font-[500] text-warning-600 flex"
                                                ><i class="ph-fill ph-star"></i
                                            ></span>
                                            <span
                                                class="text-15 font-[500] text-warning-600 flex"
                                                ><i class="ph-fill ph-star"></i
                                            ></span>
                                            <span
                                                class="text-15 font-[500] text-warning-600 flex"
                                                ><i class="ph-fill ph-star"></i
                                            ></span>
                                        </div>
                                        <span
                                            class="text-sm font-[500] text-neutral-600"
                                            >4.7 Clasificacion de
                                            estrellas</span
                                        >
                                        <!-- <span
                                            class="text-sm font-[500] text-gray-500"
                                            >(21,671)</span
                                        > -->
                                    </div>
                                    <span
                                        class="text-sm font-[500] text-gray-500"
                                        >|</span
                                    >
                                    <span class="text-gray-900"
                                        ><span class="text-gray-400">SKU:</span
                                        >EB4DRP</span
                                    >
                                </div>
                                <span
                                    class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"
                                ></span>
                                <p class="text-gray-700">
                                    Entrenamiento enfocado en el desarrollo
                                    constante del jugador, fortaleciendo
                                    técnica, resistencia y disciplina. Cada
                                    sesión está diseñada para mejorar el
                                    control, la precisión y la confianza en la
                                    cancha. El trabajo en equipo, la estrategia
                                    y la constancia se convierten en la base
                                    para competir y evolucionar partido a
                                    partido.
                                </p>
                                <div
                                    class="mt-32 flex items-center flex-wrap gap-32"
                                >
                                    <div class="flex items-center gap-8">
                                        <h4 class="mb-0">
                                            {{ formatCOP(product.product.price) }}
                                        </h4>
                                    </div>
                                    <a
                                        href="index.html"
                                        class="btn btn-main rounded-[50rem]"
                                        >Ordenar en What'sApp</a
                                    >
                                </div>
                                <span
                                    class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"
                                ></span>
                                <div
                                    class="flex items-center flex-wrap gap-16 bg-color-one rounded-8 py-16 px-24"
                                >
                                    <div class="flex items-center gap-16">
                                        <span class="text-main-600 text-sm"
                                            >Oferta especial:</span
                                        >
                                    </div>
                                    <div class="countdown">
                                        <ul
                                            class="countdown-list flex items-center flex-wrap gap-8"
                                        >
                                            <li
                                                class="countdown-list__item text-heading text-base font-bold w-52 h-40 rounded-6 border-2 border-main-600 flex items-center justify-center"
                                            >
                                                <span>{{ String(countdown.hours).padStart(2, '0') }}</span>
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading text-base font-bold w-52 h-40 rounded-6 border-2 border-main-600 flex items-center justify-center"
                                            >
                                                <span>{{ String(countdown.minutes).padStart(2, '0') }}</span>
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading text-base font-bold w-52 h-40 rounded-6 border-2 border-main-600 flex items-center justify-center"
                                            >
                                                <span>{{ String(countdown.seconds).padStart(2, '0') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="text-gray-900 text-xs"
                                        >Quedan hasta el final de la oferta</span
                                    >
                                </div>
                                <div class="mb-24">
                                    <div
                                        class="mt-32 flex items-center gap-12 mb-16"
                                    >
                                        <span
                                            class="w-32 h-32 bg-white flex items-center justify-center rounded-[50%] text-main-600 box-shadow-xl"
                                            ><i class="ph-fill ph-lightning"></i
                                        ></span>
                                        <h6
                                            class="text-md mb-0 font-[700] text-gray-900"
                                        >
                                            Los productos están casi agotados
                                        </h6>
                                    </div>
                                    <div
                                        class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                        role="progressbar"
                                        aria-label="Basic example"
                                        aria-valuenow="32"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        <div
                                            class="progress-bar bg-main-two-600 rounded-[50rem] h-full"
                                            style="width: 32%"
                                        ></div>
                                    </div>
                                    <span class="text-sm text-gray-700 mt-8"
                                        >Disponibles solo: 45</span
                                    >
                                </div>
                                <!-- <span class="text-gray-900 block mb-8"
                                    >Quantity:</span
                                >
                                <div class="flex-between gap-16 flex-wrap">
                                    <div
                                        class="flex items-center flex-wrap gap-16"
                                    >
                                        <div
                                            class="border border-gray-100 rounded-[50rem] py-9 px-16 flex items-center"
                                        >
                                            <button
                                                type="button"
                                                class="quantity__minus p-4 text-gray-700 hover-text-main-600 flex items-center justify-center"
                                            >
                                                <i class="ph ph-minus"></i>
                                            </button>
                                            <input
                                                type="number"
                                                class="quantity__input border-0 text-center w-32"
                                                value="1"
                                            />
                                            <button
                                                type="button"
                                                class="quantity__plus p-4 text-gray-700 hover-text-main-600 flex items-center justify-center"
                                            >
                                                <i class="ph ph-plus"></i>
                                            </button>
                                        </div>
                                        <a
                                            href="index.html"
                                            class="btn btn-main rounded-[50rem] flex items-center inline-flex gap-8 px-48"
                                            ><i class="ph ph-shopping-cart"></i>
                                            Add To Cart</a
                                        >
                                    </div>
                                    <div class="flex items-center gap-12">
                                        <a
                                            href="index.html"
                                            class="w-52 h-52 bg-main-50 text-main-600 text-xl hover-bg-main-600 hover-text-white flex items-center justify-center rounded-[50%]"
                                            ><i class="ph ph-heart"></i> </a
                                        ><a
                                            href="index.html"
                                            class="w-52 h-52 bg-main-50 text-main-600 text-xl hover-bg-main-600 hover-text-white flex items-center justify-center rounded-[50%]"
                                            ><i class="ph ph-shuffle"></i> </a
                                        ><a
                                            href="index.html"
                                            class="w-52 h-52 bg-main-50 text-main-600 text-xl hover-bg-main-600 hover-text-white flex items-center justify-center rounded-[50%]"
                                            ><i class="ph ph-share-network"></i
                                        ></a>
                                    </div>
                                </div> -->
                                <!-- <span
                                    class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"
                                ></span>
                                <div
                                    class="flex-between gap-16 p-12 border border-main-two-600 border-dashed rounded-8 mb-16"
                                >
                                    <div class="flex items-center gap-12">
                                        <button
                                            type="button"
                                            class="w-18 h-18 flex items-center justify-center border border-gray-900 text-xs rounded-[50%] hover-bg-gray-100"
                                        >
                                            <i class="ph ph-plus"></i>
                                        </button>
                                        <span
                                            class="text-gray-900 font-[500] text-xs"
                                            >Mfr. coupon. $3.00 off 5</span
                                        >
                                    </div>
                                    <a
                                        href="cart.html"
                                        class="text-xs font-[600] text-main-two-600 text-decoration-underline hover-text-main-two-700"
                                        >View Details</a
                                    >
                                </div>
                                <ul class="list-inside ms-12">
                                    <li class="text-gray-900 text-sm mb-8">
                                        Buy 1, Get 1 FREE
                                    </li>
                                    <li class="text-gray-900 text-sm mb-0">
                                        Buy 1, Get 1 FREE
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div
                        class="product-details__sidebar product-details__sidebar-c border border-gray-100 rounded-16 overflow-hidden"
                    >
                        <div class="p-24">
                            <div
                                class="flex-between bg-main-600 rounded-[50rem] p-8"
                            >
                                <div class="flex items-center gap-8">
                                    <span
                                        class="w-44 h-44 bg-white rounded-[50%] flex items-center justify-center text-2xl"
                                        ><i class="ph ph-storefront"></i
                                    ></span>
                                    <span class="text-white">Por Jumla</span>
                                </div>
                                <a
                                    href="shop.html"
                                    class="btn btn-white rounded-[50rem] text-[#212529] text-uppercase"
                                    >View Store</a
                                >
                            </div>
                        </div>
                        <div
                            class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100"
                        >
                            <span
                                class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0"
                                ><i class="ph-fill ph-truck"></i
                            ></span>
                            <div class="">
                                <h6 class="text-sm mb-8">Entrega rápida</h6>
                                <p class="text-gray-700">
                                    Envío rapidísimo, garantizado.
                                </p>
                            </div>
                        </div>
                        <!-- <div
                            class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100"
                        >
                            <span
                                class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0"
                                ><i class="ph-fill ph-arrow-u-up-left"></i
                            ></span>
                            <div class="">
                                <h6 class="text-sm mb-8">
                                    Free 90-day returns
                                </h6>
                                <p class="text-gray-700">
                                    Shop risk-free with easy returns.
                                </p>
                            </div>
                        </div> -->
                        <!-- <div
                            class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100"
                        >
                            <span
                                class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0"
                                ><i class="ph-fill ph-check-circle"></i
                            ></span>
                            <div class="">
                                <h6 class="text-sm mb-8">
                                    Pickup available at Shop location
                                </h6>
                                <p class="text-gray-700">
                                    Usually ready in 24 hours
                                </p>
                            </div>
                        </div> -->
                        <div
                            class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100"
                        >
                            <span
                                class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0"
                                ><i class="ph-fill ph-credit-card"></i
                            ></span>
                            <div class="">
                                <h6 class="text-sm mb-8">Pago</h6>
                                <p class="text-gray-700">
                                    Pago al recibir mercancías.
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100"
                        >
                            <span
                                class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0"
                                ><i class="ph-fill ph-check-circle"></i
                            ></span>
                            <div class="">
                                <h6 class="text-sm mb-8">Garantia</h6>
                                <p class="text-gray-700">
                                    La Ley de Protección al Consumidor no prevé
                                    la devolución de este producto de la calidad
                                    adecuada.
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100"
                        >
                            <span
                                class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0"
                                ><i class="ph-fill ph-package"></i
                            ></span>
                            <div class="">
                                <h6 class="text-sm mb-8">Embalaje</h6>
                                <p class="text-gray-700">
                                    Propuesta de valor en investigación y
                                    desarrollo, interfaz gráfica de usuario,
                                    inversor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-80">
                <div class="product-dContent border rounded-24">
                    <div
                        class="product-dContent__header border-b border-gray-100 flex-between flex-wrap gap-16"
                    >
                        <ul
                            class="nav common-tab nav-pills mb-3"
                            id="pills-tab"
                            role="tablist"
                        >
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link bt-tb-btn active"
                                    id="pills-description-tab"
                                    data-target="#pills-description"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-description"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-description"
                                    aria-selected="true"
                                >
                                    Description
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link bt-tb-btn"
                                    id="pills-reviews-tab"
                                    data-target="#pills-reviews"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-reviews"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-reviews"
                                    aria-selected="false"
                                >
                                    Reviews
                                </button>
                            </li>
                        </ul>
                        <a
                            href="index.html"
                            class="btn bg-color-one rounded-16 flex items-center gap-8 text-main-600 hover-bg-main-600 hover-text-white"
                            ><img src="" alt="Image" /> 100% Satisfaction
                            Guaranteed</a
                        >
                    </div>
                    <div class="product-dContent__box">
                        <div class="tab-content" id="pills-tabContent">
                            <div
                                class="tab-pane fade show bt-tab-pane active"
                                id="pills-description"
                                role="tabpanel"
                                aria-labelledby="pills-description-tab"
                                tabindex="0"
                            >
                                <div class="mb-40">
                                    <h6 class="mb-24">Product Description</h6>
                                    <p>
                                        Wherever celebrations and good times
                                        happen, the LAY'S brand will be there
                                        just as it has been for more than 75
                                        years. With flavors almost as rich as
                                        our history, we have a chip or crisp
                                        flavor guaranteed to bring a smile on
                                        your face.
                                    </p>
                                    <p>
                                        Morbi ut sapien vitae odio accumsan
                                        gravida. Morbi vitae erat auctor,
                                        eleifend nunc a, lobortis neque.
                                        Praesent aliquam dignissim viverra.
                                        Maecenas lacus odio, feugiat eu nunc sit
                                        amet, maximus sagittis dolor. Vivamus
                                        nisi sapien, elementum sit amet eros sit
                                        amet, ultricies cursus ipsum. Sed
                                        consequat luctus ligula. Curabitur
                                        laoreet rhoncus blandit. Aenean vel diam
                                        ut arcu pharetra dignissim ut sed leo.
                                        Vivamus faucibus, ipsum in vestibulum
                                        vulputate, lorem orci convallis quam,
                                        sit amet consequat nulla felis pharetra
                                        lacus. Duis semper erat mauris, sed
                                        egestas purus commodo vel.
                                    </p>
                                    <ul class="list-inside mt-32 ms-16">
                                        <li class="text-gray-400 mb-4">
                                            8.0 oz. bag of LAY'S Classic Potato
                                            Chips
                                        </li>
                                        <li class="text-gray-400 mb-4">
                                            Tasty LAY's potato chips are a great
                                            snack
                                        </li>
                                        <li class="text-gray-400 mb-4">
                                            Includes three ingredients:
                                            potatoes, oil, and salt
                                        </li>
                                        <li class="text-gray-400 mb-4">
                                            Gluten free product
                                        </li>
                                    </ul>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-4">
                                            Made in USA
                                        </li>
                                        <li class="text-gray-400 mb-4">
                                            Ready To Eat.
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-40">
                                    <h6 class="mb-24">
                                        Product Specifications
                                    </h6>
                                    <ul class="mt-32">
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Product Type:
                                                <span class="text-gray-500"
                                                    >Chips & Dips</span
                                                ></span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Product Name:
                                                <span class="text-gray-500"
                                                    >Potato Chips Classic</span
                                                ></span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Brand:
                                                <span class="text-gray-500"
                                                    >Lay's</span
                                                ></span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >FSA Eligible:
                                                <span class="text-gray-500"
                                                    >No</span
                                                ></span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Size/Count:
                                                <span class="text-gray-500"
                                                    >8.0oz</span
                                                ></span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Item Code:
                                                <span class="text-gray-500"
                                                    >331539</span
                                                ></span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Ingredients:
                                                <span class="text-gray-500"
                                                    >Potatoes, Vegetable Oil,
                                                    and Salt.</span
                                                ></span
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-40">
                                    <h6 class="mb-24">Nutrition Facts</h6>
                                    <ul class="mt-32">
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Total Fat 10g 13%</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Saturated Fat 1.5g 7%</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Cholesterol 0mg 0%</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Sodium 170mg 7%</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span
                                                class="text-heading font-[500]"
                                                >Potassium 350mg 6%</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-0">
                                    <h6 class="mb-24">More Details</h6>
                                    <ul class="mt-32">
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span class="text-gray-500"
                                                >Lunarlon midsole delivers
                                                ultra-plush responsiveness</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span class="text-gray-500"
                                                >Encapsulated Air-Sole heel unit
                                                for lightweight cushioning</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span class="text-gray-500"
                                                >Colour Shown: Ale
                                                Brown/Black/Goldtone/Ale
                                                Brown</span
                                            >
                                        </li>
                                        <li
                                            class="text-gray-400 mb-14 flex items-center gap-14"
                                        >
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]"
                                                ><i
                                                    class="ph ph-check"
                                                ></i> </span
                                            ><span class="text-gray-500"
                                                >Style: 805899-202</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade bt-tab-pane"
                                id="pills-reviews"
                                role="tabpanel"
                                aria-labelledby="pills-reviews-tab"
                                tabindex="0"
                            >
                                <div class="row g-4">
                                    <div
                                        class="xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                    >
                                        <h6 class="mb-24">
                                            Product Description
                                        </h6>
                                        <div
                                            class="flex items-start gap-24 pb-44 border-b border-gray-100 mb-44"
                                        >
                                            <img
                                                src=""
                                                alt="Image"
                                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0"
                                            />
                                            <div class="flex-grow">
                                                <div
                                                    class="flex-between items-start gap-8"
                                                >
                                                    <div class="">
                                                        <h6
                                                            class="mb-12 text-md"
                                                        >
                                                            Nicolas cage
                                                        </h6>
                                                        <div
                                                            class="flex items-center gap-8"
                                                        >
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-gray-800 text-xs"
                                                        >3 Days ago</span
                                                    >
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">
                                                    Greate Product
                                                </h6>
                                                <p class="text-gray-700">
                                                    There are many variations of
                                                    passages of Lorem Ipsum
                                                    available, but the majority
                                                    have suffered alteration in
                                                    some form, by injected
                                                    humour
                                                </p>
                                                <div
                                                    class="flex items-center gap-20 mt-44"
                                                >
                                                    <button
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"
                                                    >
                                                        <i
                                                            class="ph-bold ph-thumbs-up"
                                                        ></i>
                                                        Like
                                                    </button>
                                                    <a
                                                        href="#comment-form"
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"
                                                        ><i
                                                            class="ph-bold ph-arrow-bend-up-left"
                                                        ></i>
                                                        Replay</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-24">
                                            <img
                                                src=""
                                                alt="Image"
                                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0"
                                            />
                                            <div class="flex-grow">
                                                <div
                                                    class="flex-between items-start gap-8"
                                                >
                                                    <div class="">
                                                        <h6
                                                            class="mb-12 text-md"
                                                        >
                                                            Nicolas cage
                                                        </h6>
                                                        <div
                                                            class="flex items-center gap-8"
                                                        >
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-15 font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-gray-800 text-xs"
                                                        >3 Days ago</span
                                                    >
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">
                                                    Greate Product
                                                </h6>
                                                <p class="text-gray-700">
                                                    There are many variations of
                                                    passages of Lorem Ipsum
                                                    available, but the majority
                                                    have suffered alteration in
                                                    some form, by injected
                                                    humour
                                                </p>
                                                <div
                                                    class="flex items-center gap-20 mt-44"
                                                >
                                                    <button
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"
                                                    >
                                                        <i
                                                            class="ph-bold ph-thumbs-up"
                                                        ></i>
                                                        Like
                                                    </button>
                                                    <a
                                                        href="#comment-form"
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"
                                                        ><i
                                                            class="ph-bold ph-arrow-bend-up-left"
                                                        ></i>
                                                        Replay</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-56">
                                            <div class="">
                                                <h6 class="mb-24">
                                                    Write a Review
                                                </h6>
                                                <span class="text-heading mb-8"
                                                    >What is it like to
                                                    Product?</span
                                                >
                                                <div
                                                    class="flex items-center gap-8"
                                                >
                                                    <span
                                                        class="text-15 font-[500] text-warning-600 flex"
                                                        ><i
                                                            class="ph-fill ph-star"
                                                        ></i
                                                    ></span>
                                                    <span
                                                        class="text-15 font-[500] text-warning-600 flex"
                                                        ><i
                                                            class="ph-fill ph-star"
                                                        ></i
                                                    ></span>
                                                    <span
                                                        class="text-15 font-[500] text-warning-600 flex"
                                                        ><i
                                                            class="ph-fill ph-star"
                                                        ></i
                                                    ></span>
                                                    <span
                                                        class="text-15 font-[500] text-warning-600 flex"
                                                        ><i
                                                            class="ph-fill ph-star"
                                                        ></i
                                                    ></span>
                                                    <span
                                                        class="text-15 font-[500] text-warning-600 flex"
                                                        ><i
                                                            class="ph-fill ph-star"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </div>
                                            <div class="mt-32">
                                                <form action="#">
                                                    <div class="mb-32">
                                                        <label
                                                            for="title"
                                                            class="text-neutral-600 mb-8"
                                                            >Review Title</label
                                                        >
                                                        <input
                                                            class="common-input rounded-8"
                                                            id="title"
                                                            placeholder="Great Products"
                                                        />
                                                    </div>
                                                    <div class="mb-32">
                                                        <label
                                                            for="desc"
                                                            class="text-neutral-600 mb-8"
                                                            >Review
                                                            Content</label
                                                        >
                                                        <textarea
                                                            class="common-input rounded-8"
                                                            id="desc"
                                                        >
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</textarea
                                                        >
                                                    </div>
                                                    <button
                                                        type="submit"
                                                        class="btn btn-main rounded-[50rem] mt-48"
                                                    >
                                                        Submit Review
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                    >
                                        <div class="ms-xxl-5">
                                            <h6 class="mb-24">
                                                Customers Feedback
                                            </h6>
                                            <div class="flex flex-wrap gap-44">
                                                <div
                                                    class="border border-gray-100 rounded-8 px-40 py-52 flex items-center justify-center flex-col flex-shrink-0 text-center"
                                                >
                                                    <h2
                                                        class="mb-6 text-main-600"
                                                    >
                                                        4.8
                                                    </h2>
                                                    <div
                                                        class="flex items-center justify-center gap-8"
                                                    >
                                                        <span
                                                            class="text-15 font-[500] text-warning-600 flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-15 font-[500] text-warning-600 flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-15 font-[500] text-warning-600 flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-15 font-[500] text-warning-600 flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-15 font-[500] text-warning-600 flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <span
                                                        class="mt-16 text-gray-500"
                                                        >Average Product
                                                        Rating</span
                                                    >
                                                </div>
                                                <div
                                                    class="border border-gray-100 rounded-8 px-24 py-40 flex-grow"
                                                >
                                                    <div
                                                        class="flex items-center gap-8 mb-20"
                                                    >
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >5</span
                                                        >
                                                        <div
                                                            class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar"
                                                            aria-label="Basic example"
                                                            aria-valuenow="70"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <div
                                                                class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="
                                                                    width: 70%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-4"
                                                        >
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >124</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center gap-8 mb-20"
                                                    >
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >4</span
                                                        >
                                                        <div
                                                            class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar"
                                                            aria-label="Basic example"
                                                            aria-valuenow="50"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <div
                                                                class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="
                                                                    width: 50%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-4"
                                                        >
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >52</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center gap-8 mb-20"
                                                    >
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >3</span
                                                        >
                                                        <div
                                                            class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar"
                                                            aria-label="Basic example"
                                                            aria-valuenow="35"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <div
                                                                class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="
                                                                    width: 35%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-4"
                                                        >
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >12</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center gap-8 mb-20"
                                                    >
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >2</span
                                                        >
                                                        <div
                                                            class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar"
                                                            aria-label="Basic example"
                                                            aria-valuenow="20"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <div
                                                                class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="
                                                                    width: 20%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-4"
                                                        >
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >5</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center gap-8 mb-0"
                                                    >
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >1</span
                                                        >
                                                        <div
                                                            class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar"
                                                            aria-label="Basic example"
                                                            aria-valuenow="5"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <div
                                                                class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="
                                                                    width: 5%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <div
                                                            class="flex items-center gap-4"
                                                        >
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-xs font-[500] text-warning-600 flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </div>
                                                        <span
                                                            class="text-gray-900 flex-shrink-0"
                                                            >2</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-arrival pb-80">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0">You Might Also Like</h5>
                    <div class="flex items-center gap-16">
                        <a
                            href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline"
                            >All Products</a
                        >
                        <div class="flex items-center gap-8">
                            <button
                                type="button"
                                id="new-arrival-prev"
                                class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1"
                            >
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button
                                type="button"
                                id="new-arrival-next"
                                class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1"
                            >
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-arrival__slider arrow-style-two">
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >C-500 Antioxidant Protect Dietary
                                    Supplement</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <span
                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white"
                            >Sale 50% </span
                        ><a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >Marcel's Modern Pantry Almond
                                    Unsweetened</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <span
                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white"
                            >Sale 50% </span
                        ><a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >O Organics Milk, Whole, Vitamin D</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <span
                            class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white"
                            >Best Sale </span
                        ><a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >Whole Grains and Seeds Organic Bread</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >Lucerne Yogurt, Lowfat, Strawberry</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <span
                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white"
                            >Sale 50% </span
                        ><a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >Nature Valley Whole Grain Oats and Honey
                                    Protein</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                    >
                        <span
                            class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white"
                            >Best Sale </span
                        ><a
                            href="product-details.html"
                            class="product-card__thumb flex items-center justify-center"
                            ><img src="" alt="Image"
                        /></a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a
                                    href="product-details.html"
                                    class="link text-line-2"
                                    >Whole Grains and Seeds Organic Bread</a
                                >
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"
                                    ><i class="ph-fill ph-storefront"></i
                                ></span>
                                <span class="text-gray-500 text-xs"
                                    >By Lucky Supermarket</span
                                >
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        > </span
                                    ><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                </div>
                                <div class="flex items-center gap-6">
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[700] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[700] text-gray-600"
                                        >(17k)</span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div
                    class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                >
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2"
                    >
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"
                            ><i class="ph-fill ph-car-profile"></i
                        ></span>
                        <div class="">
                            <h6 class="mb-0">Free Shipping</h6>
                            <span class="text-sm text-heading"
                                >Free shipping all over the US</span
                            >
                        </div>
                    </div>
                </div>
                <div
                    class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                >
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2"
                    >
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"
                            ><i class="ph-fill ph-hand-heart"></i
                        ></span>
                        <div class="">
                            <h6 class="mb-0">100% Satisfaction</h6>
                            <span class="text-sm text-heading"
                                >Free shipping all over the US</span
                            >
                        </div>
                    </div>
                </div>
                <div
                    class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                >
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2"
                    >
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"
                            ><i class="ph-fill ph-credit-card"></i
                        ></span>
                        <div class="">
                            <h6 class="mb-0">Secure Payments</h6>
                            <span class="text-sm text-heading"
                                >Free shipping all over the US</span
                            >
                        </div>
                    </div>
                </div>
                <div
                    class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                >
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2"
                    >
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"
                            ><i class="ph-fill ph-chats"></i
                        ></span>
                        <div class="">
                            <h6 class="mb-0">24/7 Support</h6>
                            <span class="text-sm text-heading"
                                >Free shipping all over the US</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="newsletter">
        <div class="container container-lg">
            <div
                class="newsletter-box relative rounded-16 flex items-center gap-16 flex-wrap z-[1]"
            >
                <img
                    src=""
                    alt="Image"
                    class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6"
                />
                <div class="row items-center">
                    <div
                        class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                    >
                        <div class="">
                            <h1 class="text-white mb-12 wow fadeInUp">
                                Don't Miss Out on Grocery Deals
                            </h1>
                            <p class="text-white h5 mb-0 wow fadeInUp">
                                SING UP FOR THE UPDATE NEWSLETTER
                            </p>
                            <form
                                action="#"
                                class="relative mt-40 wow fadeInUp"
                            >
                                <input
                                    class="form-control block w-full p-[0.375rem_0.75rem] text-base leading-6 placeholder:text-[#495057] bg-white bg-clip-padding border border-[#ced4da] transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none common-input !rounded-[50rem] text-white py-22 px-16 pe-144"
                                    placeholder="Your email address..."
                                />
                                <button
                                    type="submit"
                                    class="btn btn-main-two !rounded-[50rem] !absolute top-[50%] translate-y-[-50%] right-0 mr-[10px]"
                                >
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto text-center xl:block hidden"
                    >
                        <img src="" alt="Image" class="wow fadeInUp" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="footer-item-two-wrapper flex items-start flex-wrap">
                <div class="footer-item max-w-275 wow fadeInUp">
                    <div class="footer-item__logo">
                        <a href="index.html"><img src="" alt="Image" /></a>
                    </div>
                    <p class="mb-24">
                        Marketpro become the largest computer parts, gaming pc
                        parts, and other IT related products.
                    </p>
                    <div class="flex items-center gap-16 mb-16">
                        <span
                            class="w-32 h-32 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-md flex-shrink-0"
                            ><i class="ph-fill ph-phone-call"></i
                        ></span>
                        <a
                            href="tel:+00123456789"
                            class="text-md text-gray-900 hover-text-main-600"
                            >+00 123 456 789</a
                        >
                    </div>
                    <div class="flex items-center gap-16 mb-16">
                        <span
                            class="w-32 h-32 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-md flex-shrink-0"
                            ><i class="ph-fill ph-envelope"></i
                        ></span>
                        <a
                            href="mailto:support24@marketpro.com"
                            class="text-md text-gray-900 hover-text-main-600"
                            >support24@marketpro.com</a
                        >
                    </div>
                    <div class="flex items-center gap-16 mb-16">
                        <span
                            class="w-32 h-32 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-md flex-shrink-0"
                            ><i class="ph-fill ph-map-pin"></i
                        ></span>
                        <span class="text-md text-gray-900"
                            >789 Inner Lane, California, USA</span
                        >
                    </div>
                </div>
                <div class="footer-item wow fadeInUp">
                    <h6 class="footer-item__title">About us</h6>
                    <ul class="footer-menu">
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Company Profile</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >All Retail Store</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Merchant Center</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Affiliate</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Contact Us</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Feedback</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Huawei Group</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Rules & Policy</a
                            >
                        </li>
                    </ul>
                </div>

                <div class="footer-item wow fadeInUp">
                    <h6 class="footer-item__title">Information</h6>
                    <ul class="footer-menu">
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Become a Vendor</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Affiliate Program</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Privacy Policy</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Our Suppliers</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Extended Plan</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Extended Plan</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Community</a
                            >
                        </li>
                        <li class="mb-16">
                            <a
                                href="shop.html"
                                class="text-gray-600 hover-text-main-600"
                                >Community</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="footer-item wow fadeInUp">
                    <h6 class="">Shop on The Go</h6>
                    <p class="mb-16">Marketpro App is available. Get it now</p>
                    <div class="flex items-center gap-8 my-32">
                        <a href="https://www.apple.com/store" class=""
                            ><img src="" alt="Image" /> </a
                        ><a
                            href="https://play.google.com/store/apps?hl=en"
                            class=""
                            ><img src="" alt="Image"
                        /></a>
                    </div>
                    <ul class="flex items-center gap-16">
                        <li>
                            <a
                                href="https://www.facebook.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"
                                ><i class="ph-fill ph-facebook-logo"></i
                            ></a>
                        </li>
                        <li>
                            <a
                                href="https://www.twitter.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"
                                ><i class="ph-fill ph-twitter-logo"></i
                            ></a>
                        </li>
                        <li>
                            <a
                                href="https://www.linkedin.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"
                                ><i class="ph-fill ph-instagram-logo"></i
                            ></a>
                        </li>
                        <li>
                            <a
                                href="https://www.pinterest.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"
                                ><i class="ph-fill ph-linkedin-logo"></i
                            ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="bottom-footer bg-color-three py-8">
        <div class="container container-lg">
            <div
                class="bottom-footer__inner flex-between flex-wrap gap-16 py-16"
            >
                <p class="bottom-footer__text wow fadeInLeftBig">
                    Marketpro eCommerce &copy; 2024. All Rights Reserved
                </p>
                <div
                    class="flex items-center gap-8 flex-wrap wow fadeInRightBig"
                >
                    <span class="text-heading text-sm">We Are Accepting</span>
                    <img src="" alt="Image" />
                </div>
            </div>
        </div>
    </div>
</template>
