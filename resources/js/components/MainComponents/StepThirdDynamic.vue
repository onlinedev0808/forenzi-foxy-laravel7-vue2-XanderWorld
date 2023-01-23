<template>
  <div class="step">
    <fieldset>
      <div class="d-flex align-items-start">
        <div class="w-10 bg-yellow px-3 py-2 mx-2">STEP 5</div>

        <div class="w-90">
          <span class="title-create"
            >NEUTRA O CON LA STAMPA PERSONALIZZATA?</span
          >
          <div class="mt-5 d-flex flex-column justify-content-center">
            <div class="">
              <input checked id="huey" name="drone" type="radio" value="huey" />
              <label for="huey">Huey</label>
            </div>

            <div>
              <input id="dewey" name="drone" type="radio" value="dewey" />
              <label for="dewey">Dewey</label>
            </div>

            <div>
              <input id="louie" name="drone" type="radio" value="louie" />
              <label for="louie">Louie</label>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
  </div>
</template>

<script>
export default {};
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
