import { createRouter,createWebHistory } from "vue-router";
// import Vue from 'vue'
// import Router from 'vue-router'
import login from '../components/login.vue';
import register from '../components/register.vue';

const routes = [
    {
        path:'/login',
        name: 'login',
        component: login
    },
    {
        path:'/register',
        name: 'register',
        component: register
    }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;