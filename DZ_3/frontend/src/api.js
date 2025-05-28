import axios from "axios";

const apiClient = axios.create({
    baseURL: "http://localhost:8000/api",
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
    },
    withCredentials: false, // Sanctum token ne koristi cookies nego Bearer token
});

// Dodaj Authorization header ako postoji token u localStorage
apiClient.interceptors.request.use((config) => {
    const token = localStorage.getItem("authToken");
    if (token) {
        config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
});

const api = {
    employees: {
        getAll(params = {}) {
            return apiClient.get("/employees", { params });
        },
        get(id) {
            return apiClient.get(`/employees/${id}`);
        },
        create(data) {
            return apiClient.post("/employees", data);
        },
        update(id, data) {
            return apiClient.put(`/employees/${id}`, data);
        },
        delete(id) {
            return apiClient.delete(`/employees/${id}`);
        },
    },

    products: {
        getAll(params = {}) {
            return apiClient.get("/products", { params });
        },
        get(id) {
            return apiClient.get(`/products/${id}`);
        },
        create(data) {
            return apiClient.post("/products", data);
        },
        update(id, data) {
            return apiClient.put(`/products/${id}`, data);
        },
        delete(id) {
            return apiClient.delete(`/products/${id}`);
        },
    },

    locations: {
        getAll(params = {}) {
            return apiClient.get("/locations", { params });
        },
        get(id) {
            return apiClient.get(`/locations/${id}`);
        },
        create(data) {
            return apiClient.post("/locations", data);
        },
        update(id, data) {
            return apiClient.put(`/locations/${id}`, data);
        },
        delete(id) {
            return apiClient.delete(`/locations/${id}`);
        },
    },
};

export default api;
