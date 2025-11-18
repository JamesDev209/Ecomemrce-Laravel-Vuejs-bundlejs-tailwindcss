<script setup>
import Header from "../../components/Layout/Header.vue";
import { ref } from "vue";
import axios from "axios";
import router from "../../router/admin";

const email = ref("");
const password = ref("");
const errorMsg = ref("");

const login = async () => {
    try {
        errorMsg.value = "";

        await axios.post("/admin/login", {
            email: email.value,
            password: password.value,
        });

        router.push("/admin/dashboard");
    } catch (err) {
        errorMsg.value = "Credenciales incorrectas";
        console.log(err);
    }
};
</script>

<template>
    <Header />
    <div
        class="preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white"
    >
        <img src="" alt="Image" />
    </div>
    <div class="overlay"></div>
    <div
        class="progress-wrap fixed right-[36px] bottom-[36px] h-[46px] w-[46px] leading-[46px] cursor-pointer block rounded-[50px] shadow-inset z-[10000] opacity-0 invisible translate-y-[15px] transition-all duration-200 ease-linear bg-transparent max-lg:right-[24px] max-lg:bottom-[24px] max-lg:h-[40px] max-lg:w-[40px] max-lg:leading-[40px] hover:scale-[1.06] after:absolute after:font-[900] after:text-center after:w-[46px] after:h-[46px] after:leading-[46px] after:text-[18px] after:left-0 after:top-0 after:cursor-pointer after:block after:content-['\e08e'] after:font-phospor after:z-[1] after:transition-all after:duration-200 after:ease-linear after:text-main max-lg:after:h-[40px] max-lg:after:w-[40px] max-lg:after:leading-[40px]"
    >
        <svg
            class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
        >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <div class="header-top bg-main-600 py-16">
        <div class="container container-lg">
            <div class="flex-between flex-wrap gap-8"></div>
        </div>
    </div>
    <div class="login-bg"></div>
    <main class="main-content bg-gray-50 bg-opacity-90">
        <div class="container py-24">
            <div
                class="login-container max-w-[500px] mx-auto bg-white rounded-12 p-24"
            >
                <div class="text-center mb-16">
                    <img src="" alt="Logo admin" class="h-[50px] mx-auto" />
                </div>
                <h2 class="login-title text-20 font-semibold mb-16 text-center">
                    Iniciar sesión Administrador
                </h2>
                <form @submit.prevent="login" class="space-y-12">
                    <div>
                        <label
                            v-f
                            for="email"
                            class="form-label block mb-2 text-gray-700 text-sm"
                            >Correo electrónico</label
                        >
                        <input
                            type="email"
                            id="email"
                            v-model="email"
                            class="w-full px-12 py-8 text-sm border border-gray-300 rounded-8 focus:border-main-500 focus:ring-1 focus:ring-main-500 transition-colors"
                            placeholder="Ingresa tu correo"
                        
                        />
                        
                    
                    </div>
                    <div class="mt-8">
                        <label
                            for="password"
                            class="form-label block mb-2 text-gray-700 text-sm"
                            >Contraseña</label
                        >
                        <input
                            type="password"
                            id="password"
                            v-model="password"
                            class="w-full px-12 py-8 text-sm border border-gray-300 rounded-8
                                focus:border-main-500 focus:ring-1 focus:ring-main-500 transition-colors"
                            placeholder="Ingresa tu contraseña"
                        />
                    </div>
                    <!-- <div class="flex-between items-center">
                    <div class="flex items-center">
                        <input
                        type="checkbox"
                        id="remember"
                        class="form-checkbox h-16 w-16"
                        />
                        <label for="remember" class="ms-8 text-sm">Recordarme</label>
                    </div>
                    <a
                        href="#"
                        class="text-sm text-main-600 hover-text-decoration-underline"
                        >¿Olvidaste tu contraseña?</a
                    >
                    </div> -->
                        <button
        type="submit"
        class="btn btn-primary w-full py-8 text-sm bg-main-600 text-white rounded-8 hover:bg-main-700 transition-colors duration-200"
    >
        Iniciar sesión
    </button>
                </form>
                <!-- <div class="text-center mt-16">
                    <p class="text-gray-500 text-sm">
                    ¿No tienes una cuenta?
                    <a
                        href="register.html"
                        class="text-main-600 hover-text-decoration-underline"
                        >Regístrate</a
                    >
                    </p>
                </div> -->
            </div>
        </div>
    </main>
    <footer class="footer bg-main-600 text-white py-16">
        <div class="container">
            <div class="text-center">
                <p class="text-sm">2025 Toku. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
</template>

<style>
.login-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background: linear-gradient(-45deg, #f5f7fa, #e4e8ed, #f0f4f8, #e8ecf1);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
}
@keyframes gradientBG {
    0% {
        background-position: 0 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0 50%;
    }
}
.login-container {
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}
.login-title {
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}
</style>
