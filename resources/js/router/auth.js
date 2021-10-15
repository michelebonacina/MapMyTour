/* Auth Component */
const Login = () => import('../components/auth/Login.vue' /* webpackChunkName: "resource/js/components/auth/login" */);
const Register = () => import('../components/auth/Register.vue' /* webpackChunkName: "resource/js/components/auth/register" */);
const Forgot = () => import('../components/auth/Forgot.vue' /* webpackChunkName: "resource/js/components/auth/forgot" */);
const Reset = () => import('../components/auth/Reset.vue' /* webpackChunkName: "resource/js/components/auth/reset" */);
const Verify = () => import('../components/auth/Verify.vue' /* webpackChunkName: "resource/js/components/auth/verify" */);
/* Auth Component */

const AuthRoutes = [
  {
    name: 'login',
    path: '/login',
    component: Login,
    meta: {
      middleware: 'guest',
      title: `Login`,
    },
  },
  {
    name: 'register',
    path: '/register',
    component: Register,
    meta: {
      middleware: 'guest',
      title: `Register`,
    },
  },
  {
    name: 'reset',
    path: '/reset',
    component: Reset,
    meta: {
      middleware: 'guest',
      title: `Reset Password`,
    },
  },
  {
    name: 'forgot',
    path: '/forgot',
    component: Forgot,
    meta: {
      middleware: 'guest',
      title: `Forgot Password`,
    },
  },
  {
    name: 'verify',
    path: '/verify',
    component: Verify,
    meta: {
      middleware: 'guest',
      title: `Verify Password`,
    },
  },
];

module.exports = AuthRoutes;
