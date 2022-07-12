<template>
  <main>
    <header>
      <Link href="/home">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/users">User</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
  },
  props: {
    title: String,
  },
  watch: {
    title: {
      immediate: true,
      handler(title) {
        document.title = title
      },
    },
  },
}
</script>