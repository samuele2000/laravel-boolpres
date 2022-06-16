<template>
    <div>
        <Header/>
        <main >
            <div class="container">
             

                <router-view></router-view>
            </div>
        </main>
    </div>
</template>

<script>
    import Header from './Header.vue'
    import Post from './Posts/Post.vue'

    export default{
        name: "App",

        components: {
            Header,
            Post
        }
    }
    
</script>
