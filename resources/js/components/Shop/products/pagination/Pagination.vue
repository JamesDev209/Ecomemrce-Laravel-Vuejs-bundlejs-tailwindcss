<script setup>
const props = defineProps({
    currentPage: Number,
    lastPage: Number,
});

const emit = defineEmits(["change-page"]);

const goTo = (page) => {
    if (page >= 1 && page <= props.lastPage) {
        emit("change-page", page);
    }
};
</script>

<template>
    <li>
        <button @click="goTo(currentPage - 1)">←</button>
    </li>

    <li class="page-item active" v-for="page in lastPage" :key="page">
        <button
            class="page-link h-48 w-48 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
            @click="goTo(page)"
            :class="page === currentPage ? 'active' : ''"
        >
            {{ page }}
        </button>
    </li>

    <li>
        <button @click="goTo(currentPage + 1)">→</button>
    </li>
</template>
