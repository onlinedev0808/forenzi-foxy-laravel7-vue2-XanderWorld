<template>
    <div class="FooterTop d-flex justify-content-center">
        <div class="footer-section">
            <h3>I nostri recapiti</h3>
            <ul>
                <li>Papyra s.r.l.</li>
                <li>Via R.Buschi, 1</li>
                <li>Zona Industriale Squartabue</li>
                <li>62019 Recanati (MC)</li>
                <li>Tel: 071 7501161</li>
                <li>Fax: 071 7501757</li>
                <li>info@foxbox.it</li>
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

<script></script>

<style lang="scss" scoped>
.FooterTop {
    padding: 3rem 0;
    background-color: #f5f5f5;
    .footer-section {
        margin: 0px 50px;
        h3 {
            font-weight: bold;
        }
        i {
            margin: 0.8rem 0px;
            font-size: 2rem;
        }
        button {
            background-color: black;
            display: block;
            color: white;
            padding: 0.1rem 1.5rem;
            margin: 0.5rem 0px;
            border-radius: 4px;
            transition: background-color 0.2s ease-in-out;
            &:hover {
                background-color: #3e8e41;
                cursor: pointer;
            }
        }
        ul {
            list-style: none;
            padding: 0;
            li {
                margin: 0.5rem 0;
            }
        }
        @media (max-width: 991px) {
            margin: 0px 20px;
        }
    }
}
</style>
