<script setup>
import { ref } from "vue";
import { useAuthStore } from "@/store/authStore";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";

const authStore = useAuthStore();

// --- Formularios ---
const registerForm = ref({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
const loginForm = ref({ email: "", password: "" });

// --- Estado de Carga y Errores ---
const loading = ref(false);
const errors = ref({});

// --- Acciones ---
const handleLoginSubmit = async () => {
    loading.value = true;
    errors.value = {};
    try {
        await authStore.handleLogin(loginForm.value);
        toast.success("¡Login exitoso! Redirigiendo...");
    } catch (error) {
        if (error.response?.status === 401) {
            errors.value = { login: error.response.data.message };
            toast.error(error.response.data.message);
        } else {
            toast.error("Ocurrió un error inesperado durante el login.");
        }
    } finally {
        loading.value = false;
    }
};

const handleRegisterSubmit = async () => {
    loading.value = true;
    errors.value = {};
    try {
        await authStore.handleRegister(registerForm.value);
        toast.success("¡Registro exitoso! Redirigiendo...");
    } catch (error) {
        if (error.response?.status === 422) {
            errors.value = error.response.data.errors;
            toast.error("Por favor, corrige los errores del formulario.");
        } else {
            toast.error("Ocurrió un error inesperado durante el registro.");
        }
    } finally {
        loading.value = false;
    }
};
</script>

<template>
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <!-- ... tu código de breadcrumb ... -->
    </div>
    <section class="account py-80">
        <div class="container container-lg">
            <div class="row g-4">
                <!-- Formulario de Login -->
                <div
                    class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto pe-xl-5"
                >
                    <form
                        @submit.prevent="handleLoginSubmit"
                        class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-full"
                    >
                        <h6 class="text-xl mb-32">Login</h6>
                        <div
                            v-if="errors.login"
                            class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                            role="alert"
                        >
                            {{ errors.login }}
                        </div>
                        <div class="mb-24">
                            <label
                                for="login-email"
                                class="text-neutral-900 text-lg mb-8 font-[500]"
                                >Email address
                                <span class="text-danger">*</span></label
                            >
                            <input
                                v-model="loginForm.email"
                                class="common-input"
                                id="login-email"
                                placeholder="tu@email.com"
                                type="email"
                                required
                            />
                        </div>
                        <div class="mb-24">
                            <label
                                for="login-password"
                                class="text-neutral-900 text-lg mb-8 font-[500]"
                                >Password</label
                            >
                            <input
                                v-model="loginForm.password"
                                type="password"
                                class="common-input"
                                id="login-password"
                                placeholder="Enter Password"
                                required
                            />
                        </div>
                        <div class="mb-24 mt-48">
                            <button
                                type="submit"
                                class="btn btn-main py-18 px-40"
                                :disabled="loading"
                            >
                                {{ loading ? "Iniciando..." : "Log in" }}
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Formulario de Registro -->
                <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <form
                        @submit.prevent="handleRegisterSubmit"
                        class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40"
                    >
                        <h6 class="text-xl mb-32">Register</h6>
                        <div class="mb-24">
                            <label
                                for="register-username"
                                class="text-neutral-900 text-lg mb-8 font-[500]"
                                >Username
                                <span class="text-danger">*</span></label
                            >
                            <input
                                v-model="registerForm.name"
                                class="common-input"
                                id="register-username"
                                placeholder="Write a username"
                                required
                            />
                            <p
                                v-if="errors.name"
                                class="text-red-500 text-xs mt-1"
                            >
                                {{ errors.name[0] }}
                            </p>
                        </div>
                        <div class="mb-24">
                            <label
                                for="register-email"
                                class="text-neutral-900 text-lg mb-8 font-[500]"
                                >Email address
                                <span class="text-danger">*</span></label
                            >
                            <input
                                v-model="registerForm.email"
                                type="email"
                                class="common-input"
                                id="register-email"
                                placeholder="Enter Email Address"
                                required
                            />
                            <p
                                v-if="errors.email"
                                class="text-red-500 text-xs mt-1"
                            >
                                {{ errors.email[0] }}
                            </p>
                        </div>
                        <div class="mb-24">
                            <label
                                for="register-password"
                                class="text-neutral-900 text-lg mb-8 font-[500]"
                                >Password
                                <span class="text-danger">*</span></label
                            >
                            <input
                                v-model="registerForm.password"
                                type="password"
                                class="common-input"
                                id="register-password"
                                placeholder="Enter Password"
                                required
                            />
                            <p
                                v-if="errors.password"
                                class="text-red-500 text-xs mt-1"
                            >
                                {{ errors.password[0] }}
                            </p>
                        </div>
                        <div class="mb-24">
                            <label
                                class="text-neutral-900 text-lg mb-8 font-[500]"
                                >Confirm Password
                                <span class="text-danger">*</span></label
                            >
                            <input
                                v-model="registerForm.password_confirmation"
                                type="password"
                                class="common-input"
                                placeholder="Confirm Password"
                                required
                            />
                        </div>
                        <div class="mt-48">
                            <button
                                type="submit"
                                class="btn btn-main py-18 px-40"
                                :disabled="loading"
                            >
                                {{ loading ? "Registrando..." : "Register" }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>
