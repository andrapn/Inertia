<script>
  export default {
    props: ['title'],
    components: {Link, Layout}
  }
  import { Link } from '@inertiajs/inertia-vue3';
  import Layout from '../Shared/Layout.vue';
</script>

<style>

</style>

<template>
  <Layout title="Inertia-Laravel">
    <h1>Hello {{ title }}</h1>
  </Layout>
</template>