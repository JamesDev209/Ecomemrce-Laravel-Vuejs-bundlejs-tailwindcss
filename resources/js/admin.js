import { createApp } from 'vue'
import router from './router/admin'
import AdminApp from './AdminApp.vue'



createApp(AdminApp)
    .use(router)
    .mount('#admin')
