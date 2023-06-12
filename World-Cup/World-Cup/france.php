<?php 
// checks connection to database and includes the connection and functions php files to the program to be able to access the database

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>World Cup 2022</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <!--INTERNAL CSS-->
  <style>
    .stathead {
      font-family: 'Josefin Sans';
      font-size: 15px;
      grid-column: 1 / 3;
      grid-row: 2 / 3;
      padding-top: 30px
    }

    .games {
      font-family: 'Josefin Sans';
      font-size: 15px;
      grid-column: 4 / 5;
      grid-row: 1 / 2;
      padding-top: 50px;
      padding-right: 50px;
    }

    .games td {
      color: white;
      font-family: 'Josefin Sans';
      table-layout: fixed;
      width: 100px;
      padding-left: 40px;
    }

    .games th {
      width: 10px;
      float: left;
    }

    .games table {
      border-bottom: 1px solid #ddd;
      padding-top: 10px;
      padding-bottom: 8px;
      padding-left: 15px;
    }

    .grouptable {
      font-family: 'Josefin Sans';
      font-size: 15px;
      grid-column: 3 / 4;
      grid-row: 1 / 2;
      padding-left: 30px;
      padding-top: 50px;
    }

    .grouptable td {
      font-size: 15px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-right: 10px;
      padding-left: 10px;
      font-family: 'Josefin Sans';
      text-align: center;
      border-bottom: 1px solid #ddd;
      border-right: 1px solid #ddd;
    }
  </style>
</head>

<body>
  <!--NAV BAR-->
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

  <!--COUNTRY FLAG ICONS-->
  <div class="favoriteteam">
    <img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" width="100px">
  </div>

  <!--WELCOME STRING USING USER INPUT DATA-->
  <div class="welcome">
    <p>WELCOME, <?php echo $user_data['user_name']; ?> TO YOUR DASHBOARD</p>
  </div>

  <hr>

  <!--GRID TAG FOR ALIGNMENT-->
  <div class="grid">
    <br>
    <div class="videohighlights">
      <!--INLINE CSS-->
      <p style="color: white;">VIDEO HIGHLIGHTS</p>

      <!--YOUTUBE VIDEO EMBED-->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/jcgZf2PfIgw?controls=0&autoplay=1&mute=1"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="grouptable">
      <!--GROUP TABLE STANDINGS-->
      <table>
        <tr>
          <th></th>
          <td>Team</td>
          <td>Wins</td>
          <td>Draw</td>
          <td>Loss</td>
          <td>Points</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197560.png" width="40px"></th>
          <td>France</td>
          <td>2</td>
          <td>0</td>
          <td>1</td>
          <td>6</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/3909/3909435.png" width="40px"></th>
          <td>Australia</td>
          <td>2</td>
          <td>0</td>
          <td>1</td>
          <td>6</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197624.png" width="40px"></th>
          <td>Tunisia</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>4</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197565.png" width="40px"></th>
          <td>Denmark</td>
          <td>0</td>
          <td>1</td>
          <td>2</td>
          <td>1</td>
        </tr>
      </table>
      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="stathead">
            <div class="content">
              <img src="https://b.fssta.com/uploads/application/soccer/headshots/40670.vresize.350.350.medium.91.png"
                width=20% height=20%>
              <div class=" text">
                <h3><strong>KYLIAN MBAPPE - FRANCE</strong></h3>
                <p>10 Goals + Assists</p>
              </div>
            </div>
          </div>
        </div>

        <div class="mySlides fade">
          <div class="stathead">
            <div class="content">
              <img src="https://b.fssta.com/uploads/application/soccer/headshots/113.vresize.350.350.medium.45.png"
                width=20% height=20%>
              <div class=" text">
                <h3><strong>OLIVIER GIROUD</strong></h3>
                <p>6 Goals + Assists</p>
              </div>
            </div>
          </div>
        </div>

        <div class="mySlides fade">
          <div class="stathead">
            <div class="content">
              <img src="https://b.fssta.com/uploads/application/soccer/headshots/901.vresize.350.350.medium.49.png"
                width=20% height=20%>
              <div class=" text">
                <h3><strong>ANTOINE GRIEZMANN</strong></h3>
                <p>4 Goals + Assists</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>


    <!--TABLE SHOWING GAME SCORES-->
    <div class="games">
      <table>
        <tr>
          <!--COUNTRY FLAG ICONS-->
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197560.png" width="40px"></th>
          <td><b>France</b></td>
          <td>4</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/3909/3909435.png" width="40px"></th>
          <td><b>Australia</b></td>
          <td>1</td>
        </tr>
      </table>

      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197560.png" width="40px"></th>
          <td><b>France</b></td>
          <td>2</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197565.png" width="40px"></th>
          <td><b>Denmark</b></td>
          <td>1</td>
        </tr>
      </table>

      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197624.png" width="40px"></th>
          <td><b>Tunisia</b></td>
          <td>1</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197560.png" width="40px"></th>
          <td><b>France</b></td>
          <td>0</td>
        </tr>
      </table>
    </div>

  </div>
  <!-- flag slider -->

  <!--INTERNAL JAVA SCRIPT-->
  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; //iterates through a for loop to switch between images
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 6000); // Change image every 6 seconds
    }
  </script>


  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>