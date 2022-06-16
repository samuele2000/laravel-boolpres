<template>
    <div>
        <Loader v-if="isLoading"/>
        <div class="card border-dark mb-3" style="max-width: 18rem;" v-for="post in posts" :key="post.id">
            <div class="card-header">
                
            </div>
            <div class="card-body text-dark">
                <h5 class="card-title">{{post.title}}</h5>
                <p class="card-text">{{post.description}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import Loader from '../Loader.vue'

    export default {
        name: "Post",

        components:{
            Loader
        },

        data() {
            return {
                posts: [],
                isLoading: true,
            }
        },

        methods: {
            getPost() {
                axios.get("http://127.0.0.1:8000/api/posts")
                    .then((res) => {
                        //console.log(res.data.posts)

                        this.posts = res.data.posts
                    }).then(()=>{
                        this.isLoading = false;
                    })
            }
        },

        mounted() {
            this.getPost();
        }
    }

</script>
