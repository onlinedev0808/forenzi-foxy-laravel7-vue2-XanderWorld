<template>
  <section class="section-squares bg-yellow">
    <div class="container-lg">
      <div class="row text-center">
        <div class="squares d-flex justify-content-center flex-wrap">
          <div
            v-for="(square, id) in squares"
            :key="id"
            class="square d-flex flex-column">
            <i :class="square.i"></i>
            <h6 class="title fw-bold">{{ square.title }}</h6>
            <p class="description">
              {{ square.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "SectionSquares",
  data() {
    return {
      squares: [
        {
          i: "fa-solid fa-box-open",
          title: "SPECIALISTI DELLA PRONTA CONSEGNA",
          description:
            "Con FoxTop, acquistare le tue scatole è più facile, economico e veloce. Inoltre, hai il vantaggio di rifornirti da un leader del settore.",
        },
        {
          i: "fa-solid fa-box-open",
          title: "RISPARMIO GARANTITO",
          description:
            "Con FoxTop, acquistare le tue scatole è più facile, economico e veloce. Inoltre, hai il vantaggio di rifornirti da un leader del settore.",
        },
        {
          i: "fa-solid fa-box-open",
          title: "SPEDIZIONE SEMPRE GRATUITA",
          description:
            "Con FoxTop, acquistare le tue scatole è più facile, economico e veloce. Inoltre, hai il vantaggio di rifornirti da un leader del settore.",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
.section-squares {
  padding: 2rem 0rem;
  i {
    font-size: 5rem;
    padding: 1rem;
  }

  .title {
    color: black;
    font-weight: bold;
    font-size: 2.5rem;
  }
  .description {
    color: black;
  }

  .square {
    width: 300px;
    height: 300px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: white;

    text-align: center;

    margin: 2rem 4rem;

    h1 {
      font-size: 5rem;
    }
  }
}
</style>
