<script setup>  
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
    <div class="grid grid-cols-12 authentication authentication-cover-main mx-0">
        <div class="xxl:col-span-6 xl:col-span-7 col-span-12">
            <div class="grid grid-cols-12 justify-center items-center h-full">
                <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                    <div class="box my-auto border border-defaultborder dark:border-defaultborder/10">
                        <div class="box-body p-[3rem]">
                            <p class="h5 mb-2 text-center">Sign In</p>
                            <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">Welcome back Henry !</p>
                            <div class="flex mb-3 justify-between gap-2 flex-wrap flex-lg-nowrap">
                                <button class="ti-btn ti-btn-lg border border-defaultborder dark:border-defaultborder/10 flex items-center justify-center flex-auto bg-light">
                                    <span class="avatar avatar-xs flex-shrink-0">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.Q9fYaqBx7zMjwaAcgzxsQwAAAA?w=300&h=300&rs=1&pid=ImgDetMain&o=7&rm=3" alt="">
                                    </span>
                                    
                                </button>
                            </div>
                   <form @submit.prevent="login">
    <div class="grid grid-cols-12 gap-y-4">
        <!-- EMAIL -->
        <div class="xl:col-span-12 col-span-12">
            <label
                for="signin-email"
                class="form-label text-defaulttextcolor"
            >
                Email
            </label>
            <input
                type="email"
                class="form-control"
                id="signin-email"
                placeholder="admin@email.com"
                v-model="email"
                required
            />
        </div>

        <!-- PASSWORD -->
        <div class="xl:col-span-12 col-span-12 mb-2">
            <label
                for="signin-password"
                class="form-label text-defaulttextcolor block"
            >
                Password
            </label>

            <div class="relative">
                <input
                    type="password"
                    class="form-control"
                    id="signin-password"
                    placeholder="••••••••"
                    v-model="password"
                    required
                />
            </div>

            <div class="mt-2">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="remember"
                    />
                    <label
                        class="form-check-label text-textmuted font-normal"
                        for="remember"
                    >
                        Remember me
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- ERROR -->
    <p v-if="errorMsg" class="text-red-500 text-sm mt-2">
        {{ errorMsg }}
    </p>

    <!-- SUBMIT -->
    <div class="grid mt-4">
        <button type="submit" class="ti-btn ti-btn-primary">
            Sign In
        </button>
    </div>
</form>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            </div>
        </div>
        <div class="xxl:col-span-6 xl:col-span-5 lg:col-span-12 xl:block hidden px-0">
            <div class="authentication-cover overflow-hidden">
                <div class="authentication-cover-logo"> 
                    <a href="index.html"> 
                        <img src="../assets/images/brand-logos/desktop-white.png" alt="" class="authentication-brand desktop-white"> 
                    </a> 
                </div>
                <div class="aunthentication-cover-content flex items-center justify-center">
                    <div>
                        <h3 class="text-white mb-1 font-medium">Welcome!</h3>
                        <h6 class="text-white mb-3 font-medium">Login to Your Account</h6>
                        <p class="text-white mb-1 op-6">Welcome to the Admin Dashboard. Please log in to securely manage your administrative tools and oversee platform activities. Your credentials ensure system integrity and functionality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<style scoped> 

</style>