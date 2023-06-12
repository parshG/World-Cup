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
  <!-- LINKED CSS FILE -->
  <link href="styleb.css" rel="stylesheet" type="text/css" />
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

    <div class="topnav-left">
      <a href= "<?php echo $user_data['fav_team']; ?>.php">FIFA WORLD CUP 2022 QATAR</a>
    </div>
  </div>

  <!-- TITLE -->
  <div class="group">
    <b>
      <p>GROUP C</p>
    </b>
  </div>

   <!-- GRID TAG TO ALIGN ELEMENTS -->
  <div class="grid">

    <!-- GAMES TABLE WITH IMAGE ICONS -->
      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197573.png" width="40px"></th>
          <td><b>Argentina</b></td>
          <td>1</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5111/5111777.png" width="40px"></th>
          <td><b>Saudi Arabia</b></td>
          <td>2</td>
        </tr>
      </table>


      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5372/5372848.png" width="40px"></th>
          <td><b>Mexico</b></td>
          <td>0</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197529.png" width="40px"></th>
          <td><b>Poland</b></td>
          <td>0</td>
        </tr>
      </table>


      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197529.png" width="40px"></th>
          <td><b>Poland</b></td>
          <td>2</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5111/5111777.png" width="40px"></th>
          <td><b>Saudi Arabia</b></td>
          <td>0</td>
        </tr>
      </table>


      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197573.png" width="40px"></th>
          <td><b>Argentina</b></td>
          <td>2</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5372/5372848.png" width="40px"></th>
          <td><b>Mexico</b></td>
          <td>0</td>
        </tr>
      </table>


      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197529.png" width="40px"></th>
          <td><b>Poland</b></td>
          <td>0</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197573.png" width="40px"></th>
          <td><b>Argentina</b></td>
          <td>2</td>
        </tr>
      </table>

      <table>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5111/5111777.png" width="40px"></th>
          <div class="country">
            <td><b>Saudi Arabia</b></td>
          </div>
          <td>1</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5372/5372848.png" width="40px"></th>
          <td><b>Mexico</b></td>
          <td>2</td>
        </tr>
      </table>
    </div>

    <div class="pstats">
      <!-- PLAYER STATS WITH SIDE BY SIDE IMG ICON -->
      <div class="stathead">
        <div class="content">
          <img src="https://i.goalzz.com/?i=ashraf-zamrani%2Flionelmessi.gif" width=15% height=15%>
          <div class="text">
            <h3><strong>LIONEL MESSI - Argentina</strong></h3>
            <p>4 Goals + Assists</p>
          </div>
        </div>
      </div>

      <div class="stathead">
        <div class="content">
          <img src="https://cdn.fifacm.com/content/media/imgs/fifa23/players/p20801.png?v=22" width=15% height=15%>
          <div class="text">
            <h3><strong>CRISTIANO RONALDO - Portugal</strong></h3>
            <p>3 Goals + Assists</p>
          </div>
        </div>
      </div>

      <div class="stathead">
        <div class="content">
          <img src="https://sortitoutsi.net/uploads/megapacks/cutoutfaces/originals/10.10/85139014.png" width=15%
            height=15%>
          <div class="text">
            <h3><strong>KYLIAN MBAPPÉ - France</strong></h3>
            <p>5 Goals + Assists</p>
          </div>
        </div>
      </div>

      <div class="stathead">
        <div class="content">
          <img src="https://theefaofficial.com/wp-content/uploads/2019/04/Neymar.png" width=15% height=15%>
          <div class="text">
            <h3><strong>NEYMAR JR - Brazil</strong></h3>
            <p>2 Goals + Assists</p>
          </div>
        </div>
      </div>

      <div class="stathead">
        <div class="content">
          <img src="https://www.futwiz.com/assets/img/fifa20/careerfaces/227796.png" width=15% height=15%>
          <div class=" text">
            <h3><strong>CHRISTIAN PULISIC - USA</strong></h3>
            <p>3 Goals + Assists</p>
          </div>
        </div>
      </div>

      <div class="stathead">
        <div class="content">
          <img src="https://www.futwiz.com/assets/img/fifa20/careerfaces/202126.png" width=15% height=15%>
          <div class="text">
            <h3><strong>HARRY KANE - England</strong></h3>
            <p>1 Goals + Assists</p>
          </div>
        </div>
      </div>
    </div>


    <div class="grouptable">
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
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197573.png" width="40px"></th>
          <td>Argentina</td>
          <td>2</td>
          <td>0</td>
          <td>1</td>
          <td>6</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/197/197529.png" width="40px"></th>
          <td>Poland</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>4</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5372/5372848.png" width="40px"></th>
          <td>Mexico</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>4</td>
        </tr>
        <tr>
          <th><img src="https://cdn-icons-png.flaticon.com/128/5111/5111777.png" width="40px"></th>
          <td>Saudi Arabia</td>
          <td>1</td>
          <td>0</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </table>
    </div>







    <!-- flag slider -->

    <script src="script.js">
    </script>


    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
  </div>
</body>

</html>