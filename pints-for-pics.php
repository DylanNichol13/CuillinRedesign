<html lang="en">
<head>
  <meta charset="utf-8">

  <title>#PINTS FOR PICS - Cuillin Brewery</title>
  <meta name="description" content="Redesign of Cuillin Brewery website">
  <meta name="author" content="Dylan Nichol">

  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/contentStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/slideshow.js"></script>
  <style>
    #pfp-btn{ background-color: #aa9b80; }
  </style>
</head>

<body>
  <?php
    include('header.php')
  ?>

  <!--Main Content-->
  <div class="content">
    <p>
      We love Ale & adore our magnificent Island. #PINTSFORPICS provides an opportunity for sharing, where you get to savour a beer and have the opportunity to WIN FREE BEER, while we get to enjoy your photo submissions from the Isle of Skye and beyond. Take a look below for information about how to take part:
    </p>
    <img src="images/pfp/img2.png" class="imgSingle"></img>
    <p>
      Get inspired by some of the images below:
    </p>
    <div class="slideshow">
      <img class="imgSlide" src="images/pfp/1.jpg">
      <img class="imgSlide" src="images/pfp/2.jpg">
      <img class="imgSlide" src="images/pfp/3.jpg">
      <img class="imgSlide" src="images/pfp/4.jpg">
      <img class="imgSlide" src="images/pfp/5.jpg">
      <img class="imgSlide" src="images/pfp/6.jpg">
      <img class="imgSlide" src="images/pfp/7.jpg">

      <button id="slide-back" class="slide-btn" onclick="plusDivs(-1)">&#10094;</button>
      <button id="slide-fwd" class="slide-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>
  </div>
  <?php
    include('footer.php')
  ?>
</body>
</html>
