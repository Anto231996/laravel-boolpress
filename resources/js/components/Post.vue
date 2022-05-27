<template>
    <div class="d-flex align-items-center flex-column col-4 mb-5">
        <img :src="post.image_url" :alt="post.title">
        <div class="text-center">
            <h2>{{post.title}}</h2>
            <h4>{{ post.author }}</h4>
            </div>
        </div>
</template>

<script>

export default {
    name: "Post",

    props: ['post']
}

</script>

<style>

</style>