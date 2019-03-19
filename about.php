<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PROCESS - Cuillin Brewery</title>
  <meta name="description" content="Redesign of Cuillin Brewery website">
  <meta name="author" content="Dylan Nichol">

  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/contentStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/slideshow.js"></script>
  <style>
    #about-btn{ background-color: #aa9b80; }
  </style>
</head>

<body>
  <?php
    include('header.php')
  ?>

  <!--Main Content-->
  <div class="content">
    <div class="slideshow">
      <img class="imgSlide" src="images/process/1.jpg">
      <img class="imgSlide" src="images/process/2.jpg">
      <img class="imgSlide" src="images/process/3.jpg">
      <img class="imgSlide" src="images/process/4.jpg">
      <img class="imgSlide" src="images/process/5.jpg">
      <img class="imgSlide" src="images/process/6.jpg">

      <button id="slide-back" class="slide-btn" onclick="plusDivs(-1)">&#10094;</button>
      <button id="slide-fwd" class="slide-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <p>
      The Ale is crafted by local brewers on the island. Every single drop is brewed on site at Sligachan, where both bottled and cask Ale is produced. Each beer has it's own distinctive flavour and character, inspired by the rugged landscape, wildlife and well known landmarks on the Isle of Skye.
    </p>
  </div>
  <?php
    include('footer.php')
  ?>
</body>
</html>
