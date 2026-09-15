<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Open dag informatie over de mbo-opleiding Software Developer bij Curio in Breda.">
  <title>Software Developer | Curio open dag</title>
  <style>
    /* ==========================================================
       1. Variabelen (Curio huisstijlkleuren)
       ========================================================== */
    :root {
      --groen: #0b3d2e;
      --geel: #f9c800;
      --paars: #7b3fe4;
      --oranje: #f5a623;
      --roze: #f3a6c9;
      --blauw: #1b2a6b;

      /* Zijmarge voor volle-breedte balken: minimaal 20px,
         op brede schermen staat de inhoud (960px) in het midden */
      --rand: max(20px, calc((100% - 960px) / 2));
    }

    /* ==========================================================
       2. Basis
       ========================================================== */
    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      color: var(--groen);
      overflow-x: hidden;
    }

    img {
      display: block;
      max-width: 100%;
    }

    /* ==========================================================
       3. Layout: blokken met max breedte in het midden
       ========================================================== */
    .intro,
    .vakken,
    .rooster-vak,
    .cta {
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 20px;
      padding-right: 20px;
    }

    /* ==========================================================
       4. Navbar
       ========================================================== */
    .navbar {
      background-color: var(--groen);
      color: var(--geel);
      padding: 15px var(--rand);
    }

    .logo-link {
      display: block;
      width: fit-content;
      margin-bottom: 10px;
    }

    .logo {
      width: auto;
      height: 30px;
    }

    .nav-links {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .nav-links a {
      color: var(--geel);
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
      white-space: nowrap;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    /* ==========================================================
       5. Hero
       ========================================================== */
    .hero {
      background-color: var(--groen);
      color: var(--geel);
      padding: 30px var(--rand);
    }

    .hero .breadcrumb {
      font-weight: bold;
      font-size: 13px;
      margin: 0 0 10px 0;
    }

    .hero h1 {
      font-size: 28px;
      margin: 0 0 20px 0;
    }

    .hero .info {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 20px;
    }

    .hero .info span {
      font-size: 13px;
      font-weight: bold;
    }

    /* ==========================================================
       6. Knoppen (hero)
       ========================================================== */
    .knoppen {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .knop {
      background-color: var(--geel);
      color: var(--groen);
      padding: 14px 20px;
      font-weight: bold;
      text-decoration: none;
      text-align: center;
    }

    .knop:hover {
      filter: brightness(1.1);
    }

    /* ==========================================================
       7. Intro + foto's
       ========================================================== */
    .intro {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .intro h2 {
      font-size: 24px;
    }

    .intro p {
      line-height: 1.6;
    }

    .fotos {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3px;
      margin-top: 20px;
    }

    .fotos img {
      width: 100%;
      height: auto;
      aspect-ratio: 3 / 2;
      object-fit: cover;
    }

    /* ==========================================================
       8. Vakken (tegels met tekst)
       ========================================================== */
    .vakken {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3px;
    }

    .vak {
      display: flex;
      flex-direction: column;
      gap: 10px;
      min-height: 240px;
      padding: 22px;
      color: white;
    }

    .vak-titel {
      margin: 0;
      font-size: 16px;
    }

    .vak-tekst {
      margin: 0;
      font-size: 15px;
      line-height: 1.4;
    }

    /* Kleurvarianten per tegel */
    .geel   { background-color: var(--geel); color: var(--groen); }
    .paars  { background-color: var(--paars); }
    .oranje { background-color: var(--oranje); }
    .roze   { background-color: var(--roze); color: var(--groen); }
    .blauw  { background-color: var(--blauw); }

    /* ==========================================================
       9. Rooster
       ========================================================== */
    .rooster-vak {
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .rooster-vak h2 {
      font-size: 20px;
      margin: 0 0 10px 0;
    }

    /* Op kleine schermen scrollt het rooster opzij, zodat het leesbaar blijft */
    .rooster-scroll {
      overflow-x: auto;
      background-color: var(--groen);
      padding: 8px;
    }

    .rooster-img {
      width: 100%;
      min-width: 700px;
      max-width: none;
      height: auto;
    }

    /* ==========================================================
       10. CTA (call to action)
       ========================================================== */
    .cta {
      margin-bottom: 30px;
    }

    .cta a {
      display: block;
      padding: 25px;
      background-color: var(--geel);
      color: var(--groen);
      font-weight: bold;
      font-size: 17px;
      text-decoration: none;
      text-align: center;
    }

    .cta a:hover {
      filter: brightness(1.1);
    }

    .cta a span {
      display: block;
      margin-top: 10px;
      font-size: 13px;
      font-weight: normal;
    }

    /* ==========================================================
       11. Footer
       ========================================================== */
    footer {
      background-color: var(--groen);
      color: var(--geel);
      border-top: 2px solid var(--geel);
      padding: 10px 20px;
    }

    .footer-inner {
      max-width: 1000px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      text-align: center;
    }

    .footer-logo {
      width: auto;
      height: 20px;
    }

    .footer-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
    }

    .footer-links a {
      color: var(--geel);
      text-decoration: none;
      font-weight: bold;
      font-size: 11px;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .footer-divider {
      width: 100%;
      max-width: 120px;
      height: 1px;
      background-color: rgba(249, 200, 0, 0.4);
    }

    .footer-copy {
      margin: 0;
      font-size: 11px;
    }

    /* ==========================================================
       12. Lightbox (klik op afbeelding = vergroten)
       ========================================================== */
    .zoombaar {
      cursor: zoom-in;
    }

    .lightbox {
      width: 100%;
      height: 100%;
      max-width: 100%;
      max-height: 100%;
      margin: 0;
      padding: 20px;
      border: 0;
      background: transparent;
      overflow: auto;
    }

    .lightbox[open] {
      display: flex;
    }

    .lightbox::backdrop {
      background-color: rgba(11, 61, 46, 0.92);
    }

    /* margin: auto centreert, maar laat scrollen toe als de afbeelding groter is */
    .lightbox img {
      margin: auto;
      max-height: 100%;
    }

    .lightbox-sluit {
      position: fixed;
      top: 10px;
      right: 10px;
      width: 44px;
      height: 44px;
      border: 0;
      background-color: var(--geel);
      color: var(--groen);
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
    }

    /* Pagina erachter niet laten scrollen zolang de lightbox open is */
    body:has(.lightbox[open]) {
      overflow: hidden;
    }

    /* ==========================================================
       13. Responsive: mobiel (kleiner dan 700px)
       ========================================================== */
    @media (max-width: 699px) {
      /* Het brede rooster groot tonen; opzij scrollen om alles te zien */
      .lightbox.breed img {
        width: 1000px;
        max-width: none;
        max-height: none;
      }
    }

    /* ==========================================================
       14. Responsive: tablet en desktop (700px en breder)
       ========================================================== */
    @media (min-width: 700px) {
      .navbar {
        display: flex;
        align-items: center;
        gap: 40px;
        padding-top: 20px;
        padding-bottom: 20px;
      }

      .logo-link {
        margin-bottom: 0;
      }

      .logo {
        height: 36px;
      }

      .nav-links a {
        font-size: 16px;
      }

      .hero {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .hero h1 {
        font-size: 42px;
      }

      .hero .info {
        flex-direction: row;
        gap: 40px;
      }

      .knoppen {
        flex-direction: row;
      }

      .knop {
        padding: 12px 20px;
      }

      .intro {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .intro h2 {
        font-size: 28px;
      }

      .fotos {
        grid-template-columns: 1fr 1fr;
      }

      /* 6 kolommen: 3 tegels bovenaan, 2 bredere tegels eronder */
      .vakken {
        grid-template-columns: repeat(6, 1fr);
      }

      .vak {
        grid-column: span 2;
      }

      .vak:nth-child(n+4) {
        grid-column: span 3;
        min-height: 0;
      }
    }
  </style>
</head>
<body>

  <!-- ==========================================================
       Navbar
       ========================================================== -->
  <header class="navbar">
    <a class="logo-link" href="https://www.curio.nl" target="_blank" rel="noopener">
      <img class="logo" src="assets/img/logo/curio-logo-geel.png" alt="Curio" width="400" height="140">
    </a>
    <nav class="nav-links">
      <a href="https://www.curio.nl/mbo" target="_blank" rel="noopener">MBO</a>
      <a href="https://www.curio.nl/vmbo" target="_blank" rel="noopener">VMBO</a>
      <a href="https://www.curio.nl/hulp-nodig/service-en-contact" target="_blank" rel="noopener">CONTACT</a>
    </nav>
  </header>

  <main>

    <!-- ==========================================================
         Hero
         ========================================================== -->
    <section class="hero">
      <p class="breadcrumb">Home › Open dag › Software Developer</p>
      <h1>Software Developer</h1>
      <div class="info">
        <span>GEMAAKT DOOR<br>Timo van Eck</span>
        <span>JAAR<br>2</span>
        <span>NIVEAU<br>4</span>
      </div>
      <div class="knoppen">
        <a class="knop" href="#vakken">Mijn ervaring ↓</a>
        <a class="knop" href="https://www.curio.nl/mbo/studiekeuze/open-dagen" target="_blank" rel="noopener">Open dagen ↗</a>
      </div>
    </section>

    <!-- ==========================================================
         Intro + foto's
         ========================================================== -->
    <section class="intro">
      <h2>In het kort</h2>
      <p>Bij Software Developer leer je apps en websites maken. Je leert programmeren en werkt samen aan echte projecten, net zoals bij een echt bedrijf. Je leert verschillende programmeertalen kennen en hoe je een probleem stap voor stap oplost met code. Ook leer je samenwerken in een team, want software maken doe je bijna nooit alleen. Naast programmeren komt ook design en gebruiksvriendelijkheid aan bod: hoe zorg je dat een app of website fijn is om te gebruiken? Na de opleiding kun je aan de slag als software developer, of je kiest voor een vervolgstudie.</p>
      <div class="fotos">
        <img class="zoombaar" src="assets/img/opleiding/software-development-in-actie.jpg" alt="Student aan het programmeren op laptop en scherm" width="1200" height="800">
        <img class="zoombaar" src="assets/img/locatie/curio-terheijdenseweg-buiten.jpg" alt="Curio locatie Terheijdenseweg 350 in Breda" width="1200" height="800" loading="lazy">
      </div>
    </section>

    <!-- ==========================================================
         Vakken (mijn ervaring)
         ========================================================== -->
    <section class="vakken" id="vakken">

      <article class="vak geel">
        <h3 class="vak-titel">Sfeer op de afdeling</h3>
        <p class="vak-tekst">Iedereen doet hier best wel zijn eigen ding en heeft veel eigen verantwoordelijkheid. Er wordt genoeg gekletst en gezellig gedaan, en de sfeer is ontspannen, maar op een gegeven moment moet je toch echt aan het werk en je projecten afmaken. Die balans tussen vrijheid en verantwoordelijkheid vind ik wel prettig.</p>
      </article>

      <article class="vak paars">
        <h3 class="vak-titel">Wat vind ik van de opleiding</h3>
        <p class="vak-tekst">Ik vind het soms best pittig, maar wel leuk en interessant. Je begint met bijna niks en kunt uiteindelijk zelf alles bouwen, en je leert steeds beter hoe een computer dingen precies verwerkt. Vooral het moment waarop iets wat je zelf gemaakt hebt, echt werkt, geeft een goed gevoel.</p>
      </article>

      <article class="vak oranje">
        <h3 class="vak-titel">Rooster eerstejaars</h3>
        <p class="vak-tekst">Hieronder zie je een week uit het rooster van leerjaar 1 op de Terheijdenseweg 350 (THW350). Op maandag, dinsdag en donderdag heb je vooral Fundament 1: WEB, met daarnaast Rekenen, Nederlands en Burgerschap. Woensdag en vrijdag staan in het teken van Challenges en Masterclasses. De lessen vallen tussen 08:30 en 16:30.</p>
      </article>

      <article class="vak roze">
        <h3 class="vak-titel">Groepswerk</h3>
        <p class="vak-tekst">Groepswerk speelt een grote rol, vooral in de praktijk wordt heel veel samen gedaan. Zo gaat het later op de werkvloer ook: het is belangrijk dat je met allerlei verschillende mensen kunt samenwerken, ook als je dat zelf niet altijd zou willen. Je leert daardoor niet alleen programmeren, maar ook overleggen en plannen.</p>
      </article>

      <article class="vak blauw">
        <h3 class="vak-titel">Huiswerk</h3>
        <p class="vak-tekst">Huiswerk ligt volledig aan jezelf: hoe meer je in de les af maakt, hoe minder huiswerk je hebt. Het is in mijn ervaring niet heel veel, meestal 1 tot 3 uur per dag, heel soms 4. Hoeveel tijd het kost, hangt dus ook af van hoeveel je er zelf voor kiest te doen. Samenwerkopdrachten doe je via GitHub, en communiceren met je groepje gaat via Teams.</p>
      </article>

    </section>

    <!-- ==========================================================
         Rooster afbeelding
         ========================================================== -->
    <section class="rooster-vak">
      <h2>Voorbeeld rooster eerste leerjaar</h2>
      <div class="rooster-scroll">
        <img class="rooster-img zoombaar" src="assets/img/opleiding/rooster-eerste-leerjaar.png" alt="Rooster eerste leerjaar Software Developer" width="1418" height="636" loading="lazy">
      </div>
    </section>

    <!-- ==========================================================
         CTA (call to action)
         ========================================================== -->
    <section class="cta">
      <a href="https://www.curio.nl/mbo/ict/ict/software-developer" target="_blank" rel="noopener">
        Meer weten over de opleiding? ↗
        <span>Bezoek curio.nl/mbo/ict/ict/software-developer</span>
      </a>
    </section>

  </main>

  <!-- ==========================================================
       Footer
       ========================================================== -->
  <footer>
    <div class="footer-inner">
      <img class="footer-logo" src="assets/img/logo/curio-logo-geel.png" alt="Curio" width="400" height="140" loading="lazy">
      <nav class="footer-links">
        <a href="https://www.curio.nl/mbo" target="_blank" rel="noopener">MBO</a>
        <a href="https://www.curio.nl/vmbo" target="_blank" rel="noopener">VMBO</a>
        <a href="https://www.curio.nl/hulp-nodig/service-en-contact" target="_blank" rel="noopener">CONTACT</a>
      </nav>
      <div class="footer-divider"></div>
      <p class="footer-copy">&copy; <?php echo date('Y'); ?> Curio Software Developer</p>
    </div>
  </footer>

  <!-- ==========================================================
       Lightbox (vergrote afbeelding)
       ========================================================== -->
  <dialog class="lightbox" id="lightbox" aria-label="Vergrote afbeelding">
    <button class="lightbox-sluit" aria-label="Sluiten">✕</button>
    <img alt="">
  </dialog>

  <script>
    // Lightbox: klik (of Enter) op een afbeelding met class "zoombaar" om hem groot te tonen.
    // Sluiten: klik/tik ergens, de ✕-knop of Esc.
    const lightbox = document.getElementById('lightbox');
    const grootImg = lightbox.querySelector('img');

    function openLightbox(img) {
      grootImg.src = img.src;
      grootImg.alt = img.alt;
      // Het rooster is heel breed: op mobiel groter tonen met opzij scrollen
      lightbox.classList.toggle('breed', img.classList.contains('rooster-img'));
      lightbox.showModal();
    }

    document.querySelectorAll('.zoombaar').forEach(function (img) {
      img.tabIndex = 0;
      img.addEventListener('click', function () {
        openLightbox(img);
      });
      img.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          openLightbox(img);
        }
      });
    });

    lightbox.addEventListener('click', function () {
      lightbox.close();
    });
  </script>

</body>
</html>
