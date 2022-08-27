import './bootstrap';

import {createApp} from 'vue';

import App from './components/login.vue'
import vuetify from './plugins/vuetify'
import axios from 'axios'
import VueAxios from 'vue-axios'

createApp(App)
    .use(vuetify)
    .use(VueAxios, axios)
    .mount('#app')

