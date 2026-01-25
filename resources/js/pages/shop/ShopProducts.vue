<script setup>
import { ref, onMounted, computed } from "vue";
import axios from "axios";

import ProductCard from "@/components/Shop/products/ProductCard.vue";
import CategoryList from "@/components/Shop/categories/CategoryList.vue";
import Pagination from "@/components/Shop/products/pagination/Pagination.vue";

const products = ref([]);
const selectedCategory = ref(null);
const loading = ref(true);
const pagination = ref({});

const loadProducts = async (page = 1) => {
    loading.value = true;
    try {
        const res = await axios.get("/api/products", {
            params: {
                page: selectedCategory.value ? 1 : page, // Si hay categoría, siempre página 1
                category: selectedCategory.value,
            },
        });

        products.value = res.data.data;
        pagination.value = res.data;
    } finally {
        loading.value = false;
    }
};

onMounted(async () => {
    try {
        await loadProducts();
    } catch (error) {
        console.error("Error cargando productos", error);
    }
});

// Función para cuando se selecciona una categoría
const handleCategoryChange = (categoryId) => {
    selectedCategory.value = categoryId;
    loadProducts(1); // Recargar productos desde la página 1
};
</script>

<template>
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm">
                        <RouterLink
                            to="/"
                            class="text-gray-900 flex items-center gap-8 hover-text-main-600"
                            ><i class="ph ph-house"></i> Inicio</RouterLink
                        >
                    </li>
                    <li class="flex items-center">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm text-main-600">Comprar Productos</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="shop py-80">
        <div class="container container-lg">
            <div class="row">
                <div class="xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <CategoryList
                        @select-category="handleCategoryChange"
                    />
                </div>
                <ProductCard :products="products" :loading="loading" />
            </div>
                

                    <!-- Solo mostrar paginación si no hay categoría seleccionada -->
                    <ul v-if="!selectedCategory && pagination.last_page > 1" class="pagination flex items-center justify-center flex-wrap gap-16">
                        <Pagination
                            :current-page="pagination.current_page"
                            :last-page="pagination.last_page"
                            @change-page="loadProducts"
                        />
                    </ul>

        </div>
    </section>
</template>
