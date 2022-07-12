<template>
  <div>
    <h1>{{ title }}</h1>
    <ul>
      <li>
      <h3>{{ user.name }}</h3>
      <p><strong>{{ user.email }}</strong></p>
      <p>{{ user.created_at }}</p>
      <Link href="/users">Kembali</Link>
      </li>
    </ul>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
  export default {
    props: {
      title: String,
      user: Object
    },
    components: { Link }
  }
</script>