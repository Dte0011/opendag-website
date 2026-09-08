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

    .menu {
      background-color: #f9c800;
      color: #0b3d2e;
      padding: 10px 15px;
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
  </style>
</head>
<body>

  <div class="navbar">
    <div class="left">
      <div class="menu">☰</div>
      <div class="logo">curio</div>
    </div>
    <div class="nav-links">
      <a href="#">MBO</a>
      <a href="#">VMBO</a>
      <a href="#">CONTACT</a>
    </div>
  </div>

  <h1>Software Developer</h1>
  <p>Home Open dag Software Developer</p>
  <p>GEMAAKT DOOR: Timo van Eck</p>
  <p>JAAR: 2</p>
  <p>NIVEAU: 4</p>
  <p>Mijn ervaring</p>
  <p>Open dagen</p>

  <h2>In het kort</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aperiam ducimus consectetur optio dolore, dolorum sint magni minima temporibus sit voluptates officiis unde ex accusantium odio natus nam ea maiores!</p>

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