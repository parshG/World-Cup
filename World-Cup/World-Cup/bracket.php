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
  <link href="stylea.css" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
  <!-- NAV BAR -->
  <div class="topnav">
    <div class="topnav-right">
      <a class="active" href="matches.php">Matches</a>
      <a href="bracket.php">Bracket</a>
      <a href="logout.php">Logout</a>
    </div>

    <!-- ICON -->
    <div class="topnav-left">
      <a href= "<?php echo $user_data['fav_team']; ?>.php">FIFA WORLD CUP 2022 QATAR</a>
    </div>
  </div>

  <!-- HEADER TITLES -->
  <div class="tournament-container">
    <div class="tournament-headers">
      <h3>Round of 16</h3>
      <h3>Quarter-Finals</h3>
      <h3>Semi-Finals</h3>
      <h3>Final</h3>
      <h3>Winner</h3>
    </div>

    <!-- INDIVIUDAL GAMES USING LIST -->
    <div class="tournament-brackets">
      <ul class="bracket bracket-1">
        <li class="team-item">NET <time>3-1</time> USA</li>
        <li class="team-item">ARG <time>2-1</time> AUS</li>
        <li class="team-item">JAP <time>1(1) - 1(3)</time> CRO</li>
        <li class="team-item">BRZ <time>4-1</time> SOK</li>
        <li class="team-item">FRA <time>3-1</time> POL</li>
        <li class="team-item">ENG <time>3-0</time> SEN</li>
        <li class="team-item">MOR <time>0(3) - 0(0)</time> SPA</li>
        <li class="team-item">POR <time>6-1</time> SWZ</li>
      </ul>

      <!-- QUARTEFINAL GAMES USING LIST -->
      <ul class="bracket bracket-2">
        <li class="team-item">NET <time>2(3) - 2(4)</time> ARG</li>
        <li class="team-item">CRO <time>1(4) - 1(2)</time> BRZ</li>
        <li class="team-item">ENG <time>1-2</time> FRA</li>
        <li class="team-item">MOR <time>1-0</time> POR</li>
      </ul>

      <!-- SEMIFINALS GAMES USING LIST -->
      <ul class="bracket bracket-3">
        <li class="team-item">ARG <time>3-0</time> CRO</li>
        <li class="team-item">FRA <time>2-0</time> MOR</li>
      </ul>

      <!-- FINAL USING LIST -->
      <ul class="bracket bracket-4">
        <li class="team-item">ARG <time>3(4) - 3(2)</time> FRA</li>
      </ul>

      <ul class="bracket bracket-5">
        <li class="team-item">ARGENTINA</li>
      </ul>
    </div>
  </div>

</body>

</html>