<script>
import Layout from '../Shared/Layout.vue';
  export default {
    props: ["title"],
    components: { Layout }
}
</script>

<style>

</style>

<template>
  <Layout>
    <h1 v-text="title"></h1>
  </Layout>
</template>