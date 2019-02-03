<template>
  <div>
    <page-links :routes="this.routes" :onRouteClick="showPage"></page-links>

    <div class="py-32" v-if="this.route.id === 'sites'">
      <my-sites></my-sites>
    </div>

    <div class="py-32" v-if="this.route.id === 'create'">
      <create-site></create-site>
    </div>
  </div>
</template>

<script>
const routes = [
  { id: "sites", label: "My Sites", isActive: true },
  { id: "create", label: "Create New Site" }
];

export default {
  data() {
    return {
      route: routes[0],
      routes
    };
  },

  computed: {
    styleSitesLink() {
      return this.route.id === "sites" ? "border-b-4" : "";
    },
    styleCreateLink() {
      return this.route.id === "create" ? "border-b-4" : "";
    }
  },

  methods: {
    showPage(pageId) {
      this.route = routes.find(route => route.id === pageId);
      routes.forEach(route => {
          route.isActive = route.id === pageId;
      });
    }
  }
};
</script>