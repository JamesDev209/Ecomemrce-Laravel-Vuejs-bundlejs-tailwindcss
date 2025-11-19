<script setup>
import Sidebar from '../components/Sidebar.vue';
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
                                                        <input type="text" class="form-control" id="product-name-add" placeholder="Name">
                                                        <label for="product-name-add" class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0">*Product Name should not exceed 30 characters</label>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-size-add" class="form-label">Size</label>
                                                        <select class="form-control" data-trigger name="product-size-add" id="product-size-add">
                                                            <option value="">Select</option>
                                                            <option value="Extra Small">Extra Small</option>
                                                            <option value="Small">Small</option>
                                                            <option value="Medium">Medium</option>
                                                            <option value="Large">Large</option>
                                                            <option value="Extra Large">Extra Large</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-brand-add" class="form-label">Brand</label>
                                                        <select class="form-control" data-trigger name="product-brand-add" id="product-brand-add">
                                                            <option value="">Select</option>
                                                            <option value="Armani">Armani</option>
                                                            <option value="Lacoste">Lacoste</option>
                                                            <option value="Puma">Puma</option>
                                                            <option value="Spykar">Spykar</option>
                                                            <option value="Mufti">Mufti</option>
                                                            <option value="Home Town">Home Town</option>
                                                            <option value="Arrabi">Arrabi</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-category-add" class="form-label">Category</label>
                                                        <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                                                            <option value="">Category</option>
                                                            <option value="Clothing">Clothing</option>
                                                            <option value="Footwear">Footwear</option>
                                                            <option value="Accesories">Accesories</option>
                                                            <option value="Grooming">Grooming</option>
                                                            <option value="Ethnic & Festive">Ethnic & Festive</option>
                                                            <option value="Jewellery">Jewellery</option>
                                                            <option value="Toys & Babycare">Toys & Babycare</option>
                                                            <option value="Festive Gifts">Festive Gifts</option>
                                                            <option value="Kitchen">Kitchen</option>
                                                            <option value="Dining">Dining</option>
                                                            <option value="Home Decors">Home Decors</option>
                                                            <option value="Stationery">Stationery</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="product-cost-add" class="form-label">Enter Cost</label>
                                                        <input type="text" class="form-control" id="product-cost-add" placeholder="Cost">
                                                        <label for="product-cost-add" class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0">*Mention final price of the product</label>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="product-description-add" class="form-label">Product Description</label>
                                                        <textarea class="form-control" id="product-description-add" rows="3"></textarea>
                                                        <label for="product-description-add" class="form-label mt-1 text-xs font-normal text-textmuted dark:text-textmuted/50 mb-0">*Description should not exceed 500 letters</label>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12 product-documents-container">
                                                        <p class="font-medium mb-2 text-[14px]">Product Images :</p>
                                                        <input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                        <label class="form-label text-textmuted dark:text-textmuted/50 mt-3 font-normal text-xs">* Minimum of 6 images are need to be uploaded,
                                                            all images should be uniformly maintained, width and height to the container.
                                                        </label>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="product-status-add1" class="form-label">Availability</label>
                                                        <select class="form-control" data-trigger name="product-status-add1" id="product-status-add1">
                                                            <option value="">Select</option>
                                                            <option value="In Stock">In Stock</option>
                                                            <option value="Out Of Stock">Out Of Stock</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
                                </div>
                            </div>
                            <div class="box-footer border-t border-block-start-dashed sm:flex justify-end">
                                <button class="ti-btn bg-primarytint1color text-white me-2 mb-2 mb-sm-0">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                                <button class="ti-btn ti-btn-primary mb-2 mb-sm-0">Save Product<i class="bi bi-download ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

</template>