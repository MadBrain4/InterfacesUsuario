import './bootstrap';

import {createApp} from 'vue';

import App from './components/auth.vue'
import vuetify from './plugins/vuetify'
import axios from 'axios'
import VueAxios from 'vue-axios'

createApp(App)
    .use(vuetify)
    .use(VueAxios, axios)
    .mount('#app')
