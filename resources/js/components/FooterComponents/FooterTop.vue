<template>
  <div class="FooterTop d-flex justify-content-center">
    <div class="footer-section">
      <h3>I nostri recapiti</h3>
      <ul>
        <li><a href="#">Papyra s.r.l.</a></li>
        <li><a href="#">Via R.Buschi, 1</a></li>
        <li><a href="#">Zona Industriale Squartabue</a></li>
        <li><a href="#">62019 Recanati (MC)</a></li>
        <li><a href="#">Tel: 071 7501161</a></li>
        <li><a href="#">Fax: 071 7501757</a></li>
        <li><a href="#">info@foxbox.it</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Menu utente</h3>
      <ul>
        <li><a href="#">Account</a></li>
        <li><a href="#">Carrello</a></li>
        <li><a href="#">Abbonamento FoxTop</a></li>
        <li><a href="#">Condizioni di vendita</a></li>
        <li><a href="#">Privacy & Cookies Policy</a></li>
        <li><a href="#">Contributo Conai</a></li>
        <li><a href="#">Contatti</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Seguici sui social</h3>
      <ul class="d-flex">
        <li>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Newsletter</h3>
      <p>Iscriviti per ricevere email su novità, sconti e molto altro.</p>
      <form>
        <input type="email" placeholder="Inserisci la tua email" />
        <button type="submit">ISCRIVITI</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
.FooterTop {
  padding: 3rem 0;

  .footer-section {
    margin: 0px 50px;
    h3 {
      font-weight: bold;
    }
    i{
        margin: 1rem 0px;
        font-size: 4rem;
    }
    button{
        background-color: black;
        display: block;
        color: white;
        padding: .1rem 1.5rem;
        margin: .5rem 0px;

        transition: 1s;
        &:hover{
            filter: invert(2);
        }
    }
  }
}
</style>
