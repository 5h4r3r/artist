<template>
  <div id="header">
    <div class="header-content">
      <div class="logo" />
      <div class="plank">
        <div class="num">+7(3522)23-23-23</div>
      </div>
      <div class="menu">
        <ul>
          <li><a href="#" v-scroll-to="'#block1'">О нас</a></li>
          <li><a href="#" v-scroll-to="'#block2'">Почему мы</a></li>
          <li><a href="#" v-scroll-to="'#block4'">Портфолио</a></li>
          <li><a href="#" v-scroll-to="'#block6'">Партнеры</a></li>
          <li><a href="#" v-scroll-to="'#block7'">Контакты</a></li>
        </ul>
      </div>
      <div class="dropdownmenu">
        <div class="mainmenubtn" @click="menu"></div>
        <div class="dropdown-child" :class="{ active: isActive }">
          <a href="#" v-scroll-to="'#block1'" @click="menu">О нас</a>
          <a href="#" v-scroll-to="'#block2'" @click="menu">Почему мы</a>
          <a href="#" v-scroll-to="'#block4'" @click="menu">Портфолио</a>
          <a href="#" v-scroll-to="'#block6'" @click="menu">Партнеры</a>
          <a href="#" v-scroll-to="'#block7'" @click="menu">Контакты</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      isActive: true,
    };
  },
  methods: {
    menu() {
      this.isActive = !this.isActive;
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#header {
  height: 90px;
  display: grid;
  background: linear-gradient(to top, #e7b219, #f9dd0a);
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.header-content {
  grid-column: 2/3;
  grid-row: 1;
  display: grid;
  grid-template-columns: repeat(2, minmax(auto, 2fr));
  grid-template-rows: repeat(2, 50%);
  .logo {
    margin: 10px;
    height: 70px;
    width: 77px;
    background-image: url("../assets/header/header_logo.webp");
    grid-column: 1/2;
    grid-row: 1/3;
    align-self: center;
  }
  .plank {
    height: 41px;
    width: 185px;
    background-image: url("../assets/header/header_item1.webp");
    background-size: cover;
    grid-column: 2/3;
    grid-row: 1/2;
    justify-self: right;
    .num {
      text-align: center;
      padding: 6%;
      padding-left: 25%;
      color: #f9dd0a;
    }
  }
  .menu {
    grid-column: 2/3;
    grid-row: 3/2;
    ul {
      list-style: none;
      margin: 0;
      padding-left: 0;
      padding-right: 0;
      display: grid;
      grid-template-columns: repeat(5, minmax(auto, 90px));
      grid-template-rows: repeat(auto-fit, auto);
    }
    a {
      font-size: 13pt;
      color: black;
      text-decoration: none;
    }
    li {
      text-align: center;
      margin-left: auto;
    }
  }
  .dropdownmenu {
    grid-column: 2/3;
    grid-row: 1/3;
    align-self: center;
    justify-self: right;
    display: none;
    .mainmenubtn {
      width: 30px;
      height: 30px;
      background-image: url("../assets/header/menu.webp");
      background-size: cover;
      color: white;
      border: none;
      cursor: pointer;
      padding: 10px;
      margin: 10px;
    }
    .dropdown-child {
      position: absolute;
      top: 140px;
      right: 0;
      z-index: 1;
      width: 100%;
      a {
        text-align: center;
        font-size: 60pt;
        color: white;
        padding: 10%;
        text-decoration: none;
        display: block;
        background: linear-gradient(to top, #e7b219, #f9dd0a);
      }
    }
  }
}
.active {
  display: none;
}
@media screen and (max-width: 1024px) {
  #header {
    height: 140px;
  }
  .header-content {
    .plank {
      display: none;
    }
    .menu {
      display: none;
    }
    .dropdownmenu {
      display: inline-block;
    }
  }
}
</style>