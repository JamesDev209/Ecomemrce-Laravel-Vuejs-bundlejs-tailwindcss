<script setup>
// ✅ Ahora recibe productos como prop desde el padre
defineProps({
    products: {
        type: Array,
        default: () => []
    },
    loading: {
        type: Boolean,
        default: false
    }
})

const formatCOP = (value) => {
    if (!value) return '$0'
    return new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    }).format(value)
}

</script>

<template>
    <div class="xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto">
        <div class="flex-between gap-16 flex-wrap mb-40">
            Mostrando 1-{{ products.length }} de {{ products.length }} resultados
            <div class="relative flex items-center gap-16 flex-wrap">
                <div class="list-grid-btns flex items-center gap-16">
                    <button
                        type="button"
                        class="w-44 h-44 flex items-center justify-center border border-gray-100 rounded-6 text-2xl list-btn"
                    >
                        <i class="ph-bold ph-list-dashes"></i>
                    </button>
                    <button
                        type="button"
                        class="w-44 h-44 flex items-center justify-center border border-main-600 text-white bg-main-600 rounded-6 text-2xl grid-btn"
                    >
                        <i class="ph ph-squares-four"></i>
                    </button>
                </div>
                <button
                    type="button"
                    class="w-44 h-44 xl:hidden flex flex items-center justify-center border border-gray-100 rounded-6 text-2xl sidebar-btn"
                >
                    <i class="ph-bold ph-funnel"></i>
                </button>
            </div>
        </div>
        <div v-if="loading" class="text-center py-40">
            <p class="text-gray-500">Cargando productos...</p>
        </div>
        <div v-else-if="products.length === 0" class="text-center py-40">
            <p class="text-gray-500">No hay productos en esta categoría</p>
        </div>
        <div v-else class="list-grid-wrapper">
            <div
                v-for="product in products"
                :key="product.id"
                class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
            >
                <router-link
                :to="`/shop/${product.id}`"
                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                >
                <img
                    :src="`/storage/${product.image}`"
                    alt="Image"
                    class="!w-auto max-w-[unset]"
                />

                <span
                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                >
                    Best Sale
                </span>
                </router-link>

                <div class="product-card__content mt-16">
                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                        <a
                            href="product-details.html"
                            class="link text-line-2"
                            tabindex="0"
                            >{{ product.name }}</a
                        >
                    </h6>
                    <div class="flex items-center mb-20 mt-16 gap-6">
                        <span class="text-xs font-[500] text-gray-500"
                            >4.8</span
                        >
                        <span class="text-15 font-[500] text-warning-600 flex"
                            ><i class="ph-fill ph-star"></i
                        ></span>
                        <!-- <span class="text-xs font-[500] text-gray-500"
                            >(17k)</span
                        > -->
                    </div>
                    <div class="mt-8">
                        <div
                            class="progress w-full bg-color-three rounded-[50rem] h-4"
                            role="progressbar"
                            aria-label="Basic example"
                            aria-valuenow="35"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            <div
                                class="progress-bar bg-main-two-600 rounded-[50rem]"
                                style="width: 35%"
                            ></div>
                        </div>
                    </div>
                    <div class="product-card__price my-20">
                        <span class="text-heading text-md font-[600]"
                            >{{ formatCOP(product.price) }}
                            <span class="text-gray-500 font-normal"
                                ></span
                            ></span
                        >
                    </div>  
                    <a
                        href="cart.html"
                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                        tabindex="0"
                        >Whaptsapp
                        <i class="ph ph-shopping-cart"></i
                    ></a>
                </div>
            </div>
        </div>
        <ul
            class="pagination flex items-center justify-center flex-wrap gap-16"
        >
            <li class="page-item">
                <a
                    class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    href="index.html"
                    ><i class="ph-bold ph-arrow-left"></i
                ></a>
            </li>
            <li class="page-item active">
                <a
                    class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    href="index.html"
                    >01</a
                >
            </li>
            <li class="page-item">
                <a
                    class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    href="index.html"
                    >02</a
                >
            </li>
            <li class="page-item">
                <a
                    class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    href="index.html"
                    >03</a
                >
            </li>
            <li class="page-item">
                <a
                    class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    href="index.html"
                    >04</a
                >
            </li>
            <li class="page-item">
                <a
                    class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    href="index.html"
                    >05</a
                >
            </li>
        </ul>
    </div>
</template>
