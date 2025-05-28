<template>
    <div class="form-container">
        <h2>Prijava</h2>
        <form @submit.prevent="login">
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
            <button type="submit" class="btn-submit">Prijavi se</button>
            <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
        </form>

        <div class="oauth-section">
            <p>Ili se prijavi putem:</p>
            <button class="btn-oauth" @click="loginWithGoogle">
                Google račun
            </button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "LoginPage",
    data() {
        return {
            email: "",
            password: "",
            errorMessage: "",
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post(
                    "http://localhost:8000/api/login",
                    {
                        email: this.email,
                        password: this.password,
                    }
                );
                localStorage.setItem(
                    "user",
                    JSON.stringify(response.data.user)
                );
                this.$router.push("/employees");
            } catch (error) {
                this.errorMessage =
                    error.response?.data?.message || "Greška pri prijavi";
            }
        },
        loginWithGoogle() {
            window.location.href = "http://localhost:8000/api/auth/google";
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
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}
.btn-submit:hover {
    background-color: #0056b3;
}
.oauth-section {
    margin-top: 30px;
    text-align: center;
}
.btn-oauth {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #db4437;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}
.btn-oauth:hover {
    background-color: #c1351d;
}
.error {
    margin-top: 10px;
    color: red;
}
</style>
