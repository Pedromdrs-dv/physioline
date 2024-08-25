<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - Physioline</title>
    <link rel="stylesheet" href="assets/style/especialidades.css">
    <link rel="stylesheet" href="assets/style/home.css">
    <link rel="stylesheet" href="assets/style/menu.css">
    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/style/sobre.css">
    <link rel="stylesheet" href="assets/style/valores.css">
    <link rel="stylesheet" href="assets/style/footer.css">
    <link rel="stylesheet" href="assets/style/btn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cambay:ital@0;1&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/img/arrow-up.svg" alt=""></button>
    <header class="header" id="header">
        <button onclick="toogleSidebar()" class="btn__header__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="header__logo">
            <a href="index.html"><img class="header__img__logo" src="assets/img/logo.png"
                    alt="Logo da Clínica Physioline"></a>
        </div>

        <nav class="header__nav" id="header__nav">
            <button onclick="toogleSidebar()" class="btn__header__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg"
                    viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                </svg>
            </button>
            <a href="index.html" class="active">Home</a>
            <a href="#article__sobre">Sobre</a>
            <a href="#section__especialidades">Especiliades</a>
            <a href="#footer">Contato</a>
            <a href="/dev_projects/physioline/assets/src/login.php">Entrar</a>
        </nav>
    </header>

    <main tabindex="0" class="main" onclick="closeSidebar()" id="main">
        <div class="main__conteudo">
            <h1>Transforme sua vida!</h1>
            <p>Descubra o Poder da Fisioterapia para uma recuperação completa. Nossos profissionais altamente
                qualificados estão prontos para ajudá-lo! Deixe-nos cuidar de você e alcance uma vida mais saudável e
                feliz.</p>
            <div class="container__btn">
                <button><a href="/dev_projects/physioline/assets/src/login.php">Agendar</a></button>
            </div>
        </div>
        <div class="main__img">
            <img src="assets/img/redonda.svg" alt="">
        </div>
    </main>

    <article class="article__sobre" id="article__sobre">
        <h2>Sobre</h2>


        <p>Localizada na região central de Brasília, a Physio Line é uma empresa especializada em saúde, reabilitação e
            bem-estar. Foi especialmente criada com o intuito de oferecer um serviço especializado e diferenciado para
            pessoas que buscam melhor qualidade de vida. Além de oferecer serviços a um preço altamente competitivo e
            acessível, a empresa diferencia-se pela qualidade e pela inovação, como no serviço de Baby Pilates,
            atendimentos empresariais e domiciliares.
        </p>

    </article>

    <article class="section__valores">
        <div class="section__valores__card">
            <div class="section__valores__card__content">
                <h3>Missão</h3>
                <p>Oferecer serviços de saúde de qualidade, com atendimento humanizado, buscando sempre a inovação e a
                    excelência.</p>
            </div>
        </div>

        <div class="section__valores__card">
            <div class="section__valores__card__content">
                <h3>Visão</h3>
                <p>Ser uma empresa de saúde reconhecida no Distrito Federal, pela qualidade dos serviços estados.</p>
            </div>
        </div>

        <div class="section__valores__card">
            <div class="section__valores__card__content">
                <h3>Valores</h3>
                <p>Agir com transparência e compromisso com a saúde de nosso clientes, mantendo o profissionalismo,
                    qualidade e responsabilidade</p>
            </div>
        </div>

    </article>

    <section class="section__especialidades" id="section__especialidades">
        <h2>Nossas especialidades </h2>
        <p>Oferecemos diversas especialidades para quem busca qualidade de vida.</p>


        <div class="l-cards">
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/fisioterapia.jpeg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Fisioterapia</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/aero.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Aeropilates</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/quickmassage.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Quick Massage</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/babypilates.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Baby Pilates</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/acupuntura.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Acupuntura</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/bio.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Avaliação Biompedância</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/domiciliar.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Atendimento domiciliar</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/drenagem.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Drenagem linfática</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/ergome.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Ergometria</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/shiatzu.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Shiatzu</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/gestantes.png" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Pilates para gestantes</h4>
                </div>
            </div>
            <div class="section__especialidades__card">
                <div class="section__especialidades__card__img">
                    <img src="assets/img/laboral.jpg" alt="">
                </div>
                <div class="section__especialidades__card__content">
                    <h4>Ginástica Laboral</h4>
                </div>
            </div>

        </div>

    </section>

    <footer class="footer" id="footer">
        <div class="footer__header">
            <h2>Fale Conosco!</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"
                class="footer__icon__baloon">
                <path
                    d="M19.9998 35C23.328 34.9995 26.5615 33.8922 29.1913 31.8523C31.821 29.8124 33.6977 26.9558 34.5258 23.7323C35.3539 20.5088 35.0865 17.1014 33.7655 14.0466C32.4446 10.9918 30.1452 8.463 27.2293 6.85843C24.3135 5.25385 20.9468 4.66458 17.6593 5.18339C14.3718 5.70221 11.3502 7.29964 9.07021 9.72419C6.79022 12.1488 5.38132 15.2627 5.06534 18.5759C4.74935 21.889 5.54422 25.2132 7.3248 28.025L4.9998 35L11.9748 32.675C14.374 34.198 17.158 35.0046 19.9998 35Z"
                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div class="footer__container">
            <div class="footer__contatos">
                <h2>Contatos</h2>

                <div class="footer__container__alt">

                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38" fill="none"
                        class="footer__icon__baloon">
                        <path
                            d="M26.1626 19H30.4108C30.4108 16.2005 29.2919 13.5156 27.3001 11.5361C25.3083 9.55654 22.6069 8.44444 19.7901 8.44444V12.6667C21.4802 12.6667 23.1011 13.3339 24.2961 14.5217C25.4912 15.7094 26.1626 17.3203 26.1626 19ZM34.6591 19H38.9074C38.9074 8.44444 30.3471 0 19.7901 0V4.22222C27.9893 4.22222 34.6591 10.83 34.6591 19ZM36.7833 26.3889C34.1281 26.3889 31.5791 25.9667 29.2001 25.1856C28.4566 24.9533 27.6282 25.1222 27.0335 25.7133L22.3603 30.3578C16.349 27.3178 11.421 22.42 8.36225 16.4456L13.0354 11.8011C13.6301 11.21 13.8001 10.3867 13.5664 9.64778C12.7805 7.28333 12.3556 4.75 12.3556 2.11111C12.3556 1.55121 12.1318 1.01424 11.7335 0.61833C11.3351 0.22242 10.7949 0 10.2315 0H2.79699C2.23364 0 1.69335 0.22242 1.295 0.61833C0.896644 1.01424 0.672852 1.55121 0.672852 2.11111C0.672852 11.6294 4.47733 20.7579 11.2493 27.4884C18.0214 34.2189 27.2062 38 36.7833 38C37.3466 38 37.8869 37.7776 38.2853 37.3817C38.6836 36.9858 38.9074 36.4488 38.9074 35.8889V28.5C38.9074 27.9401 38.6836 27.4031 38.2853 27.0072C37.8869 26.6113 37.3466 26.3889 36.7833 26.3889Z"
                            fill="white" />
                    </svg>
                    <p>(61) 3963 - 5135</p>
                </div>

                <div class="footer__container__alt">

                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38" fill="none"
                        class="footer__icon__baloon">
                        <path
                            d="M33.1808 5.52187C29.6048 1.95937 24.8426 0 19.7816 0C9.33537 0 0.835007 8.44821 0.835007 18.8304C0.835007 22.1469 1.70553 25.3871 3.36122 28.2455L0.672852 38L10.718 35.379C13.4831 36.8804 16.5982 37.6692 19.7731 37.6692H19.7816C30.2193 37.6692 38.9074 29.221 38.9074 18.8388C38.9074 13.8089 36.7567 9.08437 33.1808 5.52187ZM19.7816 34.4969C16.9481 34.4969 14.1744 33.742 11.7592 32.317L11.1874 31.9777L5.23028 33.5299L6.81769 27.7536L6.44217 27.1598C4.86329 24.6661 4.03545 21.7906 4.03545 18.8304C4.03545 10.204 11.102 3.1808 19.7901 3.1808C23.9976 3.1808 27.9491 4.80937 30.9191 7.76964C33.8891 10.7299 35.7155 14.6571 35.707 18.8388C35.707 27.4737 28.4612 34.4969 19.7816 34.4969ZM28.4185 22.7746C27.9491 22.5371 25.6192 21.4004 25.1839 21.2478C24.7487 21.0866 24.4329 21.0103 24.1171 21.4853C23.8014 21.9603 22.8967 23.0121 22.6151 23.3344C22.342 23.6482 22.0603 23.6906 21.5909 23.4531C18.8087 22.0705 16.9823 20.9848 15.1474 17.8549C14.6609 17.0237 15.6338 17.083 16.5385 15.2848C16.6921 14.971 16.6153 14.6996 16.4958 14.4621C16.3763 14.2246 15.429 11.9089 15.0364 10.9674C14.6524 10.0513 14.2598 10.1786 13.9696 10.1616C13.6965 10.1446 13.3807 10.1446 13.0649 10.1446C12.7492 10.1446 12.2371 10.2634 11.8018 10.7299C11.3666 11.2049 10.1461 12.3415 10.1461 14.6571C10.1461 16.9728 11.8445 19.2121 12.0749 19.5259C12.3139 19.8397 15.4119 24.5897 20.1657 26.6339C23.1698 27.9232 24.3476 28.0335 25.8496 27.8129C26.7628 27.6772 28.6489 26.6763 29.0415 25.5737C29.4341 24.471 29.4341 23.5295 29.3146 23.3344C29.2037 23.1223 28.8879 23.0036 28.4185 22.7746Z"
                            fill="white" />
                    </svg>
                    <p>(61) 99606 - 5135</p>
                </div>

                <h2>Email</h2>

                <div class="footer__container__alt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="52" viewBox="0 0 41 52" fill="none"
                        class="footer__icon__baloon">
                        <path
                            d="M32.2917 15.0208H27.8981L18.3059 8.58351L7.40567 15.9005V36.4784C6.51616 36.4784 5.66307 36.0262 5.03409 35.2214C4.40511 34.4166 4.05176 33.325 4.05176 32.1868V15.3856C4.05176 13.9479 4.52131 13.0038 5.41009 12.4673L18.3059 4.29199L30.9669 12.4673C31.7215 13.0681 32.1911 13.9479 32.2917 15.0208ZM12.4365 17.1665H34.2369C35.1265 17.1665 35.9795 17.6187 36.6085 18.4235C37.2375 19.2283 37.5909 20.3199 37.5909 21.458V40.7699C37.5909 41.908 37.2375 42.9996 36.6085 43.8044C35.9795 44.6092 35.1265 45.0614 34.2369 45.0614H12.4365C11.547 45.0614 10.6939 44.6092 10.065 43.8044C9.43598 42.9996 9.08262 41.908 9.08262 40.7699V21.458C9.08262 20.3199 9.43598 19.2283 10.065 18.4235C10.6939 17.6187 11.547 17.1665 12.4365 17.1665ZM34.2369 25.0415V21.458L23.3367 28.5605L12.4365 21.458V25.0415L23.3367 32.1868L34.2369 25.0415Z"
                            fill="white" />
                    </svg>
                    <p><a href="mailto:atendimento.physioline@gmail.com">atendimento.physioline@gmail.com</a></p>
                </div>
            </div>

            <div class="footer__address">
                <h2>Endereço</h2>

                <div class="footer__container__alt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="53" viewBox="0 0 36 53" fill="none"
                        class="footer__icon__baloon__alt">
                        <path
                            d="M18.2112 25.196C16.5375 25.196 14.9325 24.5178 13.749 23.3106C12.5656 22.1034 11.9007 20.466 11.9007 18.7587C11.9007 17.0515 12.5656 15.4141 13.749 14.2069C14.9325 12.9997 16.5375 12.3215 18.2112 12.3215C19.8848 12.3215 21.4899 12.9997 22.6733 14.2069C23.8567 15.4141 24.5216 17.0515 24.5216 18.7587C24.5216 19.6041 24.3583 20.4412 24.0412 21.2222C23.7241 22.0032 23.2593 22.7128 22.6733 23.3106C22.0873 23.9083 21.3917 24.3825 20.626 24.706C19.8604 25.0295 19.0399 25.196 18.2112 25.196ZM18.2112 0.734375C13.525 0.734375 9.03078 2.63336 5.71717 6.01359C2.40356 9.39381 0.541992 13.9784 0.541992 18.7587C0.541992 32.277 18.2112 52.2326 18.2112 52.2326C18.2112 52.2326 35.8803 32.277 35.8803 18.7587C35.8803 13.9784 34.0188 9.39381 30.7051 6.01359C27.3915 2.63336 22.8973 0.734375 18.2112 0.734375Z"
                            fill="white" />
                    </svg>
                    <p>CLN 209 bloco c subsolo - Asa norte
                        Brasília, Brasil 70854-230</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15359.56011178837!2d-47.88568605875245!3d-15.75695585053417!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a3497bc6487%3A0x947d0fb9241d1b0a!2sPhysioLine%20Pilates!5e0!3m2!1sen!2sbr!4v1688664124012!5m2!1sen!2sbr"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>

    <div class="dev">
        <p>Desensenvolvido por <a href="#">Leomar Araujo</a>, <a href="#">Pedro Medeiros</a> e <a href="#">Rey
                Conceição</a>
            - 2023</p>
    </div>

</body>

<script src="assets/src/index.js"></script>

</html>