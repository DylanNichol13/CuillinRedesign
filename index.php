<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Cuillin Brewery</title>
  <meta name="description" content="Redesign of Cuillin Brewery website">
  <meta name="author" content="Dylan Nichol">

  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/contentStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/slideshow.js"></script>
  <style>
    #index-btn{ background-color: #aa9b80; }
  </style>
</head>

<body>
  <?php
    include('header.php')
  ?>

  <!--Main Content-->
  <div class="content">
    <div class="slideshow">
      <img class="imgSlide" src="images/index/1.jpg">
      <img class="imgSlide" src="images/index/2.jpg">
      <img class="imgSlide" src="images/index/3.jpg">
      <img class="imgSlide" src="images/index/4.jpg">
      <img class="imgSlide" src="images/index/5.jpg">
      <img class="imgSlide" src="images/index/6.jpg">

      <button id="slide-back" class="slide-btn" onclick="plusDivs(-1)">&#10094;</button>
      <button id="slide-fwd" class="slide-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <p>
    A uniquely located Craft Brewery, nestling between formidable mountains and surrounded by wild moorland. The journey for the Cuillin Brewery Ale begins at the highest peaks of the Black Cuillin on the Isle of Skye. A powerful descent down the sheer rock slowly eases into a gentle meander towards Glen Sligachan, where the brewing process commences.
    </p>
  </div>
  <?php
    include('footer.php')
  ?>
</body>
</html>
