<template>
  <div class="flex">
    <project-type
      @selected="typeSelected"
      logo="wordpress.png"
      class="mr-4"
      title="WordPress"
      sub-title="Theme"
    ></project-type>
    <project-type
      @selected="typeSelected"
      logo="wordpress.png"
      class="mr-4"
      title="WordPress"
      sub-title="Plugin"
      coming-soon
    ></project-type>
    <project-type
      @selected="typeSelected"
      logo="laravel.png"
      class="mr-4"
      title="Laravel"
      coming-soon
    ></project-type>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedProjectType: null,
    }
  },

  methods: {
    typeSelected(projectType) {
      this.selectedProjectType = projectType;
    }
  }
};
</script>
