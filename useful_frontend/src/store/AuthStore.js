import { defineStore } from 'pinia'
import AuthService from "../services/AuthService"

export const useStore = defineStore('user', {
    state: () => ({
        users: [],
        user: null,
        userData : null,
        loading: false,
        error: null,
        }),
    actions:{
        async register(userData) {
          this.loading = true;
          this.error = null;
          
          try {
            const response = await AuthService.createUser(userData);
            console.log(response)
            this.user = response
            this.users.push(response)
            return response
          } catch (error) {
            this.error = error;
        }},
    },
    persist: true
})
