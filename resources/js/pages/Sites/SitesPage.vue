<template>
  <div>
    <div class="flex">
      <a class="mr-4" @click="showSites()" href="#">My Sites</a>
      <a class="mr-4" @click="showCreate()" href="#">Create New Site</a>
    </div>

    <div class="py-32" v-if="this.route === this.routes.sites">
      <my-sites></my-sites>
    </div>

    <div class="py-32" v-if="this.route === this.routes.create">
      <create-site></create-site>
    </div>
  </div>
</template>

<script>
const routes = {
  sites: "sites",
  create: "create"
};

export default {
  data() {
    return {
      route: routes.sites,
      routes
    };
  },

  methods: {
    showCreate() {
      this.route = routes.create;
    },
    showSites() {
      this.route = routes.sites;
    }
  }
};
</script>