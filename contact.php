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
    #contact-btn{ background-color: #aa9b80; }
  </style>
</head>

<body>
  <?php
    include('header.php')
  ?>

  <!--Main Content-->
  <div class="content">
    <p>
      The Cuillin Brewery is open from Monday-Saturday from 9am-5pm. If you would like to sample our range outwith these times, our ale can be purchased in the adjoining Seumas' Bar.
      If you have any questions, we'd love to hear from you:
    </p>
    <div class="contact_container">
      <form class="" action="index.php" method="post">

        <input type="text" id="fname" name="fullname" placeholder="Full name..">
        <input type="text" id="email" name="email" placeholder="Email address..">
        <input type="text" id="subject" name="subject" placeholder="Subject..">
        <textarea id="subject" name="subject" placeholder="Message.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
      </form>
      </div>
    </div>
  </div>
  <?php
    include('footer.php')
  ?>
</body>
</html>
