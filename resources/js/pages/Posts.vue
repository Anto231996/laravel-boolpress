<template>
    <div class="container pt-5">
        <div class="row">
            <Post v-for="(post, index) in posts" :key="index" :post="post"/>
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item" v-if="pagination.currentPage > 1"
                        @click="getPosts(pagination.currentPage - 1)">
                            <a class="page-link" >Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" >{{pagination.currentPage}}</a>
                        </li>
                        <li class="page-item" v-if="pagination.currentPage < pagination.lastPage"
                        @click="getPosts(pagination.currentPage + 1)">
                            <a class="page-link" >Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import Post from '../components/Post'
export default {
    name: 'PostList',
    components: { 
        Post
    },

    data: function(){
        return{
            posts:[],
            pagination :{}
        }
    },
    
    methods:{
        getPosts(page){
            axios.get(`http://localhost:8000/api/posts?page=${page}`)
            .then((result) => {
                this.posts = result.data.data;
                const { current_page, last_page } = result.data;
                this.pagination = { currentPage : current_page, lastPage : last_page};
            })
            .catch((error) => {
                console.warn(error);
            });
        }
    },

    created(){
        this.getPosts(1);
    }
}
</script>

<style>

</style>