<template>
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-md-6 offset-md-3">
        <h1 class="text-center"><img :src="logo_path" alt="" width="72" height="72" /></h1>
        <h1 class="text-center">Register Now</h1>
        <hr />
        <form @submit="register" class="row" method="post">
          <div class="form-group col-12">
            <label for="inputName" class="font-weight-bold">Name</label>
            <input
              type="text"
              name="name"
              v-model="user.name"
              id="inputName"
              placeholder="Insert Your Name"
              class="form-control"
              required
              autofocus
            />
            <div v-if="errors && errors.name">
              <span class="single-line text-danger" v-for="error in errors.name" v-bind:key="error">
                {{ error }}
              </span>
            </div>
          </div>
          <div class="form-group col-12">
            <label for="inputEmail" class="font-weight-bold">Email</label>
            <input type="email" name="email" v-model="user.email" id="inputEmail" placeholder="Insert Your Email" class="form-control" required />
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
              name="password"
              v-model="user.password"
              id="inputPassword"
              placeholder="Enter Password"
              class="form-control"
              required
            />
            <div v-if="errors && errors.password">
              <span class="single-line text-danger" v-for="error in errors.password" v-bind:key="error">
                {{ error }}
              </span>
            </div>
          </div>
          <div class="form-group col-12">
            <label for="inputPasswordConfirmation" class="font-weight-bold">Confirm Password</label>
            <input
              type="password"
              name="password_confirmation"
              v-model="user.password_confirmation"
              id="inputPasswordConfirmation"
              placeholder="Confirm Password"
              class="form-control"
              required
            />
            <div v-if="errors && errors.password_confirmation">
              <span class="single-line" v-for="error in errors.password_confirmation" v-bind:key="error">
                {{ error }}
              </span>
            </div>
          </div>
          <div class="alert alert-danger full-width" role="alert" v-if="message">
            {{ message }}
          </div>
          <div class="col-12 mb-2">
            <button type="submit" :disabled="processing" class="btn btn-primary btn-block">
              {{ processing ? 'Please wait' : 'Register' }}
            </button>
          </div>
        </form>
        <div class="col-12 text-center">
          <label class="single-line mb-0">Already have an account? <router-link :to="{ name: 'login' }">Login Now</router-link></label>
          <label class="single-line mb-0">Forgot your password? <router-link :to="{ name: 'forgot' }">Reset It</router-link></label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
  name: 'register',
  data: function() {
    return {
      user: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      },
      logo_path: 'images/brand/' + process.env.MIX_BRAND_IMAGE,
      errors: null,
      message: null,
      processing: false,
    };
  },
  methods: {
    ...mapActions({
      signIn: 'auth/login',
    }),
    register: function(event) {
      event.preventDefault();
      this.processing = true;
      this.errors = null;
      this.message = null;
      axios
        .post('/api/register', this.user)
        .then(response => {
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
