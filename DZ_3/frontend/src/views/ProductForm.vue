<template>
    <div class="form-container">
        <h2>{{ isEdit ? "Edit" : "Add" }} Product</h2>

        <form @submit.prevent="submitForm" class="product-form">
            <div class="form-group" v-for="field in fields" :key="field.name">
                <label :for="field.name">{{ field.label }}:</label>
                <input
                    v-model="product[field.name]"
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
            product: {
                ProductID: "",
                Name: "",
                ProductNumber: "",
                MakeFlag: false,
                FinishedGoodsFlag: false,
                Color: "",
                SafetyStockLevel: 0,
                ReorderPoint: 0,
                StandardCost: 0,
                ListPrice: 0,
                Size: "",
                SizeUnitMeasureCode: "",
                WeightUnitMeasureCode: "",
                Weight: null,
                DaysToManufacture: 0,
                ProductLine: "",
                Class: "",
                Style: "",
                ProductSubcategoryID: null,
                ProductModelID: null,
                SellStartDate: "",
                SellEndDate: "",
                DiscontinuedDate: "",
                rowguid: "",
                ModifiedDate: "",
            },
            fields: [
                {
                    name: "ProductID",
                    label: "Product ID",
                    type: "number",
                    required: true,
                },
                { name: "Name", label: "Name", type: "text", required: true },
                {
                    name: "ProductNumber",
                    label: "Product Number",
                    type: "text",
                    required: true,
                },
                {
                    name: "Color",
                    label: "Color",
                    type: "text",
                    required: false,
                },
                {
                    name: "SafetyStockLevel",
                    label: "Safety Stock Level",
                    type: "number",
                    required: true,
                },
                {
                    name: "ReorderPoint",
                    label: "Reorder Point",
                    type: "number",
                    required: true,
                },
                {
                    name: "StandardCost",
                    label: "Standard Cost",
                    type: "number",
                    required: true,
                },
                {
                    name: "ListPrice",
                    label: "List Price",
                    type: "number",
                    required: true,
                },
                { name: "Size", label: "Size", type: "text", required: false },
                {
                    name: "SizeUnitMeasureCode",
                    label: "Size Unit",
                    type: "text",
                    required: false,
                },
                {
                    name: "WeightUnitMeasureCode",
                    label: "Weight Unit",
                    type: "text",
                    required: false,
                },
                {
                    name: "Weight",
                    label: "Weight",
                    type: "number",
                    required: false,
                },
                {
                    name: "DaysToManufacture",
                    label: "Days to Manufacture",
                    type: "number",
                    required: true,
                },
                {
                    name: "ProductLine",
                    label: "Product Line",
                    type: "text",
                    required: false,
                },
                {
                    name: "Class",
                    label: "Class",
                    type: "text",
                    required: false,
                },
                {
                    name: "Style",
                    label: "Style",
                    type: "text",
                    required: false,
                },
                {
                    name: "ProductSubcategoryID",
                    label: "Subcategory ID",
                    type: "number",
                    required: false,
                },
                {
                    name: "ProductModelID",
                    label: "Model ID",
                    type: "number",
                    required: false,
                },
                {
                    name: "SellStartDate",
                    label: "Sell Start Date",
                    type: "date",
                    required: true,
                },
                {
                    name: "SellEndDate",
                    label: "Sell End Date",
                    type: "date",
                    required: false,
                },
                {
                    name: "DiscontinuedDate",
                    label: "Discontinued Date",
                    type: "date",
                    required: false,
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
            api.products.get(this.id).then((res) => {
                this.product = res.data;
            });
        } else {
            this.product.ModifiedDate = new Date().toISOString().split("T")[0];
        }
    },
    methods: {
        submitForm() {
            const data = { ...this.product };
            if (this.isEdit) {
                api.products.update(this.id, data).then(() => {
                    this.$router.push("/products");
                });
            } else {
                api.products.create(data).then(() => {
                    this.$router.push("/products");
                });
            }
        },
    },
};
</script>

<style scoped>
/* Same style as employee form */
.form-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 2rem;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
.product-form {
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
