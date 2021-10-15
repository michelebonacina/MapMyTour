<template>
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-md-6 offset-md-3">
        <h1 class="text-center"><img :src="logo_path" alt="" width="72" height="72" /></h1>
        <h1 class="text-center">Please Sign In</h1>
        <hr />
        <form @submit="login" class="row" method="post">
          <div class="form-group col-12">
            <label for="inputEmail" class="font-weight-bold">Email</label>
            <input
              type="email"
              v-model="auth.email"
              name="email"
              id="inputEmail"
              class="form-control"
              placeholder="Enter your email"
              required
              autofocus
            />
            <div v-if="errors && errors.email">
              <span class="single-line text-danger" v-for="error in errors.email" v-bind:key="error">
                {{ error }}
              </span>
            </div>
          </div>
          <div class="form-group col-12">
            <label for="inputPassword" class="font-weight-bold">Password</label>
            <input
              type="password"
              v-model="auth.password"
              name="password"
              id="inputPassword"
              class="form-control"
              placeholder="Enter your password"
              required
            />
            <div v-if="errors && errors.password_confirmation">
              <span class="single-line" v-for="error in errors.password_confirmation" v-bind:key="error">
                {{ error }}
              </span>
            </div>
          </div>
          <div class="form-group col-12">
            <input type="checkbox" v-model="auth.remember" name="remember" id="inputRemember" />
            <label for="inputRemember" class="font-weight-bold ml-1">Remember Me</label>
          </div>
          <div class="alert alert-danger full-width" role="alert" v-if="message">
            {{ message }}
          </div>
          <div class="col-12 mb-2">
            <button type="submit" :disabled="processing" class="btn btn-primary btn-block">
              {{ processing ? 'Please wait' : 'Login' }}
            </button>
          </div>
        </form>
        <div class="col-12 text-center">
          <label class="single-line mb-0">Forgot your password? <router-link :to="{ name: 'forgot' }">Reset It</router-link></label>
          <label class="single-line mb-0">Don't have an account? <router-link :to="{ name: 'register' }">Register Now</router-link></label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
  name: 'login',
  data: function() {
    return {
      auth: {
        email: '',
        password: '',
        remember: false,
      },
      logo_path: 'images/brand/' + process.env.MIX_BRAND_IMAGE,
      processing: false,
      errors: null,
      message: null,
    };
  },
  methods: {
    ...mapActions({
      signIn: 'auth/login',
    }),
    login: async function(event) {
      event.preventDefault();
      this.processing = true;
      this.errors = null;
      this.message = null;
      await axios.get('/sanctum/csrf-cookie');
      await axios
        .post('/api/login', this.auth)
        .then(({ data }) => {
          this.signIn();
        })
        .catch(({ response: { data } }) => {
          this.errors = data.errors;
          this.message = data.message;
        })
        .finally(() => {
          this.processing = false;
        });
    },
  },
};
</script>
