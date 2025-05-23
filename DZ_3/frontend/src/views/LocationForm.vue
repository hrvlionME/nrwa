<template>
    <div class="form-container">
        <h2>{{ isEdit ? "Edit" : "Add" }} Location</h2>

        <form @submit.prevent="submitForm" class="location-form">
            <div class="form-group" v-for="field in fields" :key="field.name">
                <label :for="field.name">{{ field.label }}:</label>
                <input
                    v-model="location[field.name]"
                    :type="field.type"
                    :id="field.name"
                    :required="field.required"
                />
            </div>

            <button type="submit" class="btn-submit">
                {{ isEdit ? "Update" : "Create" }}
            </button>
        </form>
    </div>
</template>

<script>
import api from "../api";

export default {
    props: ["id"],
    data() {
        return {
            location: {
                LocationID: "",
                Name: "",
                CostRate: 0,
                Availability: 0,
                ModifiedDate: "",
            },
            fields: [
                {
                    name: "LocationID",
                    label: "Location ID",
                    type: "number",
                    required: true,
                },
                { name: "Name", label: "Name", type: "text", required: true },
                {
                    name: "CostRate",
                    label: "Cost Rate",
                    type: "number",
                    required: true,
                },
                {
                    name: "Availability",
                    label: "Availability",
                    type: "number",
                    required: true,
                },
                {
                    name: "ModifiedDate",
                    label: "Modified Date",
                    type: "date",
                    required: true,
                },
            ],
        };
    },
    computed: {
        isEdit() {
            return !!this.id;
        },
    },
    mounted() {
        if (this.isEdit) {
            api.locations.get(this.id).then((res) => {
                this.location = res.data;
            });
        } else {
            this.location.ModifiedDate = new Date().toISOString().split("T")[0];
        }
    },
    methods: {
        submitForm() {
            const data = { ...this.location };
            if (this.isEdit) {
                api.locations.update(this.id, data).then(() => {
                    this.$router.push("/locations");
                });
            } else {
                api.locations.create(data).then(() => {
                    this.$router.push("/locations");
                });
            }
        },
    },
};
</script>

<style scoped>
/* form styling like products/employees */
.form-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 2rem;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
.location-form {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
}
.form-group {
    display: flex;
    flex-direction: column;
}
label {
    font-weight: 600;
    margin-bottom: 0.3rem;
}
input {
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 6px;
}
.btn-submit {
    padding: 0.6rem 1.4rem;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
</style>
