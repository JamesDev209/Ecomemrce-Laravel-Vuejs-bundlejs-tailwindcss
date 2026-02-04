import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { login, register, setAuthHeader } from "@/services/authService";
import { useRouter } from "vue-router";

export const useAuthStore = defineStore("auth", () => {
    // --- State ---
    const client = ref(JSON.parse(localStorage.getItem("client")) || null);
    const authToken = ref(localStorage.getItem("authToken") || null);
    const router = useRouter();

    // --- Getters ---
    const isAuthenticated = computed(() => !!client.value && !!authToken.value);
    const user = computed(() => client.value);

    // --- Actions ---
    function setAuthData(clientData, token) {
        client.value = clientData;
        authToken.value = token;

        if (clientData && token) {
            localStorage.setItem("client", JSON.stringify(clientData));
            localStorage.setItem("authToken", token);
            setAuthHeader(token);
        } else {
            localStorage.removeItem("client");
            localStorage.removeItem("authToken");
            setAuthHeader(null);
        }
    }

    async function handleLogin(credentials) {
        const response = await login(credentials);
        setAuthData(response.data.client, response.data.token);
        router.push({ name: "home" });
    }

    async function handleRegister(userData) {
        const response = await register(userData);
        setAuthData(response.data.client, response.data.token);
        router.push({ name: "home" });
    }

    function handleLogout() {
        setAuthData(null, null);
        router.push({ name: "client-auth" });
    }

    function tryToLogin() {
        if (client.value && authToken.value) {
            setAuthHeader(authToken.value);
        }
    }

    return {
        // State
        client,
        authToken,
        // Getters
        isAuthenticated,
        user,
        // Actions
        handleLogin,
        handleRegister,
        handleLogout,
        tryToLogin,
    };
});
