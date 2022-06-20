<template>
  <div class="card text-center">
  <div class="card-header">
    <img src="" :alt="`{{post.title}}`">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{post.title}}</h5>
    <p class="card-text">{{post.description}}</p>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</template>

<script>
import axios from 'axios';


export default {
    name: 'Show',

    data(){
      return {
        post: [],
      }
    }, 

    methods : {
      getPost(){
        axios.get(`http://127.0.0.1:8000/api/posts/${this.$route.params.id}`)
          .then((res) => {
            this.post = res.data;
          })
      }
    },

    mounted(){
      this.getPost();


    }
}
</script>

<style>

</style>