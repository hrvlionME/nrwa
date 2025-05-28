<template>
    <div class="form-container">
        <h2>Registracija</h2>
        <form @submit.prevent="register">
            <div class="form-group">
                <label>Ime</label>
                <input
                    v-model="name"
                    type="text"
                    required
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input
                    v-model="email"
                    type="email"
                    required
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <label>Lozinka</label>
                <input
                    v-model="password"
                    type="password"
                    required
                    class="form-control"
                />
            </div>
            <button type="submit" class="btn-submit">Registriraj se</button>
            <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "RegisterPage",
    data() {
        return {
            name: "",
            email: "",
            password: "",
            errorMessage: "",
        };
    },
    methods: {
        async register() {
            try {
                await axios.post("http://localhost:8000/api/register", {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                });
                this.$router.push("/login");
            } catch (error) {
                this.errorMessage =
                    error.response?.data?.message || "Greška pri registraciji";
            }
        },
    },
};
</script>

<style scoped>
.form-container {
    max-width: 500px;
    margin: 40px auto;
    padding: 25px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background: #fafafa;
}
.form-group {
    margin-bottom: 15px;
}
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
input.form-control {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}
.btn-submit {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}
.btn-submit:hover {
    background-color: #1e7e34;
}
.error {
    margin-top: 10px;
    color: red;
}
</style>
