<template>
  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    <side-bar :background-color="sidebarBackground">
      <template slot-scope="props" slot="links">
        <user-menu></user-menu>
        <sidebar-item
          :link="{
            name: 'Dashboard',
            icon: 'now-ui-icons design_app',
            path: '/',
          }"
        >
        </sidebar-item>
        <sidebar-item v-for="(i, key) in objSidebar" :key="'side'+key"
          :link="{
            name: i.name,
            icon: 'fab fa-vuejs',
          }"
        >
          <sidebar-item v-for="(item, key) in i.sub" :key="'sub'+key"
            :link="{ name: item.name, path: item.path }"
          ></sidebar-item>
        </sidebar-item>

      </template>
    </side-bar>
    <div class="main-panel">
      <sidebar-share
        :color.sync="sidebarBackground"
        :fixed-navbar.sync="fixedNavbar"
        :sidebarMini.sync="sidebarMini"
        style="cursor: pointer"
      >
      </sidebar-share>
      <router-view name="header"></router-view>

      <div
        :class="{ content: !$route.meta.hideContent }"
        @click="toggleSidebar"
      >
        <zoom-center-transition :duration="200" mode="out-in">
          <!-- your content here -->
          <router-view></router-view>
        </zoom-center-transition>
      </div>
      <content-footer v-if="!$route.meta.hideFooter"></content-footer>
    </div>
  </div>
</template>
<script>
import PerfectScrollbar from "perfect-scrollbar";
import "perfect-scrollbar/css/perfect-scrollbar.css";

function hasElement(className) {
  return document.getElementsByClassName(className).length > 0;
}

function initScrollbar(className) {
  if (hasElement(className)) {
    new PerfectScrollbar(`.${className}`);
  } else {
    // try to init it later in case this component is loaded async
    setTimeout(() => {
      initScrollbar(className);
    }, 100);
  }
}

import TopNavbar from "../layouts/dashboard/TopNavbar.vue";
import ContentFooter from "../layouts/dashboard/ContentFooter.vue";
import UserMenu from "../layouts/dashboard/Extra/UserMenu.vue";
import { SlideYDownTransition, ZoomCenterTransition } from "vue2-transitions";
import Vuex from "vuex";
import SidebarShare from "../layouts/dashboard/Extra/SidebarSharePlugin";

export default {
  components: {
    TopNavbar,
    ContentFooter,
    UserMenu,
    ZoomCenterTransition,
    SidebarShare,
  },
  data() {
    return {
      sidebarBackground: "black",
      fixedNavbar: false,
      sidebarMini: false,
      objSidebar: [
        {
          icon: "mdi mdi-crosshairs-gps menu-icon",
          name: "Qu???n l?? s???n ph???m",
          route_name: "",
          sub: [
            {
              name: "Danh m???c s???n ph???m",
              path: "/product/category",
            },
            {
              name: "Ph??n lo???i s???n ph???m",
              path: "/product/type",
            },
            // {
            //   name: "Lo???i h??nh s???n ph???m",
            //   path: "/product/typetwo",
            // },
            // {
            //   name: "Th????ng hi???u s???n ph???m",
            //   path: "/product-brands",
            // },
            // {
            //   name: "Combo s???n ph???m",
            //   path: "/product-combo",
            // },
            {
              name: "Danh s??ch s???n ph???m",
              path: "/product",
            },
          ],
        },
        // {
        //   icon: "mdi mdi-newspaper menu-icon",
        //   name: "Ch??nh s??ch ?????i tr???",
        //   route_name: "",
        //   sub: [
        //     {
        //       name: "Danh s??ch",
        //       path: "/service",
        //     }
        //   ],
        // },
        {
          icon: "mdi mdi-newspaper menu-icon",
          name: "Qu???n l?? tin t???c",
          route_name: "",
          sub: [
            // {
            //   name: "Danh m???c b??i vi???t",
            //   path: "/blog/category",
            // },
            // {
            //   name: "Lo???i b??i vi???t",
            //   path: "/blog/type",
            // },
            {
              name: "Danh s??ch b??i vi???t",
              path: "/blogs",
            },
            
          ],
        },
        {
          icon: "mdi mdi-newspaper menu-icon",
          name: "Trang n???i dung",
          route_name: "",
          sub: [
            {
              name: "Danh s??ch ",
              path: "/pagecontent",
            }
          ],
        },
        // {
        //   icon: "mdi mdi-newspaper menu-icon",
        //   name: "Banner qu???ng c??o",
        //   route_name: "",
        //   sub: [
        //     {
        //       name: "Danh s??ch",
        //       path: "/bannerads",
        //     }
        //   ],
        // },
        {
          icon: "mdi mdi-file-image menu-icon",
          name: "Website",
          route_name: "",
          sub: [
            {
              name: "Qu???n l?? banner",
              path: "/banner",
            },
            {
              name: "Banner qu???ng c??o",
              path: "/bannerads",
            },
            // {
            //   name: "Qu???n l?? ?????i t??c",
            //   path: "/partner",
            // },
            // {
            //   name: "Th?? vi???n ???nh",
            //   path: "/prize",
            // },
            // {
            //   name: "Qu???n l?? video",
            //   path: "/video",
            // },
            // {
            //   name: "Qu???n l?? Founder",
            //   path: "/founder",
            // },
            {
              name: "C??i ?????t chung",
              path: "/setting",
            },
          ],
        },
        {
          icon: "mdi mdi-shopping-music menu-icon",
          name: "Qu???n l?? ????n h??ng",
          route_name: "",
          sub: [
            {
              name: "????n h??ng c???n ki???m tra",
              path: "/bill/draft",
            },
            {
              name: "????n h??ng ???? thanh to??n",
              path: "/bill/paymented",
            },
            // {
            //   name: "????n h??ng ch??a ho??n t???t",
            //   path: "/bill/Unpayment",
            // },
          ],
        },
        // {
        //   icon: "mdi mdi-shopping-music menu-icon",
        //   name: "Qu???n l?? khuy???n m??i",
        //   route_name: "",
        //   sub: [
        //     {
        //       name: "Danh s??ch",
        //       path: "/promotion",
        //     }
        //   ],
        // },
        {
          icon: "mdi mdi-shopping-music menu-icon",
          name: "Qu???n l?? tin nh???n li??n h???",
          route_name: "",
          sub: [
            {
              name: "Danh s??ch",
              path: "/messcontact",
            }
          ],
        },
        {
          icon: "mdi mdi-newspaper menu-icon",
          name: "Qu???n l?? Review",
          route_name: "",
          sub: [
            {
              name: "Danh s??ch d???ch v???",
              path: "/reviewCus",
            }
          ],
        },
      ],
    };
  },
  methods: {
    initScrollbar() {
      let isWindows = navigator.platform.startsWith("Win");
      if (isWindows) {
        initScrollbar("sidenav");
      }
    },
    toggleSidebar() {
      if (this.$sidebar.showSidebar) {
        this.$sidebar.displaySidebar(false);
      }
    },
    minimizeSidebar() {
      if (this.$sidebar) {
        this.$sidebar.toggleMinimize();
        let text = this.$sidebar.isMinimized ? "activated" : "deactivated";
        this.$notify({ type: "info", message: `Sidebar mini ${text}...` });
      }
    },
  },
  mounted() {
    let docClasses = document.body.classList;
    let isWindows = navigator.platform.startsWith("Win");
    if (isWindows) {
      // if we are on windows OS we activate the perfectScrollbar function
      initScrollbar("sidebar");
      initScrollbar("sidebar-wrapper");

      docClasses.add("perfect-scrollbar-on");
    } else {
      docClasses.add("perfect-scrollbar-off");
    }
  },
  computed: {
  },
  watch: {
    sidebarMini() {
      this.minimizeSidebar();
    },
  },
};
</script>
<style lang="scss">
$scaleSize: 0.95;
@keyframes zoomIn95 {
  from {
    opacity: 0;
    transform: scale3d($scaleSize, $scaleSize, $scaleSize);
  }
  to {
    opacity: 1;
  }
}
.main-panel .zoomIn {
  animation-name: zoomIn95;
}
@keyframes zoomOut95 {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: scale3d($scaleSize, $scaleSize, $scaleSize);
  }
}
.main-panel .zoomOut {
  animation-name: zoomOut95;
}
</style>
