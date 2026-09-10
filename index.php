<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software Developer</title>
  <style>
    body {
      margin: 0;
      font-family: Arial;
      color: #0b3d2e;
    }

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

    .intro {
      padding: 30px 20px;
    }

    .intro h2 {
      font-size: 24px;
    }

    .vakken {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3px;
    }

    .vak {
      padding: 22px;
      color: white;
      font-weight: bold;
      min-height: 110px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .geel { background-color: #f9c800; color: #0b3d2e; }
    .paars { background-color: #7b3fe4; }
    .oranje { background-color: #f5a623; }
    .roze { background-color: #f3a6c9; color: #0b3d2e; }
    .blauw { background-color: #1b2a6b; }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="left">
      <div class="logo">curio</div>
    </div>
    <div class="nav-links">
      <a href="#">MBO</a>
      <a href="#">VMBO</a>
      <a href="#">CONTACT</a>
    </div>
  </div>

  <div class="hero">
    <p class="breadcrumb">Home Open dag Software Developer</p>
    <h1>Software Developer</h1>
    <div class="info">
      <span>GEMAAKT DOOR<br>vul hier je naam in</span>
      <span>JAAR<br>1</span>
      <span>NIVEAU<br>4</span>
    </div>
    <div class="knoppen">
      <a class="knop" href="#vakken">Mijn ervaring ↗</a>
      <a class="knop" href="https://www.curio.nl/mbo/studiekeuze/open-dagen?gad_source=1&gad_campaignid=6478295456&gbraid=0AAAAADMF4NyieFRWtFmMNskh-XkyTCcnZ&gclid=CjwKCAjwqonVBhA4EiwA9wYJ3e5eZ4KPaTgZRI0BBxyAmwpqgvYF0K8GAQsLmD5RkUg-gcRAxa9olBoCvKYQAvD_BwE" target="_blank">Open dagen ↗</a>
    </div>
  </div>

  <div class="intro">
    <h2>In het kort</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aperiam ducimus consectetur optio dolore, dolorum sint magni minima temporibus sit voluptates officiis unde ex accusantium odio natus nam ea maiores!</p>
  </div>

  <div class="vakken" id="vakken">

    <div class="vak geel">
      <span>Sfeer op de afdeling</span>
      <span>↗</span>
    </div>

    <div class="vak paars">
      <span>Wat vind ik van de opleiding</span>
      <span>↗</span>
    </div>

    <div class="vak oranje">
      <span>Rooster eerstejaars</span>
      <span>↗</span>
    </div>

    <div class="vak roze">
      <span>Groepswerk</span>
      <span>↗</span>
    </div>

    <div class="vak blauw">
      <span>Huiswerk</span>
      <span>↗</span>
    </div>

  </div>

  <p>Meer weten over de opleiding? Bezoek curio.nl</p>
  <p>Kom naar de open dag. Bekijk data</p>

  <footer>
    <?php echo date("Y"); ?> Curio Software Developer
  </footer>

</body>
</html>