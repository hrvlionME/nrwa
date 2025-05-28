import { createRouter, createWebHistory } from "vue-router";
import EmployeeList from "../views/EmployeeList.vue";
import EmployeeForm from "../views/EmployeeForm.vue";
import ProductList from "../views/ProductList.vue";
import ProductForm from "../views/ProductForm.vue";
import LocationList from "../views/LocationList.vue";
import LocationForm from "../views/LocationForm.vue";
import LoginPage from "../views/LoginPage.vue";
import RegisterPage from "../views/RegisterPage.vue";

const routes = [
    { path: "/", redirect: "/employees" },
    { path: "/employees", component: EmployeeList },
    { path: "/employees/new", component: EmployeeForm },
    { path: "/employees/:id/edit", component: EmployeeForm, props: true },
    { path: "/products", component: ProductList },
    { path: "/products/new", component: ProductForm },
    { path: "/products/:id/edit", component: ProductForm, props: true },
    { path: "/locations", component: LocationList },
    { path: "/locations/new", component: LocationForm },
    { path: "/locations/:id/edit", component: LocationForm, props: true },
    {
        path: "/login",
        component: LoginPage,
    },
    {
        path: "/register",
        component: RegisterPage,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
