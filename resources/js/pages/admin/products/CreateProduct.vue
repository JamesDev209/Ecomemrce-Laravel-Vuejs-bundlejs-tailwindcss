<script setup>
import Swal from "sweetalert2";
import { ref, onMounted } from "vue";
import axios from "axios";

// =====================
// CAMPOS
// =====================
const name = ref("");
const category = ref("");
const categories = ref([]);
const cost = ref(""); // 👉 aquí se guarda SOLO el número (25000)
const description = ref("");
const availability = ref("");
const stock = ref("");
const errors = ref({});

// =====================
// IMAGEN PRINCIPAL
// =====================
const image = ref(null);
const previewImage = ref(null);

// =====================
// GALERÍA DE IMÁGENES (hasta 6)
// =====================
const galleryImages = ref([]);
const galleryPreviews = ref([]);
const MAX_GALLERY_IMAGES = 6;

// =====================
// TOAST CONFIG
// =====================
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
});

// =====================
// FORMATO COP
// =====================
const formatCOP = (value) => {
    if (!value) return "";
    return new Intl.NumberFormat("es-CO", {
        style: "currency",
        currency: "COP",
        minimumFractionDigits: 0,
    }).format(value);
};

// Captura el input y limpia todo lo que no sea número
const onPriceInput = (e) => {
    const rawValue = e.target.value.replace(/\D/g, "");
    cost.value = rawValue;
};

// =====================
// CARGAR CATEGORÍAS
// =====================
onMounted(async () => {
    try {
        const res = await axios.get("/api/categories");
        categories.value = res.data.categories;
    } catch (err) {
        console.error("Error cargando categorías:", err);
    }
});

// =====================
// CREAR PRODUCTO
// =====================
async function addProduct() {
    // Validaciones del cliente
    if (!cost.value || parseInt(cost.value) <= 0) {
        Toast.fire({
            icon: "error",
            title: "El precio es obligatorio",
        });
        return;
    }

    if (!category.value) {
        Toast.fire({
            icon: "error",
            title: "Debes seleccionar una categoría",
        });
        return;
    }

    if (!description.value || description.value.trim() === "") {
        Toast.fire({
            icon: "error",
            title: "La descripción es obligatoria",
        });
        return;
    }

    errors.value = {};

    try {
        const formData = new FormData();
        formData.append("name", name.value);
        formData.append("description", description.value);
        formData.append("price", cost.value); // 👉 25000 limpio
        formData.append("stock", stock.value);
        formData.append("category_id", category.value);
        formData.append("availability", availability.value);

        if (image.value) {
            formData.append("image", image.value);
        }

        // Galería de imágenes
        galleryImages.value.forEach((file, index) => {
            formData.append(`gallery[${index}]`, file);
        });

        await axios.post("/api/products", formData, {
            headers: { "Content-Type": "multipart/form-data" },
        });

        Toast.fire({
            icon: "success",
            title: "Producto creado correctamente",
        });

        // RESET
        name.value = "";
        description.value = "";
        cost.value = "";
        stock.value = "";
        availability.value = "";
        category.value = "";
        image.value = null;
        previewImage.value = null;

        // Limpiar galería
        galleryPreviews.value.forEach((url) => URL.revokeObjectURL(url));
        galleryImages.value = [];
        galleryPreviews.value = [];
    } catch (err) {
        errors.value = err.response?.data?.errors || {
            general: "Error al crear el producto",
        };

        console.error("Error al crear producto:", err);

        Toast.fire({
            icon: "error",
            title: "Error al crear el producto",
        });
    }
}

// =====================
// PREVIEW IMAGEN PRINCIPAL
// =====================
function onImageChange(e) {
    const file = e.target.files[0];

    if (file) {
        image.value = file;
        previewImage.value = URL.createObjectURL(file);
    }
}

// =====================
// GALERÍA - AGREGAR IMÁGENES
// =====================
function onGalleryImagesChange(e) {
    const files = Array.from(e.target.files);

    // Verificar límite
    const availableSlots = MAX_GALLERY_IMAGES - galleryImages.value.length;

    if (files.length > availableSlots) {
        Toast.fire({
            icon: "warning",
            title: `Solo puedes agregar ${availableSlots} imagen(es) más (máximo ${MAX_GALLERY_IMAGES})`,
        });
        return;
    }

    files.forEach((file) => {
        galleryImages.value.push(file);
        galleryPreviews.value.push(URL.createObjectURL(file));
    });

    e.target.value = "";
}

// =====================
// GALERÍA - ELIMINAR IMAGEN
// =====================
function removeGalleryImage(index) {
    URL.revokeObjectURL(galleryPreviews.value[index]);
    galleryImages.value.splice(index, 1);
    galleryPreviews.value.splice(index, 1);
}
</script>

<template>

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
                                Add Product
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title font-medium text-lg mb-0">
                        Add Product
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
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body add-products">
                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-5">
                                <div
                                    class="xxl:col-span-6 xl:col-span-12 lg:col-span-12 md:col-span-6 col-span-12"
                                >
                                    <div class="box shadow-none mb-0 border-0">
                                        <div class="box-body p-0">
                                            <div
                                                class="grid grid-cols-12 sm:gap-x-6 gap-y-3"
                                            >
                                                <div
                                                    class="xl:col-span-12 col-span-12"
                                                >
                                                    <label
                                                        for="product-name-add"
                                                        class="form-label"
                                                        >Product Name</label
                                                    >
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="product-name-add"
                                                        placeholder="Name"
                                                        v-model="name"
                                                    />
                                                    <label
                                                        for="product-name-add"
                                                        class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0"
                                                        >*Product Name should
                                                        not exceed 30
                                                        characters</label
                                                    >
                                                    <p
                                                        v-if="errors.name"
                                                        class="text-danger text-sm"
                                                    >
                                                        {{ errors.name }}
                                                    </p>
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
                                                <div
                                                    class="xl:col-span-6 col-span-12"
                                                >
                                                    <label
                                                        for="product-category-add"
                                                        class="form-label"
                                                        >Category</label
                                                    >

                                                    <select
                                                        class="form-control"
                                                        id="product-category-add"
                                                        v-model="category"
                                                    >
                                                        <option value="">
                                                            Seleccionar
                                                            categoría
                                                        </option>

                                                        <option
                                                            v-for="cat in categories"
                                                            :key="cat.id"
                                                            :value="cat.id"
                                                        >
                                                            {{ cat.name }}
                                                        </option>
                                                    </select>
                                                    <p
                                                        v-if="
                                                            errors.category_id
                                                        "
                                                        class="text-danger text-sm mt-1"
                                                    >
                                                        {{
                                                            errors
                                                                .category_id[0]
                                                        }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="xl:col-span-6 col-span-12"
                                                >
                                                    <label
                                                        for="product-cost-add"
                                                        class="form-label"
                                                        >Enter Cost</label
                                                    >

                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="product-cost-add"
                                                        placeholder="$25.000"
                                                        :value="formatCOP(cost)"
                                                        @input="onPriceInput"
                                                    />

                                                    <label
                                                        class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0"
                                                    >
                                                        *Mention final price of
                                                        the product
                                                    </label>
                                                </div>

                                                <div
                                                    class="xl:col-span-12 col-span-12"
                                                >
                                                    <label
                                                        for="product-description-add"
                                                        class="form-label"
                                                        >Product
                                                        Description</label
                                                    >
                                                    <textarea
                                                        class="form-control"
                                                        id="product-description-add"
                                                        rows="3"
                                                        v-model="description"
                                                    ></textarea>
                                                    <label
                                                        for="product-description-add"
                                                        class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0"
                                                        >*Description should not
                                                        exceed 500
                                                        letters</label
                                                    >
                                                    <p
                                                        v-if="
                                                            errors.description
                                                        "
                                                        class="text-danger text-sm mt-1"
                                                    >
                                                        {{
                                                            errors
                                                                .description[0]
                                                        }}
                                                    </p>
                                                </div>
                                                <!-- Imagen Principal -->
                                                <div
                                                    class="xl:col-span-12 col-span-12 product-documents-container"
                                                >
                                                    <p
                                                        class="font-medium mb-2 text-[14px]"
                                                    >
                                                        Imagen Principal:
                                                    </p>
                                                    <input
                                                        type="file"
                                                        class="product-Images"
                                                        accept="image/*"
                                                        @change="onImageChange"
                                                    />

                                                    <div
                                                        v-if="previewImage"
                                                        class="mt-3"
                                                    >
                                                        <img
                                                            :src="previewImage"
                                                            class="w-full h-32 object-cover rounded border border-gray-300"
                                                        />
                                                    </div>
                                                </div>

                                                <!-- Galería de Imágenes -->
                                                <div
                                                    class="xl:col-span-12 col-span-12 product-documents-container"
                                                >
                                                    <p
                                                        class="font-medium mb-2 text-[14px]"
                                                    >
                                                        Galería de Imágenes ({{
                                                            galleryImages.length
                                                        }}/{{
                                                            MAX_GALLERY_IMAGES
                                                        }}):
                                                    </p>

                                                    <input
                                                        type="file"
                                                        class="product-Images"
                                                        accept="image/*"
                                                        multiple
                                                        :disabled="
                                                            galleryImages.length >=
                                                            MAX_GALLERY_IMAGES
                                                        "
                                                        @change="
                                                            onGalleryImagesChange
                                                        "
                                                    />

                                                    <!-- Grid de previews -->
                                                    <div
                                                        v-if="
                                                            galleryPreviews.length >
                                                            0
                                                        "
                                                        class="mt-3 grid grid-cols-3 gap-3"
                                                    >
                                                        <div
                                                            v-for="(
                                                                preview, index
                                                            ) in galleryPreviews"
                                                            :key="index"
                                                            class="relative group"
                                                        >
                                                            <img
                                                                :src="preview"
                                                                class="w-full h-24 object-cover rounded border border-gray-300"
                                                            />
                                                            <button
                                                                type="button"
                                                                @click="
                                                                    removeGalleryImage(
                                                                        index,
                                                                    )
                                                                "
                                                                class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
                                                            >
                                                                ×
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <label
                                                        class="form-label text-textmuted dark:text-textmuted/50 mt-3 font-normal text-xs"
                                                    >
                                                        * Puedes agregar hasta
                                                        {{
                                                            MAX_GALLERY_IMAGES
                                                        }}
                                                        imágenes adicionales
                                                        para la galería del
                                                        producto.
                                                    </label>
                                                </div>
                                                <div
                                                    class="xl:col-span-12 col-span-12"
                                                >
                                                    <label
                                                        for="product-status-add1"
                                                        class="form-label"
                                                        >Availability</label
                                                    >
                                                    <select
                                                        class="form-control"
                                                        data-trigger
                                                        name="product-status-add1"
                                                        id="product-status-add1"
                                                        v-model="availability"
                                                    >
                                                        <option value="">
                                                            Select
                                                        </option>
                                                        <option
                                                            value="In Stock"
                                                        >
                                                            In Stock
                                                        </option>
                                                        <option
                                                            value="Out Of Stock"
                                                        >
                                                            Out Of Stock
                                                        </option>
                                                    </select>
                                                </div>
                                                <div
                                                    class="xl:col-span-6 col-span-12"
                                                >
                                                    <label
                                                        for="product-stock-add"
                                                        class="form-label"
                                                        >Stock</label
                                                    >
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="product-stock-add"
                                                        placeholder="Stock"
                                                        v-model="stock"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="box-footer border-t border-block-start-dashed sm:flex justify-end"
                        >
                            <button
                                class="ti-btn bg-primarytint1color text-white me-2 mb-2 mb-sm-0"
                                @click="addProduct"
                                type="button"
                            >
                                Crear Producto<i class="bi bi-plus-lg ms-2"></i>
                            </button>
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
