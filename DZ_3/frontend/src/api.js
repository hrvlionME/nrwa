import axios from "axios";

const apiClient = axios.create({
    baseURL: "http://localhost:8000/api",
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
    },
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
};

export default api;
