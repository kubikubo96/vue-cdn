import Home from './components/Home'

const routes = [
    { path: '', component: Home },
]

const router = new VueRouter({
    routes // short for `routes: routes`
})

const store = new Vuex.Store({
    state: {
        count: 0
    },
    mutations: {
        increment (state, n = 2) {
            state.count += n
        }
    }
})

const app = new Vue({
    router,
    store
}).$mount('#app')
