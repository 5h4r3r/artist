<template>
  <div id="block6">
    <div class="block6-content">
      <div class="block6-title"><h2>С НАМИ РАБОТАЮТ</h2></div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item1.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item2.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item3.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item4.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item5.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item6.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item7.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item8.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item9.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item10.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item11.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item12.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item13.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item14.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item15.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item16.webp" />
      </div>
      <div class="block6-item-right">
        <img src="../assets/block6/block6_item17.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item18.webp" />
      </div>
      <div class="block6-item">
        <img src="../assets/block6/block6_item19.webp" />
      </div>
      <div class="block6-item-left">
        <img src="../assets/block6/block6_item20.webp" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Block6",
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block6 {
  height: 660px;
  background-color: white;
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block6-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(4, auto);
  grid-template-rows: repeat(auto-fit, auto);
  .block6-title {
    grid-column: 1 / -1;
    justify-self: center;
    align-self: center;
  }
  %item-parm {
    align-self: center;
    justify-content: space-around;
  }

  .block6-item {
    align-self: center;
    justify-content: space-around;
    justify-self: center;
  }

  .block6-item-right {
    @extend .block6-item;
    justify-self: right;
  }
  .block6-item-left {
    @extend .block6-item;
    justify-self: left;
  }
}
@media all and (min-width: 768px) and (max-width: 1024px) {
  #block6 {
    height: 1400px;
    background-color: white;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block6-content {
    grid-column: 1 / 4;
    display: grid;
    grid-template-columns: repeat(2, 2fr);
    grid-template-rows: repeat(auto-fill, auto);
    grid-gap: 2%;
    column-gap: 5%;
    justify-self: center;
    align-items: center;
    .block6-item-right {
      justify-self: center;
    }
    .block6-item-left {
      justify-self: center;
    }
  }
}
@media all and (max-width: 768px) {
  #block6 {
    height: 2800px;
    background-color: white;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block6-content {
    grid-column: 1 / 4;
    display: grid;
    grid-template-columns: repeat(1, minmax(480px, 2fr));
    grid-template-rows: repeat(auto-fit, auto);
    grid-gap: 1%;
    .block6-item-right {
      justify-self: center;
    }
    .block6-item-left {
      justify-self: center;
    }
  }
}
</style>