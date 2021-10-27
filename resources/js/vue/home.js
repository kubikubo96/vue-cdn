import Home from './components/Home'

const routes = [
    { path: '', component: Home },
]

const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    router
}).$mount('#app')
