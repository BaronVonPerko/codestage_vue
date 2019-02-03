<template>
  <div class="py-32">
    <component :is="this.pageRouter.renderActive()"></component>
  </div>
</template>

<script>
export default {
  props: ["pageRouter"]
};
</script>
