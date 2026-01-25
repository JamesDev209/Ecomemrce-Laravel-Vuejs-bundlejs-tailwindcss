<script setup>
import { ref, onMounted, computed } from "vue";
import axios from "axios";

import ProductCard from "@/components/Shop/products/ProductCard.vue";
import CategoryList from "@/components/Shop/categories/CategoryList.vue";

const products = ref([]);
const selectedCategory = ref(null);
const loading = ref(true);

const loadProducts = async () => {
    const res = await axios.get("/api/products");
    products.value = res.data.products;
};

onMounted(async () => {
    try {
        await loadProducts();
    } catch (error) {
        console.error("Error cargando productos", error);
    } finally {
        loading.value = false;
    }
});

// 🔥 FILTRO POR CATEGORÍA
const filteredProducts = computed(() => {
    if (!selectedCategory.value) return products.value;
    return products.value.filter(
        (product) => product.category_id === selectedCategory.value
    );
});
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
                    <CategoryList @select-category="selectedCategory = $event" />
                </div>
                <ProductCard :products="filteredProducts" :loading="loading" />
            </div>
        </div>
    </section>
</template>
