import './bootstrap';
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { createPinia } from 'pinia'; // Importar Pinia

const pinia = createPinia(); // Crear instancia de Pinia

createApp(App)
    .use(router)
    .use(pinia) // Usar Pinia en la aplicación
    .mount('#app')

