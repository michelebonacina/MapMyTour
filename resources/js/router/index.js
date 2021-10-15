import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '../store';
import AuthRoutes from './auth';
import UserRoutes from './user';

Vue.use(VueRouter);

/* Layouts */
const DahboardLayout = () => import('../components/Layouts/Dashboard.vue' /* webpackChunkName: "resource/js/components/layouts/dashboard" */);
/* Layouts */

/* Authenticated Component */
const Dashboard = () => import('../components/Dashboard.vue' /* webpackChunkName: "resource/js/components/dashboard" */);
/* Authenticated Component */

const ExampleComponent = () => import('../components/ExampleComponent.vue' /* webpackChunkName: "resource/js/components/dashboard" */);

const Routes = [
  ...AuthRoutes,
  ...UserRoutes,
  /*
  {
    name: 'home',
    path: '/',
    component: ExampleComponent,
    meta: {
      middleware: 'guest',
      title: `ExampleComponent`,
    },
  },
  */
  {
    path: '/',
    alias: '/home',
    component: DahboardLayout,
    meta: {
      middleware: 'auth',
    },
    children: [
      {
        name: 'dashboard',
        path: '/',
        component: Dashboard,
        meta: {
          title: `Dashboard`,
        },
      },
    ],
  },
];

var router = new VueRouter({
  mode: 'history',
  routes: Routes,
});

router.beforeEach((to, from, next) => {
  document.title = `${to.meta.title} - ${process.env.MIX_APP_NAME}`;
  if (to.meta.middleware == 'guest') {
    if (store.state.auth.authenticated) {
      next({ name: 'dashboard' });
    }
    next();
  } else {
    if (store.state.auth.authenticated) {
      next();
    } else {
      next({ name: 'login' });
    }
  }
});

export default router;
