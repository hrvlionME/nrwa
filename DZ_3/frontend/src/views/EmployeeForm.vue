<template>
    <div class="form-container">
        <h2>{{ isEdit ? "Edit" : "Add" }} Employee</h2>

        <form @submit.prevent="submitForm" class="employee-form">
            <div class="form-group" v-for="field in fields" :key="field.name">
                <label :for="field.name">{{ field.label }}:</label>
                <input
                    v-model="employee[field.name]"
                    :type="field.type"
                    :id="field.name"
                    :required="field.required"
                />
            </div>

            <div class="form-group">
                <label for="SalariedFlag">Salaried:</label>
                <input type="checkbox" v-model="employee.SalariedFlag" />
            </div>

            <div class="form-group">
                <label for="CurrentFlag">Currently Employed:</label>
                <input type="checkbox" v-model="employee.CurrentFlag" />
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
            employee: {
                NationalIDNumber: "",
                ContactID: 1,
                LoginID: "",
                Title: "",
                BirthDate: "",
                MaritalStatus: "",
                Gender: "",
                HireDate: "",
                SalariedFlag: false,
                VacationHours: 0,
                SickLeaveHours: 0,
                CurrentFlag: true,
                rowguid: "",
                ModifiedDate: "",
                ManagerID: null,
            },
            fields: [
                {
                    name: "NationalIDNumber",
                    label: "National ID",
                    type: "text",
                    required: true,
                },
                {
                    name: "ContactID",
                    label: "Contact ID",
                    type: "number",
                    required: true,
                },
                {
                    name: "LoginID",
                    label: "Login ID",
                    type: "text",
                    required: true,
                },
                {
                    name: "ManagerID",
                    label: "Manager ID",
                    type: "number",
                    required: false,
                },
                { name: "Title", label: "Title", type: "text", required: true },
                {
                    name: "BirthDate",
                    label: "Birth Date",
                    type: "date",
                    required: true,
                },
                {
                    name: "MaritalStatus",
                    label: "Marital Status",
                    type: "text",
                    required: true,
                },
                {
                    name: "Gender",
                    label: "Gender",
                    type: "text",
                    required: true,
                },
                {
                    name: "HireDate",
                    label: "Hire Date",
                    type: "date",
                    required: true,
                },
                {
                    name: "VacationHours",
                    label: "Vacation Hours",
                    type: "number",
                    required: true,
                },
                {
                    name: "SickLeaveHours",
                    label: "Sick Leave Hours",
                    type: "number",
                    required: true,
                },
                {
                    name: "rowguid",
                    label: "Row GUID",
                    type: "text",
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
            api.employees.get(this.id).then((res) => {
                this.employee = res.data;
            });
        } else {
            this.employee.ModifiedDate = new Date().toISOString().split("T")[0]; // auto-fill
        }
    },
    methods: {
        submitForm() {
            const data = { ...this.employee };
            if (this.isEdit) {
                api.employees.update(this.id, data).then(() => {
                    this.$router.push("/employees");
                });
            } else {
                api.employees.create(data).then(() => {
                    this.$router.push("/employees");
                });
            }
        },
    },
};
</script>

<style scoped>
.form-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 2rem;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.employee-form {
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

input[type="text"],
input[type="number"],
input[type="date"] {
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 6px;
}

input[type="checkbox"] {
    transform: scale(1.2);
    margin-top: 0.3rem;
}

.btn-submit {
    padding: 0.6rem 1.4rem;
    border: none;
    background-color: #3498db;
    color: white;
    font-size: 1rem;
    border-radius: 6px;
    cursor: pointer;
}

.btn-submit:hover {
    background-color: #2980b9;
}
</style>
