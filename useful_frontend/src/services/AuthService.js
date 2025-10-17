    import axios from 'axios';

    const API_BASE_URL = 'https://localhost:8800/api';

    // export const fetchUsers = async () => {
    //   try {
    //     const response = await axios.get(`${API_BASE_URL}/users`);
    //     return response.data;
    //   } catch (error) {
    //     console.error('Error fetching users:', error);
    //     throw error;
    //   }
    // };

    export const createUser = async (userData) => {
      try {
        const response = await axios.post(`${API_BASE_URL}/register`, userData);
        return response.data;
      } catch (error) {
        console.error('Error creating user:', error);
        throw error;
      }
    };