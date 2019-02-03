<template>
  <div class="flex my-2">
    <a
      v-for="route in pageRouter.pageRoutes"
      :key="route.key"
      class="mr-4"
      :class="route.isActive ? 'border-b-4' : ''"
      @click="pageRouter.showPage(route)"
      href="#"
    >{{route.label}}</a>
  </div>
</template>

<script>
export default {
  props: ["pageRouter"]
};
</script>

