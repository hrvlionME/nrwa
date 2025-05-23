<template>
    <div id="app">
        <nav>
            <router-link to="/employees">Employees</router-link> |
            <router-link to="/employees/new">Add New</router-link>
        </nav>
        <main>
            <router-view />
        </main>
    </div>
</template>

<script>
export default {
    name: "App",
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding: 2rem;
    color: #2c3e50;
}

nav {
    margin-bottom: 1rem;
}

nav a {
    text-decoration: none;
    color: #42b983;
    margin: 0 1rem;
}

nav a.router-link-exact-active {
    font-weight: bold;
    color: #35495e;
}

main {
    max-width: 960px;
    margin: 0 auto;
    text-align: left;
}
</style>
