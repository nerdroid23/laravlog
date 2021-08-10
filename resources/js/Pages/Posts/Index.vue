<template>
  <div>home</div>
  <div>{{ posts.data }}</div>
</template>

<script>
export default {
  name: 'PostIndex',
  props: {
    posts: Object
  }
}
</script>
