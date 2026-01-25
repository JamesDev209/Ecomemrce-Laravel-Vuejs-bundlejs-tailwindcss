<script setup></script>


<template>


    <div class="page">

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
            <div class="main-sidebar" id="sidebar-scroll">
                <!-- Start::nav -->
                <nav
                    class="main-menu-container nav nav-pills flex-col sub-open"
                >
                    <div class="slide-left" id="slide-left">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                            ></path>
                        </svg>
                    </div>

                    <!--Slider-->
             
                    <div class="slide-right" id="slide-right">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                            ></path>
                        </svg>
                    </div>
                </nav>
                <!-- End::nav -->
            </div>
            <!-- End::main-sidebar -->
        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Start::page-header -->
                <div
                    class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2"
                >
                </div>
                <!-- End::page-header -->

                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box p-5">
                            <div
                                class="box-header flex items-center justify-between flex-wrap gap-4"
                            >
                                <div class="box-title">
                                    <span>Todos los usuarios</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <a
                                        href="ruta-de-exportacion-pdf"
                                        class="ti-btn ti-btn-sm ti-btn-soft-danger btn-wave waves-effect waves-light !mb-0"
                                        title="Exportar a PDF"
                                    >
                                        <i class="ri-file-pdf-2-line"></i>
                                    </a>
                                    <a
                                        href="ruta-de-exportacion-excel"
                                        class="ti-btn ti-btn-sm ti-btn-soft-success btn-wave waves-effect waves-light !mb-0"
                                        title="Exportar a Excel"
                                    >
                                        <i class="ri-file-excel-2-line"></i>
                                    </a>

                                    <div class="ti-dropdown hs-dropdown">
                                        <a
                                            href="javascript:void(0);"
                                            class="ti-btn bg-light ti-btn-sm btn-wave"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                        >
                                            Filtrar por<i
                                                class="ri-arrow-down-s-line align-middle ms-1 inline-block"
                                            ></i>
                                        </a>
                                        <ul
                                            class="ti-dropdown-menu hs-dropdown-menu hidden"
                                            role="menu"
                                        >
                                            <li>
                                                <a
                                                    class="ti-dropdown-item"
                                                    href="javascript:void(0);"
                                                    >Newest</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="ti-dropdown-item"
                                                    href="javascript:void(0);"
                                                    >Date Added</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="ti-dropdown-item"
                                                    href="javascript:void(0);"
                                                    >A - Z</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="custom-form-group grow relative"
                                    >
                                        <input
                                            type="text"
                                            class="form-control !pe-[7rem]"
                                            placeholder="Nombre, correo, telefono"
                                            aria-label="Buscar factura"
                                        />
                                        <a
                                            href="javascript:void(0);"
                                            class="text-textmuted dark:text-textmuted/50 custom-form-btn absolute top-1/2 right-2 -translate-y-1/2"
                                        >
                                            <i class="ti ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div class="table-responsive">
                                    <table
                                        class="ti-custom-table ti-custom-table-head ti-custom-table-hover"
                                    >
                                        <thead>
                                            <tr
                                                class="border-b !border-defaultborder dark:!border-defaultborder/10"
                                            >
                                                <th scope="col">ID</th>
                                                <th scope="col">Usuario</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">
                                                    Departamento
                                                </th>
                                                <th scope="col">Municipio</th>
                                                <th scope="col">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody> 

                                            <tr>
                                                <td>#17782</td>
                                                <td>
                                                    <div
                                                        class="flex items-center gap-2"
                                                    >
                                                        <div
                                                            class="leading-none"
                                                        >
                                                            <span
                                                                class="avatar avatar-rounded avatar-sm"
                                                            >
                                                                <img
                                                                    src="../assets/images/faces/4.jpg"
                                                                    alt=""
                                                                />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span
                                                                >John Doe</span
                                                            >
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="block mb-1"
                                                            ><i
                                                                class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"
                                                            ></i
                                                            >john.doe@example.com</span
                                                        >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="block"
                                                            ><i
                                                                class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"
                                                            ></i
                                                            >123-456-7890</span
                                                        >
                                                    </div>
                                                </td>
                                                <td>Francisco Morazán</td>
                                                <td>Apacilagua</td>
                                                <td>
                                                    <span
                                                        class="badge bg-danger/10 text-danger"
                                                        >Inactivo
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#17782</td>
                                                <td>
                                                    <div
                                                        class="flex items-center gap-2"
                                                    >
                                                        <div
                                                            class="leading-none"
                                                        >
                                                            <span
                                                                class="avatar avatar-rounded avatar-sm"
                                                            >
                                                                <img
                                                                    src="../assets/images/faces/4.jpg"
                                                                    alt=""
                                                                />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span
                                                                >John Doe</span
                                                            >
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="block mb-1"
                                                            ><i
                                                                class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"
                                                            ></i
                                                            >john.doe@example.com</span
                                                        >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="block"
                                                            ><i
                                                                class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"
                                                            ></i
                                                            >123-456-7890</span
                                                        >
                                                    </div>
                                                </td>
                                                <td>Francisco Morazán</td>
                                                <td>Apacilagua</td>
                                                <td>
                                                    <span
                                                        class="badge bg-success/10 text-success"
                                                        >Activo
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#17782</td>
                                                <td>
                                                    <div
                                                        class="flex items-center gap-2"
                                                    >
                                                        <div
                                                            class="leading-none"
                                                        >
                                                            <span
                                                                class="avatar avatar-rounded avatar-sm"
                                                            >
                                                                <img
                                                                    src="../assets/images/faces/4.jpg"
                                                                    alt=""
                                                                />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span
                                                                >John Doe</span
                                                            >
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="block mb-1"
                                                            ><i
                                                                class="ri-mail-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"
                                                            ></i
                                                            >john.doe@example.com</span
                                                        >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="block"
                                                            ><i
                                                                class="ri-phone-line me-2 align-middle text-[14px] text-textmuted dark:text-textmuted/50"
                                                            ></i
                                                            >123-456-7890</span
                                                        >
                                                    </div>
                                                </td>
                                                <td>Francisco Morazán</td>
                                                <td>Apacilagua</td>
                                                <td>
                                                    <span
                                                        class="badge bg-success/10 text-success"
                                                        >Activo
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer border-t-0">
                                <div class="flex items-center flex-wrap">
                                    <div>
                                        Showing 8 Entries
                                        <i
                                            class="bi bi-arrow-right ms-2 font-medium"
                                        ></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav
                                            aria-label="Page navigation"
                                            class="pagination-style-4"
                                        >
                                            <ul
                                                class="ti-pagination mb-0 flex-wrap"
                                            >
                                                <li class="page-item disabled">
                                                    <a
                                                        class="page-link"
                                                        href="javascript:void(0);"
                                                    >
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link active"
                                                        href="javascript:void(0);"
                                                        >1</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link"
                                                        href="javascript:void(0);"
                                                        >2</a
                                                    >
                                                </li>
                                                <li class="page-item">
                                                    <a
                                                        class="page-link !text-primary"
                                                        href="javascript:void(0);"
                                                    >
                                                        next
                                                    </a>
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

                <!-- Start:: Contact Details Offcanvas -->
                <div
                    class="hs-overlay hidden ti-offcanvas ti-offcanvas-right"
                    tabindex="-1"
                    id="offcanvasExample"
                    aria-labelledby="offcanvasExample"
                >
                    <div class="ti-offcanvas-body !p-0">
                        <button
                            type="button"
                            class="ti-btn btn-wave flex-shrink-0 p-0 m-4 float-end transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white text-textmuted dark:text-textmuted/50 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                            data-hs-overlay="#offcanvasExample"
                        >
                            <span class="sr-only">Close modal</span>
                            <svg
                                class="w-3.5 h-3.5"
                                width="8"
                                height="8"
                                viewBox="0 0 8 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                    fill="currentColor"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="sm:flex items-top p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 main-profile-cover"
                        >
                            <span class="avatar avatar-xxl avatar-rounded me-3">
                                <img
                                    src="../assets/images/faces/11.jpg"
                                    alt=""
                                />
                            </span>
                            <div class="flex-auto main-profile-info">
                                <div class="flex items-center justify-between">
                                    <h6 class="font-medium mb-1">
                                        Ethan Thompson
                                        <span
                                            class="badge bg-success/10 text-success text-[10px]"
                                            ><i
                                                class="ri-circle-fill text-[8px] text-success me-1"
                                            ></i>
                                            New Lead</span
                                        >
                                    </h6>
                                </div>
                                <p
                                    class="mb-2 text-textmuted dark:text-textmuted/50 text-xs"
                                >
                                    Chief Financial Officer (CFO)
                                </p>
                                <div class="flex gap-2 text-[15px] mt-1">
                                    <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary1"
                                        ><i class="ri-phone-line"></i
                                    ></a>
                                    <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary2"
                                        ><i class="ri-mail-line"></i
                                    ></a>
                                    <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-primary3"
                                        ><i class="ri-message-line"></i
                                    ></a>
                                    <div class="ti-dropdown hs-dropdown">
                                        <a
                                            href="javascript:void(0);"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            class="ti-btn ti-btn-icon ti-btn-sm !rounded-full ti-btn-soft-secondary"
                                            ><i class="ri-more-fill"></i
                                        ></a>
                                        <ul
                                            class="ti-dropdown-menu hs-dropdown-menu hidden dropdown-menu-end"
                                        >
                                            <li>
                                                <a
                                                    class="ti-dropdown-item"
                                                    href="javascript:void(0);"
                                                    >Size
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="ti-dropdown-item"
                                                    href="javascript:void(0);"
                                                    >Deals</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="ti-dropdown-item"
                                                    href="javascript:void(0);"
                                                    >Status</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex mt-3 gap-4 p-1 py-0 border-b border-dashed border-defaultborder dark:border-defaultborder/10"
                        >
                            <div class="p-2 text-center flex-auto">
                                <i
                                    class="ri-shake-hands-line p-2 text-xl !rounded-full leading-none text-white shadow-sm bg-primary"
                                ></i>
                                <p
                                    class="font-semibold text-xl text-shadow mb-0 mt-2"
                                >
                                    253
                                </p>
                                <p
                                    class="mb-0 text-textmuted dark:text-textmuted/50"
                                >
                                    Deals
                                </p>
                            </div>
                            <div class="p-2 text-center flex-auto">
                                <i
                                    class="ri-money-dollar-circle-line p-2 text-xl !rounded-full leading-none text-white shadow-sm bg-primary"
                                ></i>
                                <p
                                    class="font-semibold text-xl text-shadow mb-0 mt-2"
                                >
                                    $12k
                                </p>
                                <p
                                    class="mb-0 text-textmuted dark:text-textmuted/50"
                                >
                                    Contributions
                                </p>
                            </div>
                            <div class="p-2 text-center flex-auto">
                                <i
                                    class="ri-thumb-up-line p-2 text-xl !rounded-full leading-none text-white shadow-sm bg-primary"
                                ></i>
                                <p
                                    class="font-semibold text-xl text-shadow mb-0 mt-2"
                                >
                                    $17k
                                </p>
                                <p
                                    class="mb-0 text-textmuted dark:text-textmuted/50"
                                >
                                    Comitted
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10"
                        >
                            <div class="mb-0">
                                <p class="text-[15px] mb-2 font-medium">
                                    Professional Bio :
                                </p>
                                <p
                                    class="text-textmuted dark:text-textmuted/50 mb-0"
                                >
                                    I am
                                    <b class="text-defaulttextcolor"
                                        >Ethan Thompson,</b
                                    >
                                    hereby declaring that I am the founder and
                                    managing director of the prestigious company
                                    named Thompson Enterprises, and I serve as
                                    the Chief Financial Officer (CFO) of the
                                    company.
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10"
                        >
                            <p class="text-[14px] mb-2 font-medium">
                                Contact Information :
                            </p>
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <div class="me-2">
                                        <span
                                            class="avatar avatar-sm avatar-rounded bg-primarytint1color/10 !text-primarytint1color"
                                        >
                                            <i
                                                class="ri-mail-line align-middle text-[14px]"
                                            ></i>
                                        </span>
                                    </div>
                                    <div>
                                        ethanthompson@example.com
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <span
                                                class="text-textmuted dark:text-textmuted/50 leading-none !rounded-full ms-1"
                                            >
                                                <i
                                                    class="ri-file-copy-fill"
                                                ></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip"
                                                >
                                                    Copy
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <div class="me-2">
                                        <span
                                            class="avatar avatar-sm avatar-rounded bg-primarytint2color/10 !text-primarytint2color"
                                        >
                                            <i
                                                class="ri-phone-line align-middle text-[14px]"
                                            ></i>
                                        </span>
                                    </div>
                                    <div>+(333) 555-1234</div>
                                </div>
                                <div class="flex items-center mb-0">
                                    <div class="me-2">
                                        <span
                                            class="avatar avatar-sm avatar-rounded bg-primarytint3color/10 !text-primarytint3color"
                                        >
                                            <i
                                                class="ri-map-pin-line align-middle text-[14px]"
                                            ></i>
                                        </span>
                                    </div>
                                    <div>
                                        1234 Elm Street, Apt 101, Springfield,
                                        IL, 62701, USA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4"
                        >
                            <p class="text-[14px] mb-0 font-medium">
                                Priority:
                            </p>
                            <div class="badge bg-success/10 text-success">
                                <i
                                    class="ri-circle-fill leading-none align-middle text-[0.5625rem] me-1"
                                ></i>
                                Low Priority
                            </div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4"
                        >
                            <p class="text-[14px] mb-0 font-medium">
                                Created Date:
                            </p>
                            <div>25-May-2024</div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4"
                        >
                            <p class="text-[14px] mb-0 font-medium">
                                Lead Source:
                            </p>
                            <div>
                                <i
                                    class="ri-instagram-line bg-danger/10 !text-danger p-1 leading-none align-middle text-[15px] me-1 rounded-sm"
                                ></i>
                                Instagram
                            </div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4"
                        >
                            <p class="text-[14px] mb-0 font-medium">
                                Social Networks :
                            </p>
                            <div class="btn-list mb-0">
                                <button
                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave waves-effect waves-light mb-0"
                                >
                                    <i class="ri-facebook-line font-medium"></i>
                                </button>
                                <button
                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave waves-effect waves-light mb-0"
                                >
                                    <i
                                        class="ri-twitter-x-line font-medium"
                                    ></i>
                                </button>
                                <button
                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary2 btn-wave waves-effect waves-light mb-0"
                                >
                                    <i
                                        class="ri-instagram-line font-medium"
                                    ></i>
                                </button>
                                <button
                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-success btn-wave waves-effect waves-light mb-0"
                                >
                                    <i class="ri-github-line font-medium"></i>
                                </button>
                                <button
                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-danger btn-wave waves-effect waves-light mb-0"
                                >
                                    <i class="ri-youtube-line font-medium"></i>
                                </button>
                            </div>
                        </div>
                        <div
                            class="p-4 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center flex-wrap gap-4"
                        >
                            <p class="text-[14px] mb-0 me-4 font-medium">
                                Tags :
                            </p>
                            <div>
                                <span class="badge bg-primary/10 text-primary"
                                    >New Lead</span
                                >
                                <span class="badge bg-primary/10 text-primary"
                                    >Others</span
                                >
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-[14px] mb-2 font-medium">
                                Relationship Manager :
                                <a
                                    class="bg-primarytint1color/10 !text-primarytint1color text-xs p-1 pe-2 rounded mb-0 float-end"
                                    href="javascript:void(0);"
                                    ><i
                                        class="ri-add-line me-1 align-middle"
                                    ></i
                                    >Add Manager</a
                                >
                            </p>
                            <div class="avatar-list-stacked">
                                <span class="avatar avatar-sm avatar-rounded">
                                    <img
                                        src="../assets/images/faces/2.jpg"
                                        alt="img"
                                    />
                                </span>
                                <span class="avatar avatar-sm avatar-rounded">
                                    <img
                                        src="../assets/images/faces/8.jpg"
                                        alt="img"
                                    />
                                </span>
                                <span class="avatar avatar-sm avatar-rounded">
                                    <img
                                        src="../assets/images/faces/2.jpg"
                                        alt="img"
                                    />
                                </span>
                                <span class="avatar avatar-sm avatar-rounded">
                                    <img
                                        src="../assets/images/faces/10.jpg"
                                        alt="img"
                                    />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: Contact Details Offcanvas -->

                <!-- Start:: Create Contact -->
                <div id="create-contact" class="hs-overlay hidden ti-modal">
                    <div
                        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center"
                    >
                        <div
                            class="max-h-full overflow-hidden ti-modal-content"
                        >
                            <div class="ti-modal-header">
                                <h6
                                    class="modal-title text-[1rem] font-semiboldmodal-title"
                                    id="staticBackdropLabel3"
                                >
                                    Create Contact
                                </h6>
                                <button
                                    type="button"
                                    class="hs-dropdown-toggle ti-modal-close-btn"
                                    data-hs-overlay="#create-contact"
                                >
                                    <span class="sr-only">Close</span>
                                    <svg
                                        class="w-3.5 h-3.5"
                                        width="8"
                                        height="8"
                                        viewBox="0 0 8 8"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <div class="ti-modal-body overflow-y-auto">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-3">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="mb-0 text-center">
                                            <span
                                                class="avatar avatar-xxl avatar-rounded"
                                            >
                                                <img
                                                    src="../assets/images/faces/9.jpg"
                                                    alt=""
                                                    id="profile-img"
                                                />
                                                <span
                                                    class="badge rounded-full bg-primary avatar-badge !border-primary p-1"
                                                >
                                                    <input
                                                        type="file"
                                                        name="photo"
                                                        class="absolute w-full h-full opacity-0"
                                                        id="profile-change"
                                                    />
                                                    <i
                                                        class="fe fe-camera text-[0.75rem]"
                                                    ></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label
                                            for="deal-title"
                                            class="form-label"
                                            >Deal Title</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="deal-title"
                                            placeholder="Deal Title"
                                        />
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label
                                            for="contact-lead-score"
                                            class="form-label"
                                            >Lead Score</label
                                        >
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="contact-lead-score"
                                            placeholder="Lead Score"
                                        />
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label
                                            for="contact-mail"
                                            class="form-label"
                                            >Email</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="contact-mail"
                                            placeholder="Enter Email"
                                        />
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label
                                            for="contact-phone"
                                            class="form-label"
                                            >Phone No</label
                                        >
                                        <input
                                            type="tel"
                                            class="form-control"
                                            id="contact-phone"
                                            placeholder="Enter Phone Number"
                                        />
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label
                                            for="company-name"
                                            class="form-label"
                                            >Company Name</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="company-name"
                                            placeholder="Company Name"
                                        />
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label"
                                            >Lead Source</label
                                        >
                                        <select
                                            class="form-control"
                                            name="choices-multiple-remove-button1"
                                            id="choices-multiple-remove-button1"
                                        >
                                            <option value="Choice 1">
                                                Social Media
                                            </option>
                                            <option value="Choice 2">
                                                Direct mail
                                            </option>
                                            <option value="Choice 3">
                                                Blog Articles
                                            </option>
                                            <option value="Choice 4">
                                                Affiliates
                                            </option>
                                            <option value="Choice 5">
                                                Organic search
                                            </option>
                                        </select>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label class="form-label"
                                            >Last Contacted</label
                                        >
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div
                                                    class="input-group-text text-textmuted dark:text-textmuted/50"
                                                >
                                                    <i
                                                        class="ri-calendar-line"
                                                    ></i>
                                                </div>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="targetDate"
                                                    placeholder="Choose date and time"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label class="form-label">Tags</label>
                                        <select
                                            class="form-control"
                                            name="choices-multiple-remove-button2"
                                            id="choices-multiple-remove-button2"
                                            multiple
                                        >
                                            <option value="">Select Tag</option>
                                            <option value="Choice 1">
                                                New Lead
                                            </option>
                                            <option value="Choice 2">
                                                Prospect
                                            </option>
                                            <option value="Choice 3">
                                                Customer
                                            </option>
                                            <option value="Choice 4">
                                                Hot Lead
                                            </option>
                                            <option value="Choice 5">
                                                Partner
                                            </option>
                                            <option value="Choice 6">
                                                LostCustomer
                                            </option>
                                            <option value="Choice 7">
                                                Influencer
                                            </option>
                                            <option value="Choice 8">
                                                Subscriber
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                                <button
                                    type="button"
                                    class="hs-dropdown-toggle ti-btn ti-btn-soft-secondary"
                                    data-hs-overlay="#create-contact"
                                >
                                    Cancel
                                </button>
                                <a
                                    class="ti-btn ti-btn-primary"
                                    href="javascript:void(0);"
                                >
                                    Create Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: Create Contact -->
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
