<template>
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-md-6 offset-md-3">
        <h1 class="text-center"><img :src="logo_path" alt="" width="72" height="72" /></h1>
        <h1 class="text-center">Reset Password</h1>
        <hr />
        <form @submit="request" class="row" method="post">
          <div class="form-group col-12">
            <label for="inputEmail" class="font-weight-bold">Email</label>
            <input
              type="email"
              name="email"
              v-model="auth.email"
              id="inputEmail"
              placeholder="Enter Your Email"
              class="form-control"
              required
              autofocus
            />
            <div v-if="errors && errors.email">
              <span class="single-line text-danger" v-for="error in errors.email" v-bind:key="error">
                {{ error }}
              </span>
            </div>
          </div>
          <div class="alert alert-danger full-width" role="alert" v-if="message">
            {{ message }}
          </div>
          <div class="col-12 mb-2">
            <button type="submit" :disabled="processing" class="btn btn-primary btn-block">
              {{ processing ? 'Please wait' : 'Send Password Reset Link' }}
            </button>
          </div>
        </form>
        <div class="col-12 text-center">
          <label class="single-line mb-0">Already have an account? <router-link :to="{ name: 'login' }">Login Now</router-link></label>
          <label class="single-line mb-0">Don't have an account? <router-link :to="{ name: 'register' }">Register Now</router-link></label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import router from '../../router';
export default {
  name: 'request',
  data: function() {
    return {
      auth: {
        email: '',
      },
      logo_path: 'images/brand/' + process.env.MIX_BRAND_IMAGE,
      errors: null,
      processing: false,
    };
  },
  methods: {
    request: function(event) {
      event.preventDefault();
      this.processing = true;
      this.errors = null;
      axios
        .post('/api/password/email', this.auth)
        .then(response => {
          router.push({ name: 'verify', params: { email: this.auth.email, message: response.data.message } });
        })
        .catch(({ response: { data } }) => {
          this.errors = [];
          Object.values(data.errors).forEach(element => {
            this.errors = this.errors.concat(element);
          });
          if (this.errors.length === 0) {
            this.errors.push(data.message);
          }
        })
        .finally(() => {
          this.processing = false;
        });
    },
  },
};
</script>
