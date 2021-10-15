<template>
  <div class="container h-100 mt-4">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-md-6 offset-md-3">
        <div class="card shadow sm">
          <div class="card-body">
            <h1 class="text-center">Chage Password</h1>
            <hr />
            <form action="javascript:void(0)" @submit="register" class="row" method="post">
              <div class="form-group col-12">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="text" name="email" v-model="user.email" id="email" placeholder="Enter Email" class="form-control" />
              </div>
              <div class="form-group col-12">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password" name="password" v-model="user.password" id="password" placeholder="Enter Password" class="form-control" />
              </div>
              <div class="form-group col-12">
                <label for="password_confirmation" class="font-weight-bold">Confirm Password</label>
                <input
                  type="password_confirmation"
                  name="password_confirmation"
                  v-model="user.password_confirmation"
                  id="password_confirmation"
                  placeholder="Enter Password"
                  class="form-control"
                />
              </div>
              <div class="col-12 mb-2">
                <button type="submit" :disabled="processing" class="btn btn-primary btn-block">
                  {{ processing ? 'Please wait' : 'Reset Password' }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
  name: 'register',
  data() {
    return {
      user: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      },
      processing: false,
    };
  },
  methods: {
    ...mapActions({
      signIn: 'auth/login',
    }),
    async register() {
      this.processing = true;
      await axios
        .post('/api/register', this.user)
        .then(response => {
          this.signIn();
        })
        .catch(({ response: { data } }) => {
          alert(data.message);
        })
        .finally(() => {
          this.processing = false;
        });
    },
  },
};
</script>
