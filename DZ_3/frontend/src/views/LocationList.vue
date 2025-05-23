<template>
    <div class="location-container">
        <h2>Locations</h2>
        <div class="toolbar">
            <router-link to="/locations/new" class="btn-add"
                >➕ Add Location</router-link
            >
        </div>

        <table class="location-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Cost Rate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="loc in locations" :key="loc.LocationID">
                    <td>{{ loc.LocationID }}</td>
                    <td>{{ loc.Name }}</td>
                    <td>{{ loc.CostRate }}</td>
                    <td>
                        <router-link
                            :to="`/locations/${loc.LocationID}/edit`"
                            class="btn-edit"
                            >✏️ Edit</router-link
                        >
                        <button
                            class="btn-delete"
                            @click="deleteLocation(loc.LocationID)"
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
                @click="fetchLocations(pagination.current_page - 1)"
            >
                ← Prev
            </button>
            <span
                >Page {{ pagination.current_page }} of
                {{ pagination.last_page }}</span
            >
            <button
                :disabled="pagination.current_page === pagination.last_page"
                @click="fetchLocations(pagination.current_page + 1)"
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
            locations: [],
            pagination: {
                current_page: 1,
                last_page: 1,
                total: 0,
                per_page: 10,
            },
        };
    },
    mounted() {
        this.fetchLocations();
    },
    methods: {
        fetchLocations(page = 1) {
            api.locations.getAll({ page }).then((res) => {
                this.locations = res.data.data;
                this.pagination = {
                    current_page: res.data.current_page,
                    last_page: res.data.last_page,
                    total: res.data.total,
                    per_page: res.data.per_page,
                };
            });
        },
        deleteLocation(id) {
            if (confirm("Delete this location?")) {
                api.locations.delete(id).then(() => {
                    this.fetchLocations(this.pagination.current_page);
                });
            }
        },
    },
};
</script>

<style scoped>
/* same styling as employees/products */
.location-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 1.5rem;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}
.location-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}
.location-table th,
.location-table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}
.location-table th {
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
