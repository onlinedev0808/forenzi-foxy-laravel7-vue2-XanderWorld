<template>
  <table class="my-4">
    <thead>
      <tr style="max-hei" class="header-top">
        <th class="bg-dark text-white" colspan="2">SCATOLE 1 ONDA</th>
        <th class="bg-secondary text-white" colspan="3">MISURE IN CM</th>
        <th
          style="
            background-color: orange;
            position: relative;
            border: 1px solid orange;
          "
        >
          <img
            style="position: absolute; top: -10px; left: 30px; width: 80px"
            class="img-fluid"
            src="https://th.bing.com/th/id/R.f3a729f2cdc6271bcbdae051ca28fd47?rik=FT%2f0BrFqRaQgxQ&pid=ImgRaw&r=0"
            alt=""
          />
        </th>
        <th class="bg-dark text-white" colspan="5">
          PREZZI AL PEZZO - SCONTO FOXTOP
          <input type="checkbox" />
          5%
          <input type="checkbox" />
          10%
        </th>
        <th
          style="
            background-color: orange;
            border: 1px solid orange;
            position: relative;
          "
        >
          <img
            style="position: absolute; top: -10px; left: 40px; width: 80px"
            class="img-fluid"
            src="https://th.bing.com/th/id/R.f3a729f2cdc6271bcbdae051ca28fd47?rik=FT%2f0BrFqRaQgxQ&pid=ImgRaw&r=0"
            alt=""
          />
        </th>
        <th class="bg-dark text-white">CONSEGNA IN 24/48 ORE</th>
      </tr>
      <tr>
        <th class="th-sm">SCHEDA PRODOTTO</th>
        <th>CODICE</th>
        <th>LATO LUNGO</th>
        <th>LATO CORTO</th>
        <th>ALTEZZA</th>
        <th style="background-color: orange">PERSONALIZZA LA SCATOLA</th>
        <th>DA 1+</th>
        <th>DA 100+</th>
        <th>DA 300+</th>
        <th>DA 500+</th>
        <th>DA 1.000+</th>
        <th style="background-color: orange">AGGIUNGI UN BANCALE DA</th>
        <th>QUANTITÀ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <img
            class="img-fluid"
            src="../../../public/Links/category-scatole-con-maniglie.jpg"
            alt="Product image"
          />
        </td>

        <td>144</td>
        <td>14</td>
        <td>14</td>
        <td>10</td>
        <td>
          <img
            class="img-fluid p-3"
            src="../../../public/Links/001-pallet.png"
            alt=""
          />
        </td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>
          <div class="d-inline">1.280</div>
          <div class="yellow-button d-inline p-2 mx-2">+</div>
        </td>
        <td>
          <div style="display: flex; justify-content: flex-end">
            <input type="text" id="input" v-model="value" />
            <div class="d-flex flex-column">
              <button @click="increaseValue()">+</button>
              <button @click="decreaseValue()">-</button>
            </div>
          </div>
          <div class="yellow-button">AGGIUNGI</div>
        </td>
      </tr>
      <tr>
        <td>
          <img
            class="img-fluid"
            src="../../../public/Links/category-scatole-con-maniglie.jpg"
            alt="Product image"
          />
        </td>

        <td>44</td>
        <td>14</td>
        <td>14</td>
        <td>10</td>
        <td>
          <img
            class="img-fluid p-3"
            src="../../../public/Links/001-pallet.png"
            alt=""
          />
        </td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>€ 2,08</td>
        <td>
          <div class="d-inline">1.280</div>
          <div class="yellow-button d-inline p-2 mx-2">+</div>
        </td>
        <td>
          <div style="display: flex; justify-content: flex-end">
            <input type="text" id="input" v-model="value" />
            <div class="d-flex flex-column">
              <button @click="increaseValue()">+</button>
              <button @click="decreaseValue()">-</button>
            </div>
          </div>
          <div class="yellow-button">AGGIUNGI</div>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  data() {
    return {
      value: 100,
    };
  },
  methods: {
    increaseValue() {
      this.value += 10;
    },
    decreaseValue() {
      this.value -= 10;
    },
    sortTable() {
      console.log("clicked");
    },
  },
};
</script>

<style lang="scss" scoped>
/* Add styles for the table */
table {
  border-collapse: collapse;
  width: 100%;
}

input {
  width: 60px;
  text-align: center;
}

.header-top {
  padding: 0;
}

td:nth-child(12),
th:nth-child(12) {
  min-width: 10rem;
}

td,
th {
  min-width: 90px;
  border: 1px solid #ddd;
  padding: 0.8rem;
  font-size: 0.8rem;
  text-align: center;
}

/* Add hover effect for the "AGGIUNGI" button */
.add-button:hover {
  transform: scale(1.1);
}
</style>
