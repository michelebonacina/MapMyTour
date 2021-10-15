/* User Components */
const PasswordConfirm = () => import('../components/user/PasswordConfirm.vue' /* webpackChunkName: "resource/js/components/user/password-confirm" */);
/* User Components */

const UserRoutes = [
  {
    name: 'password-confirm',
    path: '/password-confirm',
    component: PasswordConfirm,
    meta: {
      middleware: 'guest',
      title: `Password Confirm`,
    },
  },
];

module.exports = UserRoutes;
