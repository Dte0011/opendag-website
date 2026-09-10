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
      <a class="knop" href="https://curio.nl" target="_blank">Open dagen ↗</a>
    </div>
  </div>

  <div class="intro">
    <h2>In het kort</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aperiam ducimus consectetur optio dolore, dolorum sint magni minima temporibus sit voluptates officiis unde ex accusantium odio natus nam ea maiores!</p>
  </div>

  <h2>Sfeer op de afdeling</h2>
  <h2>Wat vind ik van de opleiding</h2>
  <h2>Rooster eerstejaars</h2>
  <h2>Groepswerk</h2>
  <h2>Huiswerk</h2>

  <p>Meer weten over de opleiding? Bezoek curio.nl</p>
  <p>Kom naar de open dag. Bekijk data</p>

  <footer>
    <?php echo date("Y"); ?> Curio Software Developer
  </footer>

</body>
</html>