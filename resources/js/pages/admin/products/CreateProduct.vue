<script setup>
import Sidebar from '../components/Sidebar.vue';
import Swal from "sweetalert2";
import { ref, onMounted } from 'vue';
import axios from 'axios';

// CAMPOS
const name = ref('');
const category = ref('');
const categories = ref([]); // 👈 Aquí guardamos la lista real del backend
const cost = ref('');
const description = ref('');
const availability = ref('');
const stock = ref('');
const images = ref([]);
const previewImages = ref([]);
const errors = ref({});

// TOAST CONFIG
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",    
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
});

// 🚀 Cargar categorías al iniciar
onMounted(async () => {
    try {
        const res = await axios.get('/api/categories');
        categories.value = res.data.categories; // <-- ¡Este es el cambio!
    } catch (err) {
        console.error("Error cargando categorías:", err);
    }
});

async function addProduct() {
    errors.value = {};

    try {
        const formData = new FormData();
        formData.append('name', name.value);
        formData.append('description', description.value);
        formData.append('price', cost.value);
        formData.append('stock', stock.value);
        formData.append('category_id', category.value || null);
        formData.append('availability', availability.value);

        // 📌 AGREGAR LA IMAGEN (solo 1)
        if (image.value) {
            formData.append('image', image.value);
        }

        await axios.post('/api/products', formData, {
            headers: { 'Content-Type': 'multipart/form-data' }
        });

        // RESET FIELDS
        name.value = "";
        description.value = "";
        cost.value = "";
        stock.value = "";
        availability.value = "";
        category.value = "";
        image.value = null;
        previewImages.value = [];

    } catch (err) {
        if (err.response?.data?.errors) {
            errors.value = err.response.data.errors;
        } else {
            errors.value = { general: 'Error al crear el producto' };
        }

        console.error('Error al crear producto:', err);

        Toast.fire({
            icon: 'error',
            title: 'Error al crear el producto'
        });
    }
}

// PREVIEW DE IMÁGENES
const image = ref(null);    
const previewImage = ref(null);

function onImageChange(e) {
    const file = e.target.files[0];

    if (file) {
        image.value = file;
        previewImage.value = URL.createObjectURL(file);
    }
}
</script>

<template>
    <Sidebar />
            <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                            </ol>
                        </nav>
                        <h1 class="page-title font-medium text-lg mb-0">Add Product</h1>
                    </div>
                    <div class="btn-list">
                        <button class="ti-btn bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 btn-wave !my-0">
                            <i class="ri-filter-3-line align-middle me-1 leading-none"></i> Filter
                        </button>
                        <button class="ti-btn ti-btn-primary !border-0 btn-wave me-0">
                            <i class="ri-share-forward-line me-1"></i> Share
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-body add-products">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-5">
                                    <div class="xxl:col-span-6 xl:col-span-12 lg:col-span-12 md:col-span-6 col-span-12">
                                        <div class="box shadow-none mb-0 border-0">
                                            <div class="box-body p-0">
                                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-3">
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="product-name-add" class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" id="product-name-add" placeholder="Name" v-model="name">
                                                        <label for="product-name-add" class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0">*Product Name should not exceed 30 characters</label>
                                                        <p v-if="errors.name" class="text-danger text-sm">{{ errors.name }}</p>

                                                    </div>
                                                    <!-- <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-size-add" class="form-label">Size</label>
                                                        <select class="form-control" data-trigger name="product-size-add" id="product-size-add" v-model="size">
                                                            <option value="">Select</option>
                                                            <option value="Extra Small">Extra Small</option>
                                                            <option value="Small">Small</option>
                                                            <option value="Medium">Medium</option>
                                                            <option value="Large">Large</option>
                                                            <option value="Extra Large">Extra Large</option>
                                                        </select>
                                                    </div> -->
                                                    <div class="xl:col-span-6 col-span-12">
    <label for="product-category-add" class="form-label">Category</label>

    <select 
        class="form-control" 
        id="product-category-add" 
        v-model="category"
    >
        <option value="">Seleccionar categoría</option>

        <option 
            v-for="cat in categories" 
            :key="cat.id" 
            :value="cat.id"
        >
            {{ cat.name }}
        </option>
    </select>
</div>

                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-cost-add" class="form-label">Enter Cost</label>
                                                        <input type="text" class="form-control" id="product-cost-add" placeholder="Cost" v-model="cost">
                                                        <label for="product-cost-add" class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0">*Mention final price of the product</label>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="product-description-add" class="form-label">Product Description</label>
                                                        <textarea class="form-control" id="product-description-add" rows="3" v-model="description"></textarea>
                                                        <label for="product-description-add" class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0">*Description should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12 product-documents-container">
                                                        <p class="font-medium mb-2 text-[14px]">Product Image :</p>
                                                        <input 
                                                            type="file"
                                                            class="product-Images"
                                                            @change="onImageChange"
                                                        />

                                                    <div v-if="previewImage" class="mt-3">
                                                            <img :src="previewImage" class="w-full h-32 object-cover rounded" />
                                                    </div>

                                                        <label class="form-label text-textmuted dark:text-textmuted/50 mt-3 font-normal text-xs">* Minimum of 6 images are need to be uploaded,
                                                            all images should be uniformly maintained, width and height to the container.
                                                        </label>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="product-status-add1" class="form-label">Availability</label>
                                                        <select class="form-control" data-trigger name="product-status-add1" id="product-status-add1" v-model="availability">
                                                            <option value="">Select</option>
                                                            <option value="In Stock">In Stock</option>
                                                            <option value="Out Of Stock">Out Of Stock</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-stock-add" class="form-label">Stock</label>
                                                        <input type="number" class="form-control" id="product-stock-add" placeholder="Stock" v-model="stock">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="box-footer border-t border-block-start-dashed sm:flex justify-end">
                                    <button class="ti-btn bg-primarytint1color text-white me-2 mb-2 mb-sm-0" @click="addProduct" type="button">Crear Producto<i class="bi bi-plus-lg ms-2"></i></button>
                                </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

<div v-if="showSuccess" class="alert alert-success mt-4">
    Producto creado correctamente
</div>
</template>