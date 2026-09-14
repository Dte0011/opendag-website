<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software Developer</title>
  <style>
    /* ==========================================================
       Variabelen (Curio huisstijlkleuren)
       ========================================================== */
    :root {
      --groen: #0b3d2e;
      --geel: #f9c800;
      --paars: #7b3fe4;
      --oranje: #f5a623;
      --roze: #f3a6c9;
      --blauw: #1b2a6b;
    }

    * {
      box-sizing: border-box;
    }

    /* ==========================================================
       Base
       ========================================================== */
    body {
      margin: 0;
      font-family: Arial;
      color: var(--groen);
      overflow-x: hidden;
    }

    /* ==========================================================
       Navbar
       ========================================================== */
    .navbar {
      background-color: var(--groen);
      color: var(--geel);
      padding: 15px 20px;
    }

    .left {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 10px;
    }

    .logo {
      font-size: 22px;
      font-weight: bold;
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

    /* ==========================================================
       Hero
       ========================================================== */
    .hero {
      background-color: var(--groen);
      color: var(--geel);
      padding: 30px 20px;
    }

    .hero .breadcrumb {
      font-weight: bold;
      font-size: 13px;
      margin-bottom: 10px;
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
      display: block;
      font-size: 13px;
      font-weight: bold;
    }

    /* ==========================================================
       Knoppen (gebruikt in de hero)
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

    /* ==========================================================
       Intro
       ========================================================== */
    .intro {
      padding: 30px 20px;
    }

    .intro h2 {
      font-size: 24px;
    }

    /* ==========================================================
       Vakken (subjects grid)
       ========================================================== */
    .vakken {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3px;
    }

    .vak {
      padding: 22px;
      color: white;
      min-height: 240px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      gap: 10px;
    }

    .vak-titel {
      font-weight: bold;
      font-size: 16px;
    }

    .vak-tekst {
      font-weight: normal;
      font-size: 15px;
      line-height: 1.4;
    }

    /* Kleurvarianten per vak-tegel */
    .geel { background-color: var(--geel); color: var(--groen); }
    .paars { background-color: var(--paars); }
    .oranje { background-color: var(--oranje); }
    .roze { background-color: var(--roze); color: var(--groen); }
    .blauw { background-color: var(--blauw); }

    /* ==========================================================
       CTA (call to action)
       ========================================================== */
    .cta {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3px;
      margin-top: 3px;
    }

    .cta a {
      display: block;
      padding: 25px;
      font-weight: bold;
      font-size: 17px;
      text-decoration: none;
      text-align: center;
    }

    .cta-geel {
      background-color: var(--geel);
      color: var(--groen);
    }

    .cta a p {
      font-size: 13px;
      font-weight: normal;
      margin-top: 10px;
    }

    /* ==========================================================
       Footer
       ========================================================== */
    footer {
      background-color: var(--groen);
      color: var(--geel);
      border-top: 2px solid var(--geel);
      padding: 10px 20px;
    }

    .footer-inner {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      text-align: center;
    }

    .footer-logo {
      font-size: 14px;
      font-weight: bold;
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
       Responsive (tablet/desktop)
       ========================================================== */
    @media (min-width: 700px) {
      .navbar {
        padding: 20px 30px;
        display: flex;
        align-items: center;
        gap: 40px;
      }

      .left {
        margin-bottom: 0;
      }

      .logo {
        font-size: 26px;
      }

      .nav-links a {
        font-size: 16px;
      }

      .hero {
        padding: 40px 30px;
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
        padding: 40px 30px;
      }

      .intro h2 {
        font-size: 28px;
      }

      .vakken {
        grid-template-columns: repeat(3, 1fr);
      }

      .cta {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="left">
      <div class="logo">curio</div>
    </div>
    <div class="nav-links">
      <a href="https://www.curio.nl/mbo" target="_blank">MBO</a>
      <a href="https://www.curio.nl/vmbo" target="_blank">VMBO</a>
      <a href="https://www.curio.nl/hulp-nodig/service-en-contact" target="_blank">CONTACT</a>
    </div>
  </div>

  <!-- Hero -->
  <div class="hero">
    <p class="breadcrumb">Home Open dag Software Developer</p>
    <h1>Software Developer</h1>
    <div class="info">
      <span>GEMAAKT DOOR<br>Timo van Eck</span>
      <span>JAAR<br>2</span>
      <span>NIVEAU<br>4</span>
    </div>
    <div class="knoppen">
      <a class="knop" href="#vakken">Mijn ervaring ↗</a>
      <a class="knop" href="https://www.curio.nl/mbo/studiekeuze/open-dagen" target="_blank">Open dagen ↗</a>
    </div>
  </div>

  <!-- Intro -->
  <div class="intro">
    <h2>In het kort</h2>
    <p>Bij Software Developer leer je apps en websites maken. Je leert programmeren en werkt samen aan echte projecten, net zoals bij een echt bedrijf. Je leert verschillende programmeertalen kennen en hoe je een probleem stap voor stap oplost met code. Ook leer je samenwerken in een team, want software maken doe je bijna nooit alleen. Naast programmeren komt ook design en gebruiksvriendelijkheid aan bod: hoe zorg je dat een app of website fijn is om te gebruiken? Na de opleiding kun je aan de slag als software developer, of je kiest voor een vervolgstudie.</p>
  </div>

  <!-- Vakken (subjects) -->
  <div class="vakken" id="vakken">

    <div class="vak geel">
      <span class="vak-titel">Sfeer op de afdeling</span>
      <span class="vak-tekst">Iedereen doet hier best wel zijn eigen ding en heeft veel eigen verantwoordelijkheid. Er wordt genoeg gekletst en gezellig gedaan, en de sfeer is ontspannen, maar op een gegeven moment moet je toch echt aan het werk en je projecten afmaken. Die balans tussen vrijheid en verantwoordelijkheid vind ik wel prettig.</span>
    </div>

    <div class="vak paars">
      <span class="vak-titel">Wat vind ik van de opleiding</span>
      <span class="vak-tekst">Ik vind het soms best pittig, maar wel leuk en interessant. Je begint met bijna niks en kunt uiteindelijk zelf alles bouwen, en je leert steeds beter hoe een computer dingen precies verwerkt. Vooral het moment waarop iets wat je zelf gemaakt hebt, echt werkt, geeft een goed gevoel.</span>
    </div>

    <div class="vak oranje">
      <span class="vak-titel">Rooster eerstejaars</span>
      <span class="vak-tekst">Zelf had ik 4 dagen school per week, en woensdag was bijna altijd vrij. Het rooster lag binnen een blok steeds vast, maar veranderde per blok, en in jaar 1 had je 2 blokken. Meestal was het gewoon van 09:00 tot 15:00 les. Niet altijd makkelijk, maar zeker ook geen zwaar rooster.</span>
    </div>

    <div class="vak roze">
      <span class="vak-titel">Groepswerk</span>
      <span class="vak-tekst">Groepswerk speelt een grote rol, vooral in de praktijk wordt heel veel samen gedaan. Zo gaat het later op de werkvloer ook: het is belangrijk dat je met allerlei verschillende mensen kunt samenwerken, ook als je dat zelf niet altijd zou willen. Je leert daardoor niet alleen programmeren, maar ook overleggen en plannen.</span>
    </div>

    <div class="vak blauw">
      <span class="vak-titel">Huiswerk</span>
      <span class="vak-tekst">Huiswerk ligt volledig aan jezelf: hoe meer je in de les af maakt, hoe minder huiswerk je hebt. Het is in mijn ervaring niet heel veel, meestal 1 tot 3 uur per dag, heel soms 4. Hoeveel tijd het kost, hangt dus ook af van hoeveel je er zelf voor kiest te doen. Samenwerkopdrachten doe je via GitHub, en communiceren met je groepje gaat via Teams.</span>
    </div>

  </div>

  <!-- CTA -->
  <div class="cta">
    <a class="cta-geel" href="https://www.curio.nl/mbo/ict/ict/software-developer" target="_blank">
      Meer weten over de opleiding? ↗
      <p>Bezoek curio.nl/mbo/ict/ict/software-developer</p>
    </a>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-inner">
      <div class="footer-logo">curio</div>
      <div class="footer-links">
        <a href="https://www.curio.nl/mbo" target="_blank">MBO</a>
        <a href="https://www.curio.nl/vmbo" target="_blank">VMBO</a>
        <a href="https://www.curio.nl/hulp-nodig/service-en-contact" target="_blank">CONTACT</a>
      </div>
      <div class="footer-divider"></div>
      <p class="footer-copy">&copy; <?php echo date("Y"); ?> Curio Software Developer</p>
    </div>
  </footer>

</body>
</html>
