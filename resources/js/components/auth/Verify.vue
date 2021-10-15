<template>
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-md-6 offset-md-3">
        <h1 class="text-center"><img :src="logo_path" alt="" width="72" height="72" /></h1>
        <h1 class="text-center">Verify Your Email Address</h1>
        <hr />
        <div class="alert alert-success" role="alert" v-if="!errors">
          A fresh verification link has been sent to your email address.
        </div>
        <div class="alert alert-danger" role="alert" v-if="errors">
          <div v-for="error in errors" v-bind:key="error">
            {{ error }}
          </div>
        </div>
        <form @submit="request" class="row" method="post">
          <div class="form-group col-12">
            Before proceeding, please check your email for a verification link. If you did not receive the email,
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
              click here to request another
            </button>
            .
          </div>
        </form>
        <div class="col-12 text-center">
          <label class="single-line mb-0">Go to <router-link :to="{ name: 'login' }">Login Page</router-link></label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'request',
  data: function() {
    return {
      auth: {
        email: this.$route.params.email,
      },
      logo_path: 'images/brand/' + process.env.MIX_BRAND_IMAGE,
      errors: null,
    };
  },
  methods: {
    request: function(event) {
      event.preventDefault();
      axios
        .post('/api/password/email', this.auth)
        .then(response => {
          this.errors = null;
        })
        .catch(({ response: { data } }) => {
          this.errors = [];
          Object.values(data.errors).forEach(element => {
            this.errors = this.errors.concat(element);
          });
          if (this.errors.length === 0) {
            this.errors.push(data.message);
          }
        });
    },
  },
};
</script>
