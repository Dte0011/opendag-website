<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software Developer</title>
  <style>
    * {
      box-sizing: border-box;
    }

    /* ==========================================================
       Base
       ========================================================== */
    body {
      margin: 0;
      font-family: Arial;
      color: #0b3d2e;
      overflow-x: hidden;
    }

    /* ==========================================================
       Navbar
       ========================================================== */
    .navbar {
      background-color: #0b3d2e;
      color: #f9c800;
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
      color: #f9c800;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
      white-space: nowrap;
    }

    /* ==========================================================
       Hero
       ========================================================== */
    .hero {
      background-color: #0b3d2e;
      color: #f9c800;
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

    /* Buttons (used in hero) */
    .knoppen {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .knop {
      background-color: #f9c800;
      color: #0b3d2e;
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
      min-height: 110px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 10px;
    }

    .vak-titel {
      font-weight: bold;
      font-size: 16px;
    }

    .vak-tekst {
      font-weight: normal;
      font-size: 13px;
    }

    /* Color variants per vak-tegel */
    .geel { background-color: #f9c800; color: #0b3d2e; }
    .paars { background-color: #7b3fe4; }
    .oranje { background-color: #f5a623; }
    .roze { background-color: #f3a6c9; color: #0b3d2e; }
    .blauw { background-color: #1b2a6b; }

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

    .cta-groen {
      background-color: #0b3d2e;
      color: #f9c800;
    }

    .cta-geel {
      background-color: #f9c800;
      color: #0b3d2e;
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
      background-color: #0b3d2e;
      color: #f9c800;
      border-top: 2px solid #f9c800;
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
      color: #f9c800;
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
      <span>GEMAAKT DOOR<br>Lorem Ipsum</span>
      <span>JAAR<br>1</span>
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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aperiam ducimus consectetur optio dolore, dolorum sint magni minima temporibus sit voluptates officiis unde ex accusantium odio natus nam ea maiores!</p>
  </div>

  <!-- Vakken (subjects) -->
  <div class="vakken" id="vakken">

    <div class="vak geel">
      <span class="vak-titel">Sfeer op de afdeling</span>
      <span class="vak-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
    </div>

    <div class="vak paars">
      <span class="vak-titel">Wat vind ik van de opleiding</span>
      <span class="vak-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
    </div>

    <div class="vak oranje">
      <span class="vak-titel">Rooster eerstejaars</span>
      <span class="vak-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
    </div>

    <div class="vak roze">
      <span class="vak-titel">Groepswerk</span>
      <span class="vak-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
    </div>

    <div class="vak blauw">
      <span class="vak-titel">Huiswerk</span>
      <span class="vak-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
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
