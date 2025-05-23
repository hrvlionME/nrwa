<template>
    <div class="product-container">
        <h2>Products</h2>
        <div class="toolbar">
            <router-link to="/products/new" class="btn-add"
                >➕ Add Product</router-link
            >
        </div>

        <table class="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Product Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="prod in products" :key="prod.ProductID">
                    <td>{{ prod.ProductID }}</td>
                    <td>{{ prod.Name }}</td>
                    <td>{{ prod.ProductNumber }}</td>
                    <td>
                        <router-link
                            :to="`/products/${prod.ProductID}/edit`"
                            class="btn-edit"
                            >✏️ Edit</router-link
                        >
                        <button
                            class="btn-delete"
                            @click="deleteProduct(prod.ProductID)"
                        >
                            🗑️ Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagination" v-if="pagination.total > pagination.per_page">
            <button
                :disabled="pagination.current_page === 1"
                @click="fetchProducts(pagination.current_page - 1)"
            >
                ← Prev
            </button>
            <span
                >Page {{ pagination.current_page }} of
                {{ pagination.last_page }}</span
            >
            <button
                :disabled="pagination.current_page === pagination.last_page"
                @click="fetchProducts(pagination.current_page + 1)"
            >
                Next →
            </button>
        </div>
    </div>
</template>

<script>
import api from "../api";

export default {
    data() {
        return {
            products: [],
            pagination: {
                current_page: 1,
                last_page: 1,
                total: 0,
                per_page: 10,
            },
        };
    },
    mounted() {
        this.fetchProducts();
    },
    methods: {
        fetchProducts(page = 1) {
            api.products.getAll({ page }).then((res) => {
                this.products = res.data.data;
                this.pagination = {
                    current_page: res.data.current_page,
                    last_page: res.data.last_page,
                    total: res.data.total,
                    per_page: res.data.per_page,
                };
            });
        },
        deleteProduct(id) {
            if (confirm("Delete this product?")) {
                api.products.delete(id).then(() => {
                    this.fetchProducts(this.pagination.current_page);
                });
            }
        },
    },
};
</script>

<style scoped>
/* Same styling as employee list */
.product-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 1.5rem;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}
.product-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}
.product-table th,
.product-table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}
.product-table th {
    background-color: #f0f0f0;
}
.btn-add {
    display: inline-block;
    padding: 0.5em 1em;
    margin-bottom: 1rem;
    background-color: #2ecc71;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}
.btn-edit {
    margin-right: 10px;
    color: #2980b9;
}
.btn-delete {
    color: #c0392b;
    background: none;
    border: none;
    cursor: pointer;
}
.pagination {
    display: flex;
    justify-content: space-between;
    margin-top: 1rem;
}
.pagination button {
    padding: 0.4em 0.8em;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.pagination button[disabled] {
    opacity: 0.5;
    cursor: not-allowed;
}
</style>
