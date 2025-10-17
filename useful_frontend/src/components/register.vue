<template>
    
    <body class="min-h-screen bg-gradient-to-br from-blue-100 to-purple-200 flex items-center justify-center p-4">

  <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-6 sm:p-8">
    <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Create an Account</h2>
    <form action="/register" method="POST" class="space-y-5">

      <!-- Full Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
        <input type="text" id="name" name="name" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />
      </div>
      <!-- Password Confirmation -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md transition-all duration-200">
        Register
      </button>

      <!-- Login Redirect -->
      <p class="text-center text-sm text-gray-600 mt-4">
        Already have an account?
        <a href="/login" class="text-blue-600 font-medium hover:underline">Login</a>
      </p>
    </form>
  </div>
  </body>
</template>
<script setup>
import { useStore } from '../store/AuthStore'

const useAuthStore = useStore;

</script>