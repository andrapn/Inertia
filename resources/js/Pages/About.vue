<script>
import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/inertia-vue3';
  export default {
    props: ["title"],
    components: { Link, Layout }
}
</script>

<style>

</style>

<template>
  <Layout title="Ïnertia Laravel">
    <h1 v-text="title"></h1>
  </Layout>
</template>