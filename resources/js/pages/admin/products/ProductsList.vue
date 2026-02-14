<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";  

// Estado
const products = ref([]);
const loading = ref(true);

const fetchProducts = async () => {
    // Lógica para obtener productos
    try {
        const res = await axios.get("/api/products");
        products.value = res.data.data;
    } catch (error) {
        console.error("Error cargando productos:", error);
    } finally {
        loading.value = false;
    }
};

//Quitar los milisegundos a la creacion de fecha de producto
function formatDate(date) {
    return new Date(date).toLocaleDateString('es-CO', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

onMounted(() => {
    fetchProducts();
});
</script>

<template>

    <!-- Loader -->
    <div id="loader">
        <img src="../assets/images/media/loader.svg" alt="" />
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <AdminNabvar />
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
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Stock</th>
                                                <!-- <th scope="col">Status</th> -->
                                                <!-- <th scope="col">Seller</th> -->
                                                <th scope="col">Creado</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr v-for="product in products" :key="product.id" class="border-b !border-defaultborder dark:!border-defaultborder/10">
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
                                                        <span class="avatar avatar-md avatar-square bg-light">
                                                            <img
                                                                :src="product.image ? `/storage/${product.image}` : '/placeholder.png'"
                                                                class="w-full h-full object-cover"
                                                                alt="product image"
                                                            />
                                                        </span>

                                                        <div class="ms-2">
                                                            <p class="font-semibold mb-0 flex items-center">
                                                                <a href="javascript:void(0);">
                                                                    {{ product.name }}
                                                                </a>
                                                            </p>
                                                            <p class="text-xs text-textmuted dark:text-textmuted/50 mb-0">
                                                                {{ product.category?.name ?? 'Sin categoría' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <span>{{ product.category?.name ?? 'Sin categoría' }}</span>

                                                </td>
                                                <td>{{product.price}}</td>
                                                <td>{{product.stock}}</td>
                                                <td>
                                                    <span
                                                        class="badge bg-primary/10 text-primary"
                                                        >{{ formatDate(product.created_at) }}</span
                                                    >
                                                </td>
                                                <!-- <td>
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
                                                </td> -->
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
