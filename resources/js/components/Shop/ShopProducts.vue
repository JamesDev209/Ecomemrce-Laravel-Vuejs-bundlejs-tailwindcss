<script setup></script>

<template>
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">Shop</h6>
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm">
                        <a
                            href="index.html"
                            class="text-gray-900 flex items-center gap-8 hover-text-main-600"
                            ><i class="ph ph-house"></i> Home</a
                        >
                    </li>
                    <li class="flex items-center">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm text-main-600">Product Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="shop py-80">
        <div class="container container-lg">
            <div class="row">
                <div class="xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="shop-sidebar">
                        <button
                            type="button"
                            class="shop-sidebar__close xl:hidden flex w-32 h-32 flex items-center justify-center border border-gray-100 rounded-[50%] hover-bg-main-600 absolute right-0 mr-[10px] mt-8 hover-text-white hover-border-main-600"
                        >
                            <i class="ph ph-x"></i>
                        </button>
                        <div
                            class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32"
                        >
                            <h6
                                class="text-xl border-b border-gray-100 pb-24 mb-24"
                            >
                                Product Category
                            </h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Mobile & Accessories (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Laptop (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Electronics (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Smart Watch (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Storage (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Portable Devices (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Action Camera (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Smart Gadget (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Monitor (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Smart TV (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Camera (12)</a
                                    >
                                </li>
                                <li class="mb-24">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Monitor Stand (12)</a
                                    >
                                </li>
                                <li class="mb-0">
                                    <a
                                        href="product-details-two.html"
                                        class="text-gray-900 hover-text-main-600"
                                        >Headphone (12)</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div
                            class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32"
                        >
                            <h6
                                class="text-xl border-b border-gray-100 pb-24 mb-24"
                            >
                                Filter by Price
                            </h6>
                            <div class="custom--range">
                                <div id="slider-range"></div>
                                <div
                                    class="flex-between flex-wrap-reverse gap-8 mt-24"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-main h-40 flex items-center"
                                    >
                                        Filter
                                    </button>
                                    <div
                                        class="custom--range__content flex items-center gap-8"
                                    >
                                        <span
                                            class="text-gray-500 text-md flex-shrink-0"
                                            >Price:</span
                                        >
                                        <input
                                            class="custom--range__prices text-neutral-600 text-start text-md font-[500]"
                                            id="amount"
                                            readonly="readonly"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32"
                        >
                            <h6
                                class="text-xl border-b border-gray-100 pb-24 mb-24"
                            >
                                Filter by Rating
                            </h6>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label
                                    class="absolute w-full h-full cursor-pointer"
                                    for="rating5"
                                ></label>
                                <div class="common-check common-radio !mb-0">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="rating5"
                                    />
                                </div>
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
                                        style="width: 70%"
                                    ></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0"
                                    >124</span
                                >
                            </div>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label
                                    class="absolute w-full h-full cursor-pointer"
                                    for="rating4"
                                ></label>
                                <div class="common-check common-radio !mb-0">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="rating4"
                                    />
                                </div>
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
                                        style="width: 50%"
                                    ></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0"
                                    >52</span
                                >
                            </div>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label
                                    class="absolute w-full h-full cursor-pointer"
                                    for="rating3"
                                ></label>
                                <div class="common-check common-radio !mb-0">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="rating3"
                                    />
                                </div>
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
                                        style="width: 35%"
                                    ></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0"
                                    >12</span
                                >
                            </div>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label
                                    class="absolute w-full h-full cursor-pointer"
                                    for="rating2"
                                ></label>
                                <div class="common-check common-radio !mb-0">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="rating2"
                                    />
                                </div>
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
                                        style="width: 20%"
                                    ></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0"
                                    >5</span
                                >
                            </div>
                            <div class="flex items-center gap-8 relative mb-0">
                                <label
                                    class="absolute w-full h-full cursor-pointer"
                                    for="rating1"
                                ></label>
                                <div class="common-check common-radio !mb-0">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="rating1"
                                    />
                                </div>
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
                                        style="width: 5%"
                                    ></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="text-xs font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-400 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0"
                                    >2</span
                                >
                            </div>
                        </div>
                        <div
                            class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32"
                        >
                            <h6
                                class="text-xl border-b border-gray-100 pb-24 mb-24"
                            >
                                Filter by Color
                            </h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio checked-black"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color1"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color1"
                                            >Black(12)</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio checked-primary"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color2"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color2"
                                            >Blue (12)</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio checked-gray"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color3"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color3"
                                            >Gray (12)</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio checked-success"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color4"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color4"
                                            >Green (12)</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio checked-danger"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color5"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color5"
                                            >Red (12)</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio checked-white"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color6"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color6"
                                            >White (12)</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div
                                        class="form-check common-check common-radio checked-purple"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="color7"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="color7"
                                            >Purple (12)</label
                                        >
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32"
                        >
                            <h6
                                class="text-xl border-b border-gray-100 pb-24 mb-24"
                            >
                                Filter by Brand
                            </h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="brand1"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="brand1"
                                            >Apple</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="brand2"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="brand2"
                                            >Samsung</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="brand3"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="brand3"
                                            >Microsoft</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="brand4"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="brand4"
                                            >Apple</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="brand5"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="brand5"
                                            >HP</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="DELL"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="DELL"
                                            >DELL</label
                                        >
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div
                                        class="form-check common-check common-radio"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="color"
                                            id="Redmi"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="Redmi"
                                            >Redmi</label
                                        >
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-sidebar__box rounded-8">
                            <img
                                src="/resources/assets/images/advertise-img1.png"
                                alt="Image"
                            />
                        </div>
                    </div>
                </div>
                <div class="xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="flex-between gap-16 flex-wrap mb-40">
                        <span class="text-gray-900"
                            >Showing 1-20 of 85 result</span
                        >
                        <div
                            class="relative flex items-center gap-16 flex-wrap"
                        >
                            <div
                                class="list-grid-btns flex items-center gap-16"
                            >
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
                            <div
                                class="relative text-gray-500 flex items-center gap-4 text-14"
                            >
                                <label
                                    for="sorting"
                                    class="text-inherit flex-shrink-0"
                                    >Sort by:</label
                                >
                                <select
                                    class="form-control block w-full p-[0.375rem_0.75rem] text-base leading-6 text-[#495057] bg-white bg-clip-padding border border-[#ced4da] rounded transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none common-input px-14 py-14 text-inherit rounded-6 w-auto"
                                    id="sorting"
                                >
                                    <option value="1" selected="selected">
                                        Popular
                                    </option>
                                    <option value="1">Latest</option>
                                    <option value="1">Trending</option>
                                    <option value="1">Matches</option>
                                </select>
                            </div>
                            <button
                                type="button"
                                class="w-44 h-44 xl:hidden flex flex items-center justify-center border border-gray-100 rounded-6 text-2xl sidebar-btn"
                            >
                                <i class="ph-bold ph-funnel"></i>
                            </button>
                        </div>
                    </div>
                    <div class="list-grid-wrapper">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src="https://scontent.cdninstagram.com/v/t51.82787-15/570105661_18331915792231909_2555002407448809140_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ig_cache_key=Mzc1MDUyODk1NjQ1MDQ5NDU0MA%3D%3D.3-ccb1-7&ccb=1-7&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjE0NDB4MTQ0MC5zZHIuQzMifQ%3D%3D&_nc_ohc=3Itk2Qj2LYcQ7kNvwG-q4NK&_nc_oc=AdlfU8_P70JGsBfg8VtdRCaHoTU8BPzN4BVBDUOxu11rDr33uYONBVHMLrLpUdszEKEQdMkNreHHR1Ns6C1eFonK&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.cdninstagram.com&_nc_gid=N0k9xTTeFjaK5EBr6yM3_A&oh=00_AfcO7P8XTbhS7xDDCLV3X7k2zaP7PguF7mXDr8vILZV2mw&oe=690C2668"
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                                />
                                <spana
                                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >Best Sale</spana
                                ></a
                            >
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Pide ahora mismo por Whaptsapp
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src="https://scontent.cdninstagram.com/v/t51.82787-15/575388023_18332935513231909_420063627317961620_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=101&ig_cache_key=Mzc1NTc0NDQyNjU3MzAxNjc5NQ%3D%3D.3-ccb1-7&ccb=1-7&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjE0NDB4MTQ0MC5zZHIuQzMifQ%3D%3D&_nc_ohc=2b4qCEZ5rBEQ7kNvwELFNbW&_nc_oc=AdnjXSZdMu_Rjvv6GGBXnmhcUduk6XTgWaYliF_I2nanQyyaJBP9zwG18wnWG5z_nVP0A6LaTecU-OAvpSc9EuK1&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.cdninstagram.com&_nc_gid=Zu7qkqS8Oip4NFAvF5pxMA&oh=00_AfewGCtYGk0YsflJibGTXuhjnPG1BdKvhzdFYW6M5m7pgg&oe=690C023E"
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src="https://scontent.cdninstagram.com/v/t51.82787-15/572440256_18332935504231909_3747270422272714546_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ig_cache_key=Mzc1NTc0NDQyNjYwNjUzNzE3Mg%3D%3D.3-ccb1-7&ccb=1-7&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjE0NDB4MTQ0MC5zZHIuQzMifQ%3D%3D&_nc_ohc=tQBaCzDNA74Q7kNvwGpiBSW&_nc_oc=AdnHz8JTCy-WVm3IF3wxphrp4B-UiJkafqBUdNMC3dJuSJyNO0S5mXKWVkALWnZhLWI7H2q3y1gDVuh7m75p_XjE&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.cdninstagram.com&_nc_gid=d4MAe0nSJrn1BkY_M1a9tQ&oh=00_Afdw6_HXVq0zwa1rmptpXOtKKlBwfssIg6jP-2ANSdERjg&oe=690C2249"
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >Sale 50% </span
                                ><img
                                    src="https://scontent.cdninstagram.com/v/t51.82787-15/527382424_18320356516231909_8438539839199855456_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=108&ig_cache_key=MzY5MDQ2MDY2MzIwMjU5MjQxMg%3D%3D.3-ccb1-7&ccb=1-7&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjg1Nng4NzQuc2RyLkMzIn0%3D&_nc_ohc=ZwoiTtXTuvQQ7kNvwFcYWw1&_nc_oc=AdlFiap13R_g3AmIlyTHzTb0iSZ9a0GYhxydzfsHLKa4mFH8xKBZw50kfMoiB5z1d0RANo0lNGbk7oG6RUGdQ1gJ&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.cdninstagram.com&_nc_gid=9y3m4IsNsnzMPu1gq8Y3OQ&oh=00_Aff61iP5KXVmSSCeeCD3KEUtImUAc7AOjNlL05vhWSiwIQ&oe=690C0BC8"
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >Sale 50% </span
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >New </span
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><span
                                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >Best Sale </span
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >New</span
                                >
                                <img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                                />
                                <span
                                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >Best Sale</span
                                ></a
                            >
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
                                    <i class="ph ph-shopping-cart"></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2"
                        >
                            <a
                                href="product-details.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                                ><span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0"
                                    >Sale 50% </span
                                ><img
                                    src=""
                                    alt="Image"
                                    class="!w-auto max-w-[unset]"
                            /></a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a
                                        href="product-details.html"
                                        class="link text-line-2"
                                        tabindex="0"
                                        >Taylor Farms Broccoli Florets
                                        Vegetables</a
                                    >
                                </h6>
                                <div
                                    class="flex items-center mb-20 mt-16 gap-6"
                                >
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >4.8</span
                                    >
                                    <span
                                        class="text-15 font-[500] text-warning-600 flex"
                                        ><i class="ph-fill ph-star"></i
                                    ></span>
                                    <span
                                        class="text-xs font-[500] text-gray-500"
                                        >(17k)</span
                                    >
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
                                    <span
                                        class="text-gray-900 text-xs font-[500] mt-8"
                                        >Sold: 18/35</span
                                    >
                                </div>
                                <div class="product-card__price my-20">
                                    <span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through"
                                        >$28.99</span
                                    >
                                    <span
                                        class="text-heading text-md font-[600]"
                                        >$14.99
                                        <span class="text-gray-500 font-normal"
                                            >/Qty</span
                                        ></span
                                    >
                                </div>
                                <a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0"
                                    >Add To Cart
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
                        <li class="page-item">
                            <a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html"
                                >06</a
                            >
                        </li>
                        <li class="page-item">
                            <a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html"
                                >07</a
                            >
                        </li>
                        <li class="page-item">
                            <a
                                class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html"
                                ><i class="ph-bold ph-arrow-right"></i
                            ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>
