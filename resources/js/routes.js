import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './components/pages/Home.vue';
import Contact from './components/pages/Contact.vue';
import NotFound from './components/pages/NotFound.vue'
import show from './components/pages/show.vue'

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {path: '/', component: Home},
        {path: '/contact', component: Contact},
        {path: '/posts/:id', component: show, name: 'post-detail'},
        {path: '*', component: NotFound},

    ] 

});

export default router;