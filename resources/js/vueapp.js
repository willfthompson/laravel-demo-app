    import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)

    import App from './components/App'
    import SecondComponent from './components/SecondComponent'
    import Page from './components/Page'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/home',
                name: 'second-component',
                component: SecondComponent,
                props: { title: "This is the SPA home" }
            },
            {
                path: '/spa-page',
                name: 'page',
                component: Page,
                props: { 
                    title: "This is the SPA Second Page",
                    author : {
                        name : "Fisayo Afolayan",
                        role : "Software Engineer",
                        code : "Always keep it clean"
                    }
                }
            },    
        ],
    })
    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });