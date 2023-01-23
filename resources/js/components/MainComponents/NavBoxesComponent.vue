<template>
  <div>
    <div class="HeaderBoxes">
      <nav class="d-flex">
        <div class="container d-flex flex-wrap justify-content-around">
          <div
            v-for="(card, index) in cards"
            :key="index"
            class="card d-flex align-items-center position-relative"
            :class="card.color">
            <img class="card-img-top" :src="card.img1" alt="" />
            <div class="litlogo position-absolute">
              <img class="img-fluid" :src="card.img2" alt="" />
            </div>

            <div class="card-body text-center p-1">
              <span class="card-title">{{ card.text1 }}</span>
              <br />
              <span class="card-text fw-bold">{{ card.text2 }}</span>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row">
        <hr class="m-4" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cards: [
        {
          img1: require("../../../public/Links/cat-scatole-cartone-1-onda.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE",
          text2: "1 ONDA",
          color: "orange-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-cartone-2-onde.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE",
          text2: "2 ONDE",
          color: "orange-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-maniglie-aperte.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE",
          text2: "ECOMMERCE",
          color: "yellow-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-maniglie-aperte.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE",
          text2: "ECOLOGICHE",
          color: "yellow-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-maniglie-aperte.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE",
          text2: "NATALIZIE",
          color: "yellow-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-maniglie-aperte.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE PER ",
          text2: "CONFEZIONI",
          color: "yellow-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-maniglie-aperte.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "PRODOTTI PER",
          text2: "IMBALAGGIO",
          color: "yellow-box",
        },
        {
          img1: require("../../../public/Links/cat-scatole-maniglie-aperte.jpg"),
          img2: require("../../../public/Links/001-world-wide-web.png"),
          text1: "SCATOLE",
          text2: "PERSONALIZZATE",
          color: "gray-box",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
.HeaderBoxes {
  .card {
    width: 9rem;
    margin: 10px 0px;
    border-radius: 0px;
    border: 0px;
    transition: transform 0.2s;
    padding: 0px;

    &:hover {
      transform: scale(0.95);
      cursor: pointer;
    }
    span {
      font-size: 0.8rem;
    }

    img {
      padding: 10px;
    }
    .litlogo {
      bottom: 60px;
      right: 0px;
      height: 60px;
      width: 60px;
    }
  }

  .orange-box {
    background-color: rgb(245, 134, 47);
  }
  .yellow-box {
    background-color: rgb(253, 188, 72);
  }
  .gray-box {
    background-color: rgb(244, 244, 244);
  }
}
</style>
