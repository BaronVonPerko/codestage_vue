<template>
  <div class="flex my-2">
    <a
      v-for="route in routes"
      :key="route.id"
      class="mr-4"
      :class="route.isActive ? 'border-b-4' : ''"
      @click="onRouteClick(route.id)"
      href="#"
    >{{route.label}}</a>
  </div>
</template>

<script>
export default {
  props: ["routes", "onRouteClick"]
};
</script>

