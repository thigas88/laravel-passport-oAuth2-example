import './bootstrap';
import * as Vue from 'vue';

import Counter from './components/Counter.vue'
import PassportClients from './components/app/Clients.vue'
import PassportAuthorizedClients from './components/app/AuthorizedClients.vue'
import PassportPersonalAccessTokens from './components/app/PersonalAccessTokens.vue'


window.Vue = Vue;

/**
 * Vue 3
 */

const app = Vue.createApp()

// apps components
app.component('counter', Counter)
app.component('passport-clients', PassportClients)
app.component('passport-authorized-clients', PassportAuthorizedClients)
app.component('passport-personal-access-tokens', PassportPersonalAccessTokens)

app.mount('#app')

