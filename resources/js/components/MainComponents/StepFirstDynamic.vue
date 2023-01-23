<template>
  <div class="step">
    <div style="display: flex; flex-direction: column">
      <!-- First child element -->
      <div>
        <!-- Title goes here -->
        <div class="d-flex justify-content-start align-items-start">
          <div class="w-10 bg-yellow px-3 py-2 mx-2">STEP {{ step }}</div>
          <div class="w-90">
            <span class="title-create">{{ title }}</span>
            <div style="display: flex">
              <!-- Left column -->
              <div
                class="inputs"
                style="
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                ">
                <!-- Left side content goes here -->
                <div class="d-flex align-items-center justify-content-start">
                  <div
                    v-if="letterOne"
                    class="bg-yellow"
                    style="
                      height: 60px;
                      width: 60px;

                      color: white;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    ">
                    {{ letterOne }}
                  </div>
                  <input v-if="letterOne" style="height: 60px" type="text" />
                  <h2 v-if="txtOne" class="mx-2">{{ txtOne }}</h2>
                </div>

                <div class="d-flex align-items-center justify-content-start">
                  <div
                    v-if="letterTwo"
                    class="bg-yellow"
                    style="
                      height: 60px;
                      width: 60px;

                      color: white;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    ">
                    {{ letterTwo }}
                  </div>
                  <input v-if="letterTwo" style="height: 60px" type="text" />
                  <h2 v-if="txtTwo" class="mx-2">{{ txtTwo }}</h2>
                </div>

                <div class="d-flex align-items-center justify-content-start">
                  <div
                    v-if="letterThree"
                    class="bg-yellow"
                    style="
                      height: 60px;
                      width: 60px;

                      color: white;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    ">
                    {{ letterThree }}
                  </div>
                  <input v-if="letterThree" style="height: 60px" type="text" />
                  <h2 v-if="txtThree" class="mx-2">{{ txtThree }}</h2>
                </div>
              </div>
              <!-- Right column -->
              <div
                class="image"
                style="
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                ">
                <!-- Right side content goes here -->
                <img v-if="img" alt="image" class="img-fluid" :src="img" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Second child element -->
    </div>
  </div>
</template>

<script>
export default {
  props: {
    step: String,
    title: String,
    letterOne: String,
    letterTwo: String,
    letterThree: String,
    txtOne: String,
    txtTwo: String,
    txtThree: String,
    txtBanner: String,
    img: String,
  },
};
</script>

<style lang="scss" scoped>
input {
  width: 30%;
  margin: 1rem 0px;
  height: 30px;
  font-size: 1.5rem;
  border: none;
  background-color: #f1f1f1;
}
.bg-yellow {
  min-width: fit-content;
}
h2 {
  font-size: 1.5rem;
}
.shopping-cart .summary {
  border: 1px solid lightgray;
  background-color: white;
  padding: 30px;
  color: black;
  width: 100%;
}

.shopping-cart .summary h3 {
  text-align: start;
  font-size: 1.3em;
  font-weight: 600;
  padding-top: 20px;
  padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type) {
  padding-bottom: 10px;
  padding-top: 10px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text {
  font-size: 1em;
  font-weight: 600;
}

.shopping-cart .summary .price {
  float: right;
}

.shopping-cart .summary button {
  margin-top: 20px;
}
.active {
  transition: 1s;
  transform: scale(0.9);
}

.box {
  position: relative;
  border: none;
}
i {
  position: absolute;
  font-size: 8rem;
  top: 80px;
  color: white;
  font-weight: bold;
}

.title-create {
  font-weight: bold;
  font-size: 1.5rem;
}

.step {
  margin-bottom: 5rem;
  display: flex;
  border: 1px solid lightgray;
  padding: 1rem;

  background-color: white;
  color: black;
}

label {
  font-size: 1rem;
}

.form-group input {
  width: 100%;
}

.image img {
  padding: 1rem;
}
</style>
