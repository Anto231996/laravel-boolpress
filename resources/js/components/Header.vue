<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand me-4" href="#">Boolpress</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-1" v-for="(navItem, index) in navItems" :key="index">
                        <router-link class="nav-link active" :to="{ name: navItem.routeName }"> {{ navItem.label }} </router-link>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ms-auto">
                        <a class="nav-link active" href="/admin">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'Header',
    data: function(){
        return{
            navItems : [
                {
                    label: 'Posts',
                    routeName : 'posts'
                },
                {
                    label: 'Contact us',
                    routeName : 'contact'
                }
            ]
        }
    }
}
</script>

<style>
</style>