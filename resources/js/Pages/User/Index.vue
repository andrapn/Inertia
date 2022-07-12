<template>
  <div>
    <h1>Daftar {{ title }}</h1>
    <ul>
      <li v-for="user in users">
      <p>{{ user.name }}</p>
      <Link :href="`/users/${user.id}`">Lihat Profil</Link>
      </li>
    </ul>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
  export default {
    props: {
      title: String,
      users: Array
    },
    components: { Link }
  }
</script>