<template>
  <div
    @click="select()"
    :class="this.classes"
    class="shadow p-8 text-grey-darkest bg-no-repeat bg-center bg-cover flex-1"
  >
    <div class="w-full mb-6">
      <img :src="this.logoUrl" class="w-16">
    </div>

    <div>
      <h3 class="text-3xl mb-2">{{this.title}}</h3>
      <h4 class="text-xl mb-4">{{this.subTitle}}</h4>
    </div>
    <p v-if="this.comingSoon">Coming Soon...</p>
  </div>
</template>


<script>
export default {
  props: {
    title: String,
    subTitle: String,
    comingSoon: Boolean,
    logo: String
  },

  data() {
    return {
      isSelected: false
    };
  },

  computed: {
    classes() {
      let classes = this.comingSoon
        ? "opacity-50"
        : "cursor-pointer hover:shadow-lg transition";

      classes += this.isSelected ? " bg-blue-lighter" : "";

      return classes;
    },

    logoUrl() {
      return `/logos/${this.logo}`;
    }
  },

  methods: {
    select() {
      if (!this.comingSoon) {
        this.isSelected = !this.isSelected;

        this.$emit("selected", this.isSelected ? this : null);
      }
    }
  }
};
</script>
