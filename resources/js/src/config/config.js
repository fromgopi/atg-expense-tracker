import axios from "axios";

/**
 * Configuring base url for the redux to call the backend for data
 * @type {AxiosInstance}
 */
const baseUrl = axios.create({
    baseURL: 'http://localhost:8000/api/v1',
    timeout: 1000,
    headers: {'Content-Type': 'application/json'}
});

export default baseUrl;




