<template>
    <div>
        <Sidebar />
        <AdminNabvar />
        <div class="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script setup>
import Sidebar from "../components/Sidebar.vue";
import AdminNabvar from "./AdminNabvar.vue";
</script>