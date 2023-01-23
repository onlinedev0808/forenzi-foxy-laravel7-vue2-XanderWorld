<template>
  <div class="jumbo d-flex ">
    <div id="slider" class="jumbo1 mx-2 col-7">
      <carousel 
        :perPageCustom="[
          [480, 1],
          [768, 1],
          [1024, 1],
          [1200, 1],
        ]">
        <slide v-for="(image, index) in images" :key="index">
          <img
            class="img-fluid"
            :src="image"
            alt="Slider image"
            style="
              width: 100%;
              height: 100%;
              object-fit: cover;
              position: relative;
            " />
        </slide>
      </carousel>
    </div>
    <div class="jumbo2 col-5">
      <div class="clock d-none d-lg-flex d-flex flex-column">
        <h4>EFFETUA IL TUO ORDINE ENTRO</h4>
        <div
          class="countdown d-flex justify-content-center align-items-center flex-wrap">
          <div class="square flex-column">
            <div class="square-time">
              <span>{{ days }}</span>
            </div>

            <div class="square-text">
              <span>days</span>
            </div>
          </div>
          <div class="square flex-column">
            <div class="square-time">
              <span>{{ hours }}</span>
            </div>

            <div class="square-text">
              <span>hours</span>
            </div>
          </div>
          <div class="square flex-column">
            <div class="square-time">
              <span>{{ minutes }}</span>
            </div>

            <div class="square-text">
              <span>minutes</span>
            </div>
          </div>
          <div class="square flex-column">
            <div class="square-time">
              <span>{{ seconds }}</span>
            </div>

            <div class="square-text">
              <span>seconds</span>
            </div>
          </div>
        </div>
        <p>e ricevi le scatole</p>
        <h5 class="text-white">Martedì 12 Agosto</h5>
      </div>
      <div class="delivery d-none d-lg-flex d-flex align-items-center p-4">
        <div class="w-50">
          <h1 class="">Spedizione gratuita in tutta Italia</h1>
          <span> per ordini di qualunque importo! </span>
        </div>
        <div class="w-50">
          <img
            class="img-fluid position-relative"
            style="object-fit: cover; bottom: -15px"
            src="../../../public/Links/free-non-stop-delivery-man-with-fallen-boxes_23-2148462373.jpg"
            alt="free" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
export default {
  components: {
    Carousel,
    Slide,
  },
  data() {
    return {
      images: [
        require("../../../public/Links/PHV7570.jpg"),
        require("../../../public/Links/PHV7570.jpg"),
        require("../../../public/Links/PHV7570.jpg"),
        require("../../../public/Links/PHV7570.jpg"),
        require("../../../public/Links/PHV7570.jpg"),
      ],
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
      interval: null,
    };
  },
  created() {
    // Set the countdown date
    const countdownDate = new Date("Jan 6, 2023 00:00:00").getTime();

    // Update the countdown every second
    this.interval = setInterval(() => {
      // Get today's date and time
      const now = new Date().getTime();

      // Find the distance between now and the countdown date
      const distance = countdownDate - now;

      // Time calculations for days, hours, minutes and seconds
      this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
      this.hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      this.seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // If the countdown is finished, clear the interval
      if (distance < 0) {
        clearInterval(this.interval);
      }
    }, 1000);
  },
  beforeDestroy() {
    // Clear the interval when the component is destroyed
    clearInterval(this.interval);
  },
};
</script>

<style lang="scss" scoped>
.jumbo {
  .jumbo1 {
    height: 100%;

    .VueCarousel {
      object-fit: cover;
      width: 100%;
      height: 570px;
    }

    .slide {
      img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    }
  }

  .jumbo2 {
    .clock {
      display: flex;
      align-items: center;
      justify-content: center;

      font-weight: bold;
      font-size: 1.5rem;

      height: 250px;
      background-color: rgb(246, 134, 48);

      .countdown {
        .square {
          display: flex;
          align-items: center;
          justify-content: center;

          height: 50px;
          width: 50px;
          background-color: rgb(253, 188, 72);
          margin: 10px;
          padding: 2rem;

          .square-time {
            font-size: 2rem;
            font-weight: bold;
            color: black;
          }

          .square-text {
            font-size: 0.5rem;
            font-weight: bold;
          }
        }
      }
    }

    .delivery {
      height: 240px;
      margin-top: 10px;

      border: 10px solid rgb(246, 134, 48);

      img {
        transform: scale(1.2);
      }

      h1 {
        color: rgb(246, 134, 48);
      }
    }
  }
}
</style>
