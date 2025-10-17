<script setup>
import register from './components/register.vue'
import login from './components/login.vue'
</script>

<template>
<p>HelloWorld</p>
<RouterLink to="/register">Register</RouterLink>
<RouterLink to="/login">Login</RouterLink>
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
