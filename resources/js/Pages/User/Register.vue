<template>
<Layout v-bind:title="title">
  <div>
    <h1>Register</h1>
    <form @submit.prevent="register">
      <div class="form-group">
        <label>Name</label>
        <input type="text" v-model="user.name">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" v-model="user.email">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" v-model="user.password">
  </div>

      <button type="submit">Register</button>
    </form>
  </div>
</Layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue';
export default {
    props: {
      title: String,
    },
    data() {
      return {
        user: {
          name: '',
          email: '',
          password: ''
        }
      }
    },
    methods: {
      register() {
        this.$inertia.post('/users', this.user)
      }
    },
    components: { Layout }
  }
</script>

<style>
  .form-group {
    margin-bottom: 5px;
  }
</style>