import { createApp } from 'vue';
import App from './components/App.vue'; // Ensure this points to your main Vue component
import vuetify from './plugins/vuetify'; // Ensure the vuetify plugin file is correctly set up
import 'vuetify/dist/vuetify.min.css';
// If you have additional CSS, you can include it here
import '../css/app.css'; // Assuming you still want to use some custom CSS

const app = createApp(App);
app.use(vuetify);
app.mount('#app');
