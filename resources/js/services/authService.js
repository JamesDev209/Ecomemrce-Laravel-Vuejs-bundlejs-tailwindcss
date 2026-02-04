import axios from "axios";

const apiClient = axios.create({
    baseURL: "/api/clients",
    headers: {
        "Content-Type": "application/json",
    },
});
export const setAuthHeader = (token) => {
    if (token) {
        apiClient.defaults.headers.common['Authorization'] = `Bearer ${token}`;
    } else {
        delete apiClient.defaults.headers.common['Authorization'];
    }
};

export const login = (credentials) => {
    return apiClient.post("/login", credentials);
};

export const register = (userData) => {
    return apiClient.post("/register", userData);
};
