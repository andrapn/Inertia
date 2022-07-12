<template>
  <Layout title="Daftar User">
  <div>
    <h1>Daftar {{ title }}</h1>
      <Link href="/users/create">Register</Link>
    <ul>
      <li v-for="user in users">
      <p>{{ user.name }}</p>
      <Link :href="`/users/${user.id}`">Lihat Profil</Link>
      </li>
    </ul>
  </div>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue';
import { Link } from '@inertiajs/inertia-vue3';
  export default {
    props: {
      title: String,
      users: Array
    },
    components: { Link, Layout }
  }
</script>