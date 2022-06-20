import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './components/pages/Home.vue';
import Contact from './components/pages/Contact.vue';
import NotFound from './components/pages/NotFound.vue'
import Show from './components/pages/Show.vue'

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {path: '/', component: Home},
        {path: '/contact', component: Contact},
        {path: '/posts/:id', component: Show, name: 'post-detail'},
        {path: '*', component: NotFound},

    ] 

});

export default router;