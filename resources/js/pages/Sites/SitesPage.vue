<template>
  <div>
    <div class="flex">
      <a class="mr-4" :class="styleSitesLink" @click="showPage(routes.sites)" href="#">My Sites</a>
      <a class="mr-4" :class="styleCreateLink" @click="showPage(routes.create)" href="#">Create New Site</a>
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

  computed: {
    styleSitesLink() {
      return this.route === this.routes.sites ? "border-b-4" : "";
    },
    styleCreateLink() {
      return this.route === this.routes.create ? "border-b-4" : "";
    }
  },

  methods: {
    showPage(page) {
      this.route = page;
    }
  }
};
</script>