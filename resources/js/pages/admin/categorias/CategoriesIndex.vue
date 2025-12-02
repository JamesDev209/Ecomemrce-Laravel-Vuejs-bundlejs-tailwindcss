<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import Sidebar from "../components/Sidebar.vue";

// Estado
const categories = ref([]);
const loading = ref(true);

// Lógica: obtener categorías
const fetchCategories = async () => {
    try {
        const res = await axios.get("/api/categories");
        categories.value = res.data.categories; // <-- ¡Este es el cambio!
    } catch (error) {
        console.error("Error cargando categorías:", error);
    } finally {
        loading.value = false;
    }
};

onMounted(() => {
    fetchCategories();
});
</script>

<template>
    <Sidebar />

    <div class="app-content main-content">
        <div class="side-app">
            <div class="main-container container-fluid">
                <h1>Gestión de Categorías</h1>

                <!-- Estado de carga -->
                <div v-if="loading">Cargando categorías...</div>

                <!-- Tabla -->
                <table v-else class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="cat in categories" :key="cat.id">
                            <td>{{ cat.id }}</td>
                            <td>{{ cat.name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
