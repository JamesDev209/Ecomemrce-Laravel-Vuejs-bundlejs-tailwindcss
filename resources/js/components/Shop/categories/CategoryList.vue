<script setup>
import axios from 'axios'
import { ref, onMounted } from 'vue'

const emit = defineEmits(['select-category'])

const categories = ref([])
const selectedCategoryId = ref(null)

const loadCategories = async () => {
    const res = await axios.get('/api/categories')
    categories.value = res.data.categories
}

onMounted(loadCategories)

const selectCategory = (categoryId) => {
    selectedCategoryId.value = categoryId
    emit('select-category', categoryId)
}
</script>

<template>
    <div class="shop-sidebar">
        <button type="button" class="shop-sidebar__close xl:hidden flex w-32 h-32 flex items-center justify-center border border-gray-100 rounded-[50%] hover-bg-main-600 absolute right-0 mr-[10px] mt-8 hover-text-white hover-border-main-600">
            <i class="ph ph-x"></i>
        </button>
        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
            <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">
                Categoria de Productos
            </h6>
            <ul class="max-h-540 overflow-y-auto scroll-sm">
                <li class="mb-24">
                    <button
                        @click="selectCategory(null)"
                        :class="[
                            'text-gray-900 hover-text-main-600 transition-colors',
                            selectedCategoryId === null ? 'text-main-600 font-semibold' : ''
                        ]"
                        >Todas las categorías</button>
                </li>
                <li v-for="category in categories"
                    :key="category.id" class="mb-24">
                    <button
                        @click="selectCategory(category.id)"
                        :class="[
                            'text-gray-900 hover-text-main-600 transition-colors',
                            selectedCategoryId === category.id ? 'text-main-600 font-semibold' : ''
                        ]"
                        >{{ category.name }}</button>
                </li>
            </ul>
        </div>
    </div>
</template>
