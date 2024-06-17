<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reach you</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Set height to 100% for body and html to enable the background image to cover the whole page: */
body, html {
  height: 100%
}

.bgimg {
  background:linear-gradient(rgba(255, 255, 255, 0.642), rgba(231, 222, 222, 0.814)),
  url('images/kitchen-img-3.webp') no-repeat;
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: green;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

/* Position text in the top-left corner */
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
  text-align: center;
}

/* Position text in the bottom-left corner */
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

/* Position text in the middle */
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the <hr> element */
hr {
  margin: auto;
  width: 40%;
}
    </style>
</head>
<body>
<header class="header">

<nav class="navbar nav-1">
   <section class="flex">
      <a href="home.php" class="logo"><i class="fas fa-house"></i>ApnaGhar.com</a>
   </section>
</nav>
</header>

    <div class="bgimg">
        <div class="topleft">
          <h3>YOUR DETAILS HAVE BEEN SUCCESSFULLY SUBMITTED </h3>
        </div>
        <div class="middle">
          <h1>OUR AGENTS WILL REACH YOU SOON....</h1>
          <h1>Stay SAFE Stay HEALTHY</h1>
          <hr>
        </div>
        <div class="bottomleft">
          <p>ApnaGhar</p>
        </div>
      </div>
</body>
</html>
