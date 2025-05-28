<template>
    <div class="employee-container">
        <h2>Employees</h2>
        <div class="toolbar">
            <router-link to="/employees/new" class="btn-add"
                >➕ Add Employee</router-link
            >
        </div>

        <table class="employee-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>National ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="emp in employees" :key="emp.id">
                    <td>{{ emp.id }}</td>
                    <td>{{ emp.NationalIDNumber }}</td>
                    <td>{{ emp.Title }}</td>
                    <td>
                        <router-link
                            :to="`/employees/${emp.id}/edit`"
                            class="btn-edit"
                            >✏️ Edit</router-link
                        >
                        <button
                            class="btn-delete"
                            @click="deleteEmployee(emp.id)"
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
                @click="fetchEmployees(pagination.current_page - 1)"
            >
                ← Prev
            </button>
            <span
                >Page {{ pagination.current_page }} of
                {{ pagination.last_page }}</span
            >
            <button
                :disabled="pagination.current_page === pagination.last_page"
                @click="fetchEmployees(pagination.current_page + 1)"
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
            employees: [],
            pagination: {
                current_page: 1,
                last_page: 1,
                total: 0,
                per_page: 10,
            },
        };
    },
    mounted() {
        // 1. Ako postoji token u URL-u, spremi ga u localStorage
        const urlParams = new URLSearchParams(window.location.search);
        const token = urlParams.get("token");
        if (token) {
            localStorage.setItem("authToken", token);
            // Makni token iz URL-a
            const url = new URL(window.location.href);
            url.searchParams.delete("token");
            window.history.replaceState({}, document.title, url.toString());
        }

        // 2. Dohvati zaposlenike
        this.fetchEmployees();
    },
    methods: {
        fetchEmployees(page = 1) {
            api.employees
                .getAll({ page })
                .then((res) => {
                    this.employees = res.data.data;
                    this.pagination = {
                        current_page: res.data.current_page,
                        last_page: res.data.last_page,
                        total: res.data.total,
                        per_page: res.data.per_page,
                    };
                })
                .catch((err) => {
                    if (err.response && err.response.status === 401) {
                        alert("Niste autorizirani. Molimo prijavite se.");
                        this.$router.push("/login");
                    } else {
                        console.error(
                            "Greška pri dohvaćanju zaposlenika:",
                            err
                        );
                    }
                });
        },
        deleteEmployee(id) {
            if (confirm("Are you sure you want to delete this employee?")) {
                api.employees
                    .delete(id)
                    .then(() => {
                        this.fetchEmployees(this.pagination.current_page);
                    })
                    .catch((err) => {
                        console.error("Greška kod brisanja:", err);
                        alert("Brisanje nije uspjelo.");
                    });
            }
        },
    },
};
</script>

<style scoped>
.employee-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 1.5rem;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.employee-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

.employee-table th,
.employee-table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.employee-table th {
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
    align-items: center;
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
