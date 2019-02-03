<template>
  <div>
    <page-links :page-router="this.pageRouter"></page-links>

    <div class="py-32">
      <my-sites v-if="this.pageRouter.isCurrent('sites')"></my-sites>
      <create-site v-if="this.pageRouter.isCurrent('create')"></create-site>
    </div>
  </div>
</template>

<script>
import { PageRouter, PageRoute } from "./../../components/PageRouter";

export default {
  data() {
    return {
      pageRouter: new PageRouter([
        new PageRoute("sites", "My Sites"),
        new PageRoute("create", "Create New Site")
      ])
    };
  }
};
</script>