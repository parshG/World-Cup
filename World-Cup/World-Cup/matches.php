<?php 
// checks connection to database and includes the connection and functions php files to the program to be able to access the database

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>World Cup 2022</title>
  <link href="style-matches.css" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
  <div class="topnav">
    <div class="topnav-right">
      <a class="active" href="matches.php">Matches</a>
      <a href="bracket.php">Bracket</a>
      <a href="logout.php">Logout</a>
    </div>

    <div class="topnav-left">
      <a href= "<?php echo $user_data['fav_team']; ?>.php">FIFA WORLD CUP 2022 QATAR</a>
    </div>
  </div>


  <div class="group">
    <b>
      <p>SELECT YOUR GROUP</p>
    </b>
  </div>

  <div class="groupselect">
    <a href="Group-A.php">GROUP A</a>
    <a href="Group-B.php">GROUP B</a>
    <a href="Group-C.php">GROUP C</a>
    <a href="Group-D.php">GROUP D</a>
    <a href="Group-E.php">GROUP E</a>
    <a href="Group-F.php">GROUP F</a>
    <a href="Group-G.php">GROUP G</a>
    <a href="Group-H.php">GROUP H</a>
  </div>

  </div>

  </div>
  <!-- flag slider -->

  <div class="container">
    <div class="slides">
      <div class="slide">
        <img src="https://wallpaperaccess.com/full/1939466.jpg" alt="" />
        <div class="slide-content">
          <h1></h1>
        </div>
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/senegal/flagge-senegal014_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://wallpaperaccess.com/full/3836773.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://wallpaperstock.net/bandera-de-ecuador-wallpapers_32945_1920x1200.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://eskipaper.com/images/england-flag-3.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://images5.alphacoders.com/331/thumb-1920-331740.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://wallup.net/wp-content/uploads/2017/11/17/273745-Wales-flag.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://cdn.wallpapersafari.com/19/82/ZEoScM.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://wallpaper.dog/large/20561609.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://wallup.net/wp-content/uploads/2017/11/17/273730-flag-Poland.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://cdn.wallpapersafari.com/23/68/pDtusW.jpg" alt="" />
      </div>
      <div class="slide">
        <img
          src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/saudi-arabien/flagge-saudi-arabien005_1920x1080.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://cdn.wallpapersafari.com/69/56/dpvL7U.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://cdn.wallpapersafari.com/29/17/ce5A2o.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/tunesien/flagge-tunesien015_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/danemark/flagge-danemark014_1920x1080.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/japan/flagge-japan005_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="http://wallpaperstock.net/spain-flag-wallpapers_32885_1600x1200.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/costarica/flagge-costarica018_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/kroatien/flagge-kroatien018_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/marokko/flagge-marokko002_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://images4.alphacoders.com/755/75534.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="http://eskipaper.com/images/canada-flag-wallpaper-2.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://images.hdqwalls.com/download/brazil-flag-qhd-1600x1200.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://i.pinimg.com/originals/f4/78/8c/f4788c7f56fab6ebdd87c61add585f4d.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://www.highwallpaper.com/wp-content/uploads/Cameroon-Flag-Wallpaper-1600x1080.jpg" alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/serbien/flagge-serbien018_1920x1080.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/portugal/flagge-portugal019_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/sudkorea/flagge-sudkorea018_1600x1200.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img src="https://www.wallpaper-gratis.eu/download.php?file=flaggen/uruguay/flagge-uruguay015_1920x1080.jpg"
          alt="" />
      </div>
      <div class="slide">
        <img
          src="https://besthqwallpapers.com/Uploads/9-8-2019/100545/thumb2-flag-of-ghana-concrete-texture-stone-background-ghana-flag-africa.jpg"
          alt="" />
      </div>

    </div>
    <div class="slide-controls">
      <button id="prev-btn">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button id="next-btn">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>










  <!-- flag slider -->

  <script src="script.js">
  </script>


  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
  </div>
</body>

</html>