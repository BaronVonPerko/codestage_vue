<template>
  <div>
    <page-links :page-router="this.pageRouter"></page-links>
    <page-router-view :page-router="this.pageRouter"></page-router-view>
  </div>
</template>

<script>
import {
  PageRouter,
  PageRoute
} from "./../../components/pageRouting/PageRouter";

import MySites from "./subpages/MySites";
import CreateSite from "./subpages/CreateSite";

export default {
  props: ["siteCount"],

  data() {
    return {
      pageRouter: new PageRouter(
        [
          new PageRoute("sites", "My Sites", MySites),
          new PageRoute("create", "Create New Site", CreateSite)
        ],
        this.siteCount > 0 ? 0 : 1 // if no sites have been created, start on the CreateSite subpage
      )
    };
  }
};
</script>