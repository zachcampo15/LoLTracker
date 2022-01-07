<!-- ZACHARY CAMPO -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    
    <!-- MAKING A NAV BAR -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="homescreen.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            <li class="nav-item"> 
              <a class="nav-link" href="championMastery.php">Champion Mastery</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="championSearch.php">Champion Search</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="matchHistory.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Match History</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="matchHistory.php">Match 1</a>
                <a class="dropdown-item" href="matchHistory2.php">Match 2</a>
                <a class="dropdown-item" href="matchHistory3.php">Match 3</a>
                <a class="dropdown-item" href="matchHistory4.php">Match 4</a>
                <a class="dropdown-item" href="matchHistory5.php">Match 5</a>
                <a class="dropdown-item" href="matchHistory6.php">Match 6</a>
                <a class="dropdown-item" href="matchHistory7.php">Match 7</a>
                <a class="dropdown-item" href="matchHistory8.php">Match 8</a>
                <a class="dropdown-item" href="matchHistory9.php">Match 9</a>
                <a class="dropdown-item" href="matchHistory10.php">Match 10</a>
             </div>
            </li>     

                                 
            
          </ul>
        </div>  
    </nav>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> if you downloaded bootstrap to your computer -->

    <!-- required scripts for IE --> 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
          
    <title>Zach's League Of Legends Tracker</title>
        
  </head>

  <body>
    <h1>Zach's League of Legends Tracker</h1>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> if you downloaded bootstrap to your computer -->

    <?php
        $resultData = $_SESSION['resultData'];
        #print_r($resultData);

        $size = 0;
        $summonerName = $_SESSION['summonerName'];
        ?>
    <h1><?php echo "$summonerName's Match History"; ?></h1>


    <?php
if(($resultData['MatchHistories10']['queueId'] == '400') || ($resultData['MatchHistories10']['queueId'] == '100') || ($resultData['MatchHistories10']['queueId'] == '420') || ($resultData['MatchHistories10']['queueId'] == '430') || ($resultData['MatchHistories10']['queueId'] == '440') || ($resultData['MatchHistories10']['queueId'] == '450') || ($resultData['MatchHistories10']['queueId'] == '830') || ($resultData['MatchHistories10']['queueId'] == '840') || ($resultData['MatchHistories10']['queueId'] == '850')){
    
    ?>
    <br>
    <h2>10th MOST RECENT MATCH HISTORY</h2>
    <br>

    
    <?php
    $gameDuration = $resultData['MatchHistories10']['gameDuration'];
    $mins = $gameDuration/60;
    $mins = (int) $mins;
    $seconds = $gameDuration%60;

    $Team1Kills = 0;
    $Team1Deaths = 0;
    $Team1Assists = 0;

    for($r = 0; $r<5;$r++){
        $kills = $resultData['MatchHistories10']['participants'][$r]['stats']['kills'];
        $assists = $resultData['MatchHistories10']['participants'][$r]['stats']['assists'];
        $deaths = $resultData['MatchHistories10']['participants'][$r]['stats']['deaths'];

        $Team1Kills = $Team1Kills + $kills;
        $Team1Deaths = $Team1Deaths + $deaths;
        $Team1Assists = $Team1Assists + $assists;
    }
    
    ?>
    <h3> Game Duration: <?php echo("$mins m $seconds s")?> </h3>
    <?php
    $participants = array();
    for($x=0; $x<10; $x++){
        #print_r($resultData['MatchHistories10']['participantIdentities'][$x]);
        $participants[$x] = $resultData['MatchHistories10']['participantIdentities'][$x]['player']['summonerName'];
        ?>
       
        <?php
    }

    #SECTION 1 ---- TEAM 1 ---- INDEX 0-4
    $win = $resultData['MatchHistories10']['teams'][0]['win'];
    if($win == "Fail"){
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background:#F08080;">
        <?php
    }
    if($win == "Win"){
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background:#87CEFA;">
    <?php
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>TEAM STATS:</h3>
            </div>
            <div class="col-md-6">
                <h3><?php echo("K/D/A: $Team1Kills/$Team1Deaths/$Team1Assists"); ?></h3>
            </div>
</div>
</div>
    <?php
    $firstDragon = $resultData['MatchHistories10']['teams'][0]['firstDragon'];
    
    $baronKills = $resultData['MatchHistories10']['teams'][0]['baronKills'];
    $riftHeraldKills = $resultData['MatchHistories10']['teams'][0]['riftHeraldKills'];
    $firstBlood = $resultData['MatchHistories10']['teams'][0]['firstBlood'];
    $firstTower = $resultData['MatchHistories10']['teams'][0]['firstTower'];
    $inhibitorKills = $resultData['MatchHistories10']['teams'][0]['inhibitorKills'];
    $towerKills = $resultData['MatchHistories10']['teams'][0]['towerKills'];
    $dragonKills = $resultData['MatchHistories10']['teams'][0]['dragonKills'];

    


    if($firstDragon == NULL){
        $firstDragonAnswer = "NO";
    }
    if($firstDragon == '1'){
        $firstDragonAnswer = "YES";
    }
    if($win == "Fail"){
        $winAnswer = "NO";
    }
    if($win == "Win"){
        $winAnswer = "YES";
    }
    if($firstBlood == NULL){
        $firstBloodAnswer = "NO";
    }
    if($firstBlood == '1'){
        $firstBloodAnswer = "YES";
    }
    if($firstTower == NULL){
        $firstTowerAnswer = "NO";
    }
    if($firstTower == '1'){
        $firstTowerAnswer = "YES";
    }
    echo("Win: $winAnswer")
    ?>
    <div class="boxes">
        <div class="row">
            <div class="col-md-4">
    <br>
    <?php
    echo("First Blood: $firstBloodAnswer");
    ?>
    <br>
    <?php
    echo("First Tower: $firstTowerAnswer");
    ?>
    <br>
        </div>
        <div class="col-md-4">
    <?php
    echo("First Dragon: $firstDragonAnswer");
    ?>
    <br>
    <?php
    echo("Baron Kills: $baronKills");
    ?>
    <br>
    <?php
    echo("Rift Herald Kills: $riftHeraldKills")
    ?>
    </div>
    <div class="col-md-4">
    <?php
    echo("Dragon Kills: $dragonKills");
    ?>
    <br>
    <?php
    echo("Tower Kills: $towerKills");
    ?>
    <br>
    <?php
    echo("Inhibitor Kills: $inhibitorKills");
    ?>
</div>
</div>
</div>
    <br>
    <br>
    <?php

    for($y=0; $y<5; $y++){
        ?>
        <h4><?php echo($participants[$y]); ?> </h4>

        <?php
        $champLevels = $resultData['MatchHistories10']['participants'][$y]['stats']['champLevel'];
        $championHelper = $resultData['MatchHistories10']['participants'][$y]['championId'];
        if($championHelper == 266){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Aatrox.png" alt="Aatrox" style="width:50px;height:50px">
            <?php
            echo("Aatrox");
            ?>
            <br>
        <?php
        }
        if($championHelper == 103){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ahri.png" alt="Ahri" style="width:50px;height:50px">
            <?php
            echo("Ahri");
            ?>
            <br>
        <?php
        }
        if($championHelper == 84){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Akali.png" alt="Akali" style="width:50px;height:50px">
            <?php
            echo("Akali");
            ?>
            <br>
        <?php
        }
        if($championHelper == 12){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Alistar.png" alt="Alistar" style="width:50px;height:50px">
            <?php
            echo("Alistar");
            ?>
            <br>
        <?php
          }
        if($championHelper == 32){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Amumu.png" alt="Amumu" style="width:50px;height:50px">
            <?php
            echo("Amumu");
            ?>
            <br>
        <?php
        }
        if($championHelper == 34){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Anivia.png" alt="Anivia" style="width:50px;height:50px">
            <?php
            echo("Anivia");
            ?>
            <br>
        <?php
        }
        if($championHelper == 1){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Annie.png" alt="Annie" style="width:50px;height:50px">
            <?php
            echo("Annie");
            ?>
            <br>
        <?php
        }
        if($championHelper == 22){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ashe.png" alt="Ashe" style="width:50px;height:50px">
            <?php
            echo("Ashe");
            ?>
            <br>
        <?php
        }
        if($championHelper == 136){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/AurelionSol.png" alt="Aurelion Sol" style="width:50px;height:50px">
            <?php
            echo("Aurelion Sol");
            ?>
            <br>
        <?php
        }
        if($championHelper == 268){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Azir.png" alt="Azir" style="width:50px;height:50px">
            <?php
            echo("Azir");
            ?>
            <br>
        <?php
        }
        if($championHelper == 432){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Bard.png" alt="Bard" style="width:50px;height:50px">
            <?php
            echo("Bard");
            ?>
            <br>
        <?php
        }
        if($championHelper == 53){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Blitzcrank.png" alt="Blitzcrank" style="width:50px;height:50px">
            <?php
            echo("Blitzcrank");
            ?>
            <br>
        <?php
        }
        if($championHelper == 63){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Brand.png" alt="Brand" style="width:50px;height:50px">
            <?php
            echo("Brand");
            ?>
            <br>
        <?php
        }
        if($championHelper == 201){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Braum.png" alt="Braum" style="width:50px;height:50px">
            <?php
            echo("Braum");
            ?>
            <br>
        <?php
        }
        if($championHelper == 51){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Caitlyn.png" alt="Caitlyn" style="width:50px;height:50px">
            <?php
            echo("Caitlyn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 164){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Camille.png" alt="Camille" style="width:50px;height:50px">
            <?php
            echo("Camille");
            ?>
            <br>
        <?php
        }
        if($championHelper == 69){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Cassiopeia.png" alt="Cassiopeia" style="width:50px;height:50px">
            <?php
            echo("Cassiopeia");
            ?>
            <br>
        <?php
        }
        if($championHelper == 31){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Chogath.png" alt="Cho'Gath" style="width:50px;height:50px">
            <?php
            echo("Cho'Gath");
            ?>
            <br>
        <?php
        }
        if($championHelper == 42){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Corki.png" alt="Corki" style="width:50px;height:50px">
            <?php
            echo("Corki");
            ?>
            <br>
        <?php
        }
        if($championHelper == 122){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Darius.png" alt="Darius" style="width:50px;height:50px">
            <?php
            echo("Darius");
            ?>
            <br>
        <?php
        }
        if($championHelper == 131){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Diana.png" alt="Diana" style="width:50px;height:50px">
            <?php
            echo("Diana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 119){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Draven.png" alt="Draven" style="width:50px;height:50px">
            <?php
            echo("Draven");
            ?>
            <br>
        <?php
        }
      if($championHelper == 36){
        echo("Level: $champLevels");
        ?>
        <img src="img/champion/DrMundo.png" alt="Dr. Mundo" style="width:50px;height:50px">
        <?php
        echo("Dr. Mundo");
        ?>
        <br>
    <?php
      }
        if($championHelper == 245){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ekko.png" alt="Ekko" style="width:50px;height:50px">
            <?php
            echo("Ekko");
            ?>
            <br>
        <?php
        }
        if($championHelper == 60){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Elise.png" alt="Elise" style="width:50px;height:50px">
            <?php
            echo("Elise");
            ?>
            <br>
        <?php
        }
        if($championHelper == 28){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Evelynn.png" alt="Evelynn" style="width:50px;height:50px">
            <?php
            echo("Evelynn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 81){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ezreal.png" alt="Ezreal" style="width:50px;height:50px">
            <?php
            echo("Ezreal");
            ?>
            <br>
        <?php
        }
        if($championHelper == 9){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/FiddleSticks.png" alt="Fiddlesticks" style="width:50px;height:50px">
            <?php
            echo("Fiddlesticks");
            ?>
            <br>
        <?php
        }
        if($championHelper == 114){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Fiora.png" alt="Fiora" style="width:50px;height:50px">
            <?php
            echo("Fiora");
            ?>
            <br>
        <?php
        }
        if($championHelper == 105){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Fizz.png" alt="Fizz" style="width:50px;height:50px">
            <?php
            echo("Fizz");
            ?>
            <br>
        <?php
        }
        if($championHelper == 3){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Galio.png" alt="Galio" style="width:50px;height:50px">
            <?php
            echo("Galio");
            ?>
            <br>
        <?php
        }
        if($championHelper == 41){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Gangplank.png" alt="Gangplank" style="width:50px;height:50px">
            <?php
            echo("Gangplank");
            ?>
            <br>
        <?php
        }
        if($championHelper == 86){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Garen.png" alt="Garen" style="width:50px;height:50px">
            <?php
            echo("Garen");
            ?>
            <br>
        <?php
        }
        if($championHelper == 150){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Gnar.png" alt="Gnar" style="width:50px;height:50px">
            <?php
            echo("Gnar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 79){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Gragas.png" alt="Gragas" style="width:50px;height:50px">
            <?php
            echo("Gragas");
            ?>
            <br>
        <?php
        }
        if($championHelper == 104){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Graves.png" alt="Graves" style="width:50px;height:50px">
            <?php
            echo("Graves");
            ?>
            <br>
        <?php
        }
        if($championHelper == 120){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Hecarim.png" alt="Hecarim" style="width:50px;height:50px">
            <?php
            echo("Hecarim");
            ?>
            <br>
        <?php
        }
        if($championHelper == 74){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Heimerdinger.png" alt="Heimerdinger" style="width:50px;height:50px">
            <?php
            echo("Heimerdinger");
            ?>
            <br>
        <?php
        }
        if($championHelper == 420){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Illaoi.png" alt="Illaoi" style="width:50px;height:50px">
            <?php
            echo("Illaoi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 39){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Irelia.png" alt="Irelia" style="width:50px;height:50px">
            <?php
            echo("Irelia");
            ?>
            <br>
        <?php
        }
        if($championHelper == 427){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ivern.png" alt="Ivern" style="width:50px;height:50px">
            <?php
            echo("Ivern");
            ?>
            <br>
        <?php
        }
        if($championHelper == 40){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Janna.png" alt="Janna" style="width:50px;height:50px">
            <?php
            echo("Janna");
            ?>
            <br>
        <?php
        }
        if($championHelper == 59){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/JarvanIV.png" alt="Jarvan IV" style="width:50px;height:50px">
            <?php
            echo("Jarvan IV");
            ?>
            <br>
        <?php
        }
        if($championHelper == 24){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jax.png" alt="Jax" style="width:50px;height:50px">
            <?php
            echo("Jax");
            ?>
            <br>
        <?php
        }
        if($championHelper == 126){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jayce.png" alt="Jayce" style="width:50px;height:50px">
            <?php
            echo("Jayce");
            ?>
            <br>
        <?php
        }
        if($championHelper == 202){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jhin.png" alt="Jhin" style="width:50px;height:50px">
            <?php
            echo("Jhin");
            ?>
            <br>
        <?php
        }
        if($championHelper == 222){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jinx.png" alt="Jinx" style="width:50px;height:50px">
            <?php
            echo("Jinx");
            ?>
            <br>
        <?php
        }
        if($championHelper == 429){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kalista.png" alt="Kalista" style="width:50px;height:50px">
            <?php
            echo("Kalista");
            ?>
            <br>
        <?php
        }
        if($championHelper == 43){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Karma.png" alt="Karma" style="width:50px;height:50px">
            <?php
            echo("Karma");
            ?>
            <br>
        <?php
        }
        if($championHelper == 30){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Karthus.png" alt="Karthus" style="width:50px;height:50px">
            <?php
            echo("Karthus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 38){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kassadin.png" alt="Kassadin" style="width:50px;height:50px">
            <?php
            echo("Kassadin");
            ?>
            <br>
        <?php
        }
        if($championHelper == 55){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Katarina.png" alt="Katarina" style="width:50px;height:50px">
            <?php
            echo("Katarina");
            ?>
            <br>
        <?php
        }
        if($championHelper == 10){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kayle.png" alt="Kayle" style="width:50px;height:50px">
            <?php
            echo("Kayle");
            ?>
            <br>
        <?php
        }
        if($championHelper == 85){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kennen.png" alt="Kennen" style="width:50px;height:50px">
            <?php
            echo("Kennen");
            ?>
            <br>
        <?php
        }
        if($championHelper == 121){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Khazix.png" alt="Kha'Zix" style="width:50px;height:50px">
            <?php
            echo("Kha'Zix");
            ?>
            <br>
        <?php
        }
        if($championHelper == 203){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kindred.png" alt="Kindred" style="width:50px;height:50px">
            <?php
            echo("Kindred");
            ?>
            <br>
        <?php
        }
        if($championHelper == 240){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kled.png" alt="Kled" style="width:50px;height:50px">
            <?php
            echo("Kled");
            ?>
            <br>
        <?php
        }
        if($championHelper == 96){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/KogMaw.png" alt="Kog'Maw" style="width:50px;height:50px">
            <?php
            echo("Kog'Maw");
            ?>
            <br>
        <?php
        }
        if($championHelper == 7){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Leblanc.png" alt="LeBlanc" style="width:50px;height:50px">
            <?php
            echo("LeBlanc");
            ?>
            <br>
        <?php
        }
        if($championHelper == 64){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/LeeSin.png" alt="Lee Sin" style="width:50px;height:50px">
            <?php
            echo("Lee Sin");
            ?>
            <br>
        <?php
        }
        if($championHelper == 89){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Leona.png" alt="Leona" style="width:50px;height:50px">
            <?php
            echo("Leona");
            ?>
            <br>
        <?php
        }
        if($championHelper == 127){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lissandra.png" alt="Lissandra" style="width:50px;height:50px">
            <?php
            echo("Lissandra");
            ?>
            <br>
        <?php
        }
        if($championHelper == 236){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lucian.png" alt="Lucian" style="width:50px;height:50px">
            <?php
            echo("Lucian");
            ?>
            <br>
        <?php
        }
        if($championHelper == 117){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lulu.png" alt="Lulu" style="width:50px;height:50px">
            <?php
            echo("Lulu");
            ?>
            <br>
        <?php
        }
        if($championHelper == 99){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lux.png" alt="Lux" style="width:50px;height:50px">
            <?php
            echo("Lux");
            ?>
            <br>
        <?php
        }
        if($championHelper == 54){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Malphite.png" alt="Malphite" style="width:50px;height:50px">
            <?php
            echo("Malphite");
            ?>
            <br>
        <?php
        }
        if($championHelper == 90){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Malzahar.png" alt="Malzahar" style="width:50px;height:50px">
            <?php
            echo("Malzahar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 57){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Maokai.png" alt="Maokai" style="width:50px;height:50px">
            <?php
            echo("Maokai");
            ?>
            <br>
        <?php
        }
        if($championHelper == 11){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/MasterYi.png" alt="Master Yi" style="width:50px;height:50px">
            <?php
            echo("Master Yi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 21){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/MissFortune.png" alt="Miss Fortune" style="width:50px;height:50px">
            <?php
            echo("Miss Fortune");
            ?>
            <br>
        <?php
        }
        if($championHelper == 62){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/MonkeyKing.png" alt="Wukong" style="width:50px;height:50px">
            <?php
            echo("Wukong");
            ?>
            <br>
        <?php
        }
        if($championHelper == 82){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Mordekaiser.png" alt="Mordekaiser" style="width:50px;height:50px">
            <?php
            echo("Mordekaiser");
            ?>
            <br>
        <?php
        }
        if($championHelper == 25){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Morgana.png" alt="Morgana" style="width:50px;height:50px">
            <?php
            echo("Morgana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 267){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nami.png" alt="Nami" style="width:50px;height:50px">
            <?php
            echo("Nami");
            ?>
            <br>
        <?php
        }
        if($championHelper == 75){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nasus.png" alt="Nasus" style="width:50px;height:50px">
            <?php
            echo("Nasus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 111){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nautilus.png" alt="Nautilus" style="width:50px;height:50px">
            <?php
            echo("Nautilus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 76){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nidalee.png" alt="Nidalee" style="width:50px;height:50px">
            <?php
            echo("Nidalee");
            ?>
            <br>
        <?php
        }
        if($championHelper == 56){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nocturne.png" alt="Nocturne" style="width:50px;height:50px">
            <?php
            echo("Nocturne");
            ?>
            <br>
        <?php
        }
        if($championHelper == 20){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nunu.png" alt="Nunu" style="width:50px;height:50px">
            <?php
            echo("Nunu & Willump");
            ?>
            <br>
        <?php
        }
        if($championHelper == 2){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Olaf.png" alt="Olaf" style="width:50px;height:50px">
            <?php
            echo("Olaf");
            ?>
            <br>
        <?php
        }
        if($championHelper == 61){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Orianna.png" alt="Orianna" style="width:50px;height:50px">
            <?php
            echo("Orianna");
            ?>
            <br>
        <?php
        }
        if($championHelper == 80){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Pantheon.png" alt="Pantheon" style="width:50px;height:50px">
            <?php
            echo("Pantheon");
            ?>
            <br>
        <?php
        }
        if($championHelper == 78){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Poppy.png" alt="Poppy" style="width:50px;height:50px">
            <?php
            echo("Poppy");
            ?>
            <br>
        <?php
        }
        if($championHelper == 133){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Quinn.png" alt="Quinn" style="width:50px;height:50px">
            <?php
            echo("Quinn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 33){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rammus.png" alt="Rammus" style="width:50px;height:50px">
            <?php
            echo("Rammus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 421){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/RekSai.png" alt="Rek'Sai" style="width:50px;height:50px">
            <?php
            echo("Rek'Sai");
            ?>
            <br>
        <?php
        }
        if($championHelper == 58){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Renekton.png" alt="Renekton" style="width:50px;height:50px">
            <?php
            echo("Renekton");
            ?>
            <br>
        <?php
        }
        if($championHelper == 107){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rengar.png" alt="Rengar" style="width:50px;height:50px">
            <?php
            echo("Rengar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 92){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Riven.png" alt="Riven" style="width:50px;height:50px">
            <?php
            echo("Riven");
            ?>
            <br>
        <?php
        }
        if($championHelper == 68){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rumble.png" alt="Rumble" style="width:50px;height:50px">
            <?php
            echo("Rumble");
            ?>
            <br>
        <?php
        }
        if($championHelper == 13){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ryze.png" alt="Ryze" style="width:50px;height:50px">
            <?php
            echo("Ryze");
            ?>
            <br>
        <?php
        }
        if($championHelper == 113){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sejuani.png" alt="Sejuani" style="width:50px;height:50px">
            <?php
            echo("Sejuani");
            ?>
            <br>
        <?php
        }
        if($championHelper == 35){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Shaco.png" alt="Shaco" style="width:50px;height:50px">
            <?php
            echo("Shaco");
            ?>
            <br>
        <?php
        }
        if($championHelper == 98){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Shen.png" alt="Shen" style="width:50px;height:50px">
            <?php
            echo("Shen");
            ?>
            <br>
        <?php
        }
        if($championHelper == 102){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Shyvana.png" alt="Shyvana" style="width:50px;height:50px">
            <?php
            echo("Shyvana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 27){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Singed.png" alt="Singed" style="width:50px;height:50px">
            <?php
            echo("Singed");
            ?>
            <br>
        <?php
        }
        if($championHelper == 14){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sion.png" alt="Sion" style="width:50px;height:50px">
            <?php
            echo("Sion");
            ?>
            <br>
        <?php
        }
        if($championHelper == 15){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sivir.png" alt="Sivir" style="width:50px;height:50px">
            <?php
            echo("Sivir");
            ?>
            <br>
        <?php
        }
        if($championHelper == 72){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Skarner.png" alt="Skarner" style="width:50px;height:50px">
            <?php
            echo("Skarner");
            ?>
            <br>
        <?php
        }
        if($championHelper == 37){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sona.png" alt="Sona" style="width:50px;height:50px">
            <?php
            echo("Sona");
            ?>
            <br>
        <?php
        }
        if($championHelper == 16){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Soraka.png" alt="Soraka" style="width:50px;height:50px">
            <?php
            echo("Soraka");
            ?>
            <br>
        <?php
        }
        if($championHelper == 50){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Swain.png" alt="Swain" style="width:50px;height:50px">
            <?php
            echo("Swain");
            ?>
            <br>
        <?php
        }
        if($championHelper == 134){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Syndra.png" alt="Syndra" style="width:50px;height:50px">
            <?php
            echo("Syndra");
            ?>
            <br>
        <?php
        }
        if($championHelper == 223){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/TahmKench.png" alt="Tahm Kench" style="width:50px;height:50px">
            <?php
            echo("Tahm Kench");
            ?>
            <br>
        <?php
        }
        if($championHelper == 163){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Taliyah.png" alt="Taliyah" style="width:50px;height:50px">
            <?php
            echo("Taliyah");
            ?>
            <br>
        <?php
        }
        if($championHelper == 91){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Talon.png" alt="Talon" style="width:50px;height:50px">
            <?php
            echo("Talon");
            ?>
            <br>
        <?php
        }
        if($championHelper == 44){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Taric.png" alt="Taric" style="width:50px;height:50px">
            <?php
            echo("Taric");
            ?>
            <br>
        <?php
        }
        if($championHelper == 17){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Teemo.png" alt="Teemo" style="width:50px;height:50px">
            <?php
            echo("Teemo");
            ?>
            <br>
        <?php
        }
        if($championHelper == 412){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Thresh.png" alt="Thresh" style="width:50px;height:50px">
            <?php
            echo("Thresh");
            ?>
            <br>
        <?php
        }
        if($championHelper == 18){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Tristana.png" alt="Tristana" style="width:50px;height:50px">
            <?php
            echo("Tristana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 48){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Trundle.png" alt="Trundle" style="width:50px;height:50px">
            <?php
            echo("Trundle");
            ?>
            <br>
        <?php
        }
      if($championHelper == 23){
        echo("Level: $champLevels");
        ?>
        <img src="img/champion/Tryndamere.png" alt="Tryndamere" style="width:50px;height:50px">
        <?php
        echo("Tryndamere");
        ?>
        <br>
    <?php
      }
        if($championHelper == 4){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/TwistedFate.png" alt="Twisted Fate" style="width:50px;height:50px">
            <?php
            echo("Twisted Fate");
            ?>
            <br>
        <?php
        }
        if($championHelper == 29){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Twitch.png" alt="Twitch" style="width:50px;height:50px">
            <?php
            echo("Twitch");
            ?>
            <br>
        <?php
        }
        if($championHelper == 77){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Udyr.png" alt="Udyr" style="width:50px;height:50px">
            <?php
            echo("Udyr");
            ?>
            <br>
        <?php
        }
        if($championHelper == 6){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Urgot.png" alt="Urgot" style="width:50px;height:50px">
            <?php
            echo("Urgot");
            ?>
            <br>
        <?php
        }
        if($championHelper == 110){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Varus.png" alt="Varus" style="width:50px;height:50px">
            <?php
            echo("Varus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 67){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Vayne.png" alt="Vayne" style="width:50px;height:50px">
            <?php
            echo("Vayne");
            ?>
            <br>
        <?php
        }
        if($championHelper == 45){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Veigar.png" alt="Veigar" style="width:50px;height:50px">
            <?php
            echo("Veigar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 161){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Velkoz.png" alt="Vel'Koz" style="width:50px;height:50px">
            <?php
            echo("Vel'Koz");
            ?>
            <br>
        <?php
        }
        if($championHelper == 254){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Vi.png" alt="Vi" style="width:50px;height:50px">
            <?php
            echo("Vi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 112){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Viktor.png" alt="Viktor" style="width:50px;height:50px">
            <?php
            echo("Viktor");
            ?>
            <br>
        <?php
        }
        if($championHelper == 8){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Vladimir.png" alt="Vladimir" style="width:50px;height:50px">
            <?php
            echo("Vladimir");
            ?>
            <br>
        <?php
        }
        if($championHelper == 106){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Volibear.png" alt="Volibear" style="width:50px;height:50px">
            <?php
            echo("Volibear");
            ?>
            <br>
        <?php
        }
        if($championHelper == 19){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Warwick.png" alt="Warwick" style="width:50px;height:50px">
            <?php
            echo("Warwick");
            ?>
            <br>
        <?php
        }
        if($championHelper == 101){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Xerath.png" alt="Xerath" style="width:50px;height:50px">
            <?php
            echo("Xerath");
            ?>
            <br>
        <?php
        }
        if($championHelper == 5){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/XinZhao.png" alt="Xin Zhao" style="width:50px;height:50px">
            <?php
            echo("Xin Zhao");
            ?>
            <br>
        <?php
        }
        if($championHelper == 157){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Yasuo.png" alt="Yasuo" style="width:50px;height:50px">
            <?php
            echo("Yasuo");
            ?>
            <br>
        <?php
        }
        if($championHelper == 83){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Yorick.png" alt="Yorick" style="width:50px;height:50px">
            <?php
            echo("Yorick");
            ?>
            <br>
        <?php
        }
        if($championHelper == 154){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zac.png" alt="Zac" style="width:50px;height:50px">
            <?php
            echo("Zac");
            ?>
            <br>
        <?php
        }
        if($championHelper == 238){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zed.png" alt="Zed" style="width:50px;height:50px">
            <?php
            echo("Zed");
            ?>
            <br>
        <?php
        }
        if($championHelper == 115){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ziggs.png" alt="Ziggs" style="width:50px;height:50px">
            <?php
            echo("Ziggs");
            ?>
            <br>
        <?php
        }
        if($championHelper == 26){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zilean.png" alt="Zilean" style="width:50px;height:50px">
            <?php
            echo("Zilean");
            ?>
            <br>
        <?php
        }
        if($championHelper == 143){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zyra.png" alt="Zyra" style="width:50px;height:50px">
            <?php
            echo("Zyra");
            ?>
            <br>
        <?php
        }
        if($championHelper == 518){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Neeko.png" alt="Neeko" style="width:50px;height:50px">
            <?php
            echo("Neeko");
            ?>
            <br>
        <?php
        }
        if($championHelper == 350){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Yuumi.png" alt="Yuumi" style="width:50px;height:50px">
            <?php
            echo("Yuumi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 497){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rakan.png" alt="Rakan" style="width:50px;height:50px">
            <?php
            echo("Rakan");
            ?>
            <br>
        <?php
        }
        if($championHelper == 498){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Xayah.png" alt="Xayah" style="width:50px;height:50px">
            <?php
            echo("Xayah");
            ?>
            <br>
        <?php
        }
        if($championHelper == 142){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zoe.png" alt="Zoe" style="width:50px;height:50px">
            <?php
            echo("Zoe");
            ?>
            <br>
        <?php
        }
        if($championHelper == 555){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Pyke.png" alt="Pyke" style="width:50px;height:50px">
            <?php
            echo("Pyke");
            ?>
            <br>
        <?php
        }
        if($championHelper == 516){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ornn.png" alt="Ornn" style="width:50px;height:50px">
            <?php
            echo("Ornn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 517){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sylas.png" alt="Sylas" style="width:50px;height:50px">
            <?php
            echo("Sylas");
            ?>
            <br>
        <?php
        }
        if($championHelper == 141){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kayn.png" alt="Kayn" style="width:50px;height:50px">
            <?php
            echo("Kayn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 145){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kaisa.png" alt="Kai'Sa" style="width:50px;height:50px">
            <?php
            echo("Kai'Sa");
            ?>
            <br>
        <?php
        }

        #TIMELINE
        $csPerMinDiffInLane = $resultData['MatchHistories10']['participants'][$y]['timeline']['csDiffPerMinDeltas']['10-20'];
        $goldPerMinDeltas = $resultData['MatchHistories10']['participants'][$y]['timeline']['goldPerMinDeltas']['10-20'];
        $lanes = $resultData['MatchHistories10']['participants'][$y]['timeline']['lane'];

        #PERSONAL STATS
        $kills = $resultData['MatchHistories10']['participants'][$y]['stats']['kills'];
        $assists = $resultData['MatchHistories10']['participants'][$y]['stats']['assists'];
        $deaths = $resultData['MatchHistories10']['participants'][$y]['stats']['deaths'];
        $doubleKills = $resultData['MatchHistories10']['participants'][$y]['stats']['doubleKills'];
        $tripleKills = $resultData['MatchHistories10']['participants'][$y]['stats']['tripleKills'];
        $quadraKills = $resultData['MatchHistories10']['participants'][$y]['stats']['quadraKills'];
        $pentaKills = $resultData['MatchHistories10']['participants'][$y]['stats']['pentaKills'];
        $totalMinionKills = $resultData['MatchHistories10']['participants'][$y]['stats']['totalMinionsKilled'];
        $neutralMinionsKilled = $resultData['MatchHistories10']['participants'][$y]['stats']['neutralMinionsKilled'];
        $totalCS = $totalMinionKills + $neutralMinionsKilled;
        $CSperMin = $totalCS/$mins;
        $CSperMin = round($CSperMin,2);
        $visionScore = $resultData['MatchHistories10']['participants'][$y]['stats']['visionScore'];
        $turretPERSONALKills = $resultData['MatchHistories10']['participants'][$y]['stats']['turretKills'];
        $inhibitorPERSONALKills = $resultData['MatchHistories10']['participants'][$y]['stats']['inhibitorKills'];


        $firstBloodKill = $resultData['MatchHistories10']['participants'][$y]['stats']['firstBloodKill'];
        $largestKillingSpree = $resultData['MatchHistories10']['participants'][$y]['stats']['largestKillingSpree'];


        if($deaths!=0){
            $KDA = ($kills+$assists)/$deaths;
            $KDA = round($KDA, 2);
        }
        if($deaths==0){
            $KDA = "Perfect";
        }

        echo("Lane: $lanes");
        ?>
        <br>
        <h5>Personal Stats:</h5>
        <div class="personal">
            <div class="row">
                <div class="col-md-6">
        <?php
        echo("Kills/Deaths/Assists: $kills/$deaths/$assists");
        ?>
        <br>
        <?php
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KDA: $KDA:1");
        ?>
        <br>
        <br>
        <?php
        echo("Double Kills/Triple Kills/Quadra Kills/Penta Kills: $doubleKills/$tripleKills/$quadraKills/$pentaKills");
        ?>
        <br>
        </div>
                <div class="col-md-6">
        <?php
        if($firstBloodKill == NULL){
            echo("First Blood: ");
            ?>
            <img src="img/CheckNo.png" alt="No" style="width:25px;height:25px">
            <?php
        }
        ?>
                <?php
        if($firstBloodKill == '1'){
            echo("First Blood: ");
            ?>
            <img src="img/CheckYes.png" alt="Yes" style="width:25px;height:25px">
            <?php
        }
        ?>
        <br>
        <?php
        echo("CS: $totalCS");
        ?>
        <br>
        <?php
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CS/Min: $CSperMin");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Vision Score: $visionScore");
        ?>
        <br>
        <?php
        echo("Turret Kills/Inhibitor Kills: $turretPERSONALKills/$inhibitorPERSONALKills");
        ?>
        <br>
    </div>
    </div>
    </div>

        <br>
        <h5>Timeline Information:</h5>
        <?php
        echo("Avg difference in CS/MIN against enemy laner from 10-20min: $csPerMinDiffInLane");
        ?>
        <br>
        <?php
        echo("GOLD/MIN from 10-20min: $goldPerMinDeltas");
        ?>
        <br>
        <br>
        <?php
    }

    

    ?>
    </div>
    




























<?php

$Team2Kills = 0;
$Team2Deaths = 0;
$Team2Assists = 0;
for($y=5; $y<10; $y++){
    ?> <?php
    $kills = $resultData['MatchHistories10']['participants'][$y]['stats']['kills'];
    $assists = $resultData['MatchHistories10']['participants'][$y]['stats']['assists'];
    $deaths = $resultData['MatchHistories10']['participants'][$y]['stats']['deaths'];

    $Team2Kills = $Team2Kills + $kills;
    $Team2Assists = $Team2Assists + $assists;
    $Team2Deaths = $Team2Deaths + $deaths;
}

    $win = $resultData['MatchHistories10']['teams'][1]['win'];
    if($win == "Fail"){
        ?>
        <div class="col-md-6" style="background:#F08080;">
        <?php
    }
    ?>
    <?php
    if($win == "Win"){
        ?>
        <div class="col-md-6" style="background:#87CEFA;">
        <?php
    }
    ?>
    <div class="headerCol">
        <div class="row">
            <div class="col-md-6">
                <h3>TEAM STATS:</h3>
</div>
<div class="col-md-6">
                <h3><?php echo("K/D/A: $Team2Kills/$Team2Deaths/$Team2Assists"); ?></h3>
</div>
</div>
</div>
    <?php

    $firstDragon = $resultData['MatchHistories10']['teams'][1]['firstDragon'];
    
    $baronKills = $resultData['MatchHistories10']['teams'][1]['baronKills'];
    $riftHeraldKills = $resultData['MatchHistories10']['teams'][1]['riftHeraldKills'];
    $firstBlood = $resultData['MatchHistories10']['teams'][1]['firstBlood'];
    $firstTower = $resultData['MatchHistories10']['teams'][1]['firstTower'];
    $inhibitorKills = $resultData['MatchHistories10']['teams'][1]['inhibitorKills'];
    $towerKills = $resultData['MatchHistories10']['teams'][1]['towerKills'];
    $dragonKills = $resultData['MatchHistories10']['teams'][1]['dragonKills'];
    if($firstDragon == NULL){
        $firstDragonAnswer = "NO";
    }
    if($firstDragon == '1'){
        $firstDragonAnswer = "YES";
    }
    if($win == "Fail"){
        $winAnswer = "NO";
    }
    if($win == "Win"){
        $winAnswer = "YES";
    }
    if($firstBlood == NULL){
        $firstBloodAnswer = "NO";
    }
    if($firstBlood == '1'){
        $firstBloodAnswer = "YES";
    }
    if($firstTower == NULL){
        $firstTowerAnswer = "NO";
    }
    if($firstTower == '1'){
        $firstTowerAnswer = "YES";
    }
    echo("Win: $winAnswer")
    ?>
    <div class="boxes">
        <div class="row">
            <div class="col-md-4">
    <br>
    <?php
    echo("First Blood: $firstBloodAnswer");
    ?>
    <br>
    <?php
    echo("First Tower: $firstTowerAnswer");
    ?>
    <br>
        </div>
        <div class="col-md-4">
    <?php
    echo("First Dragon: $firstDragonAnswer");
    ?>
    <br>
    <?php
    echo("Baron Kills: $baronKills");
    ?>
    <br>
    <?php
    echo("Rift Herald Kills: $riftHeraldKills")
    ?>
    </div>
    <div class="col-md-4">
    <?php
    echo("Dragon Kills: $dragonKills");
    ?>
    <br>
    <?php
    echo("Tower Kills: $towerKills");
    ?>
    <br>
    <?php
    echo("Inhibitor Kills: $inhibitorKills");
    ?>
</div>
</div>
</div>
    <br>
    <br>
    <?php
    #SECTION 2 ---- TEAM 2 ---- INDEXES 5-9
    for($y=5; $y<10; $y++){
        ?>
        <h4><?php echo($participants[$y]); ?> </h4>
        <?php
        $champLevels = $resultData['MatchHistories10']['participants'][$y]['stats']['champLevel'];
        $championHelper = $resultData['MatchHistories10']['participants'][$y]['championId'];
        if($championHelper == 266){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Aatrox.png" alt="Aatrox" style="width:50px;height:50px">
            <?php
            echo("Aatrox");
            ?>
            <br>
        <?php
        }
        if($championHelper == 103){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ahri.png" alt="Ahri" style="width:50px;height:50px">
            <?php
            echo("Ahri");
            ?>
            <br>
        <?php
        }
        if($championHelper == 84){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Akali.png" alt="Akali" style="width:50px;height:50px">
            <?php
            echo("Akali");
            ?>
            <br>
        <?php
        }
        if($championHelper == 12){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Alistar.png" alt="Alistar" style="width:50px;height:50px">
            <?php
            echo("Alistar");
            ?>
            <br>
        <?php
          }
        if($championHelper == 32){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Amumu.png" alt="Amumu" style="width:50px;height:50px">
            <?php
            echo("Amumu");
            ?>
            <br>
        <?php
        }
        if($championHelper == 34){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Anivia.png" alt="Anivia" style="width:50px;height:50px">
            <?php
            echo("Anivia");
            ?>
            <br>
        <?php
        }
        if($championHelper == 1){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Annie.png" alt="Annie" style="width:50px;height:50px">
            <?php
            echo("Annie");
            ?>
            <br>
        <?php
        }
        if($championHelper == 22){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ashe.png" alt="Ashe" style="width:50px;height:50px">
            <?php
            echo("Ashe");
            ?>
            <br>
        <?php
        }
        if($championHelper == 136){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/AurelionSol.png" alt="Aurelion Sol" style="width:50px;height:50px">
            <?php
            echo("Aurelion Sol");
            ?>
            <br>
        <?php
        }
        if($championHelper == 268){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Azir.png" alt="Azir" style="width:50px;height:50px">
            <?php
            echo("Azir");
            ?>
            <br>
        <?php
        }
        if($championHelper == 432){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Bard.png" alt="Bard" style="width:50px;height:50px">
            <?php
            echo("Bard");
            ?>
            <br>
        <?php
        }
        if($championHelper == 53){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Blitzcrank.png" alt="Blitzcrank" style="width:50px;height:50px">
            <?php
            echo("Blitzcrank");
            ?>
            <br>
        <?php
        }
        if($championHelper == 63){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Brand.png" alt="Brand" style="width:50px;height:50px">
            <?php
            echo("Brand");
            ?>
            <br>
        <?php
        }
        if($championHelper == 201){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Braum.png" alt="Braum" style="width:50px;height:50px">
            <?php
            echo("Braum");
            ?>
            <br>
        <?php
        }
        if($championHelper == 51){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Caitlyn.png" alt="Caitlyn" style="width:50px;height:50px">
            <?php
            echo("Caitlyn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 164){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Camille.png" alt="Camille" style="width:50px;height:50px">
            <?php
            echo("Camille");
            ?>
            <br>
        <?php
        }
        if($championHelper == 69){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Cassiopeia.png" alt="Cassiopeia" style="width:50px;height:50px">
            <?php
            echo("Cassiopeia");
            ?>
            <br>
        <?php
        }
        if($championHelper == 31){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Chogath.png" alt="Cho'Gath" style="width:50px;height:50px">
            <?php
            echo("Cho'Gath");
            ?>
            <br>
        <?php
        }
        if($championHelper == 42){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Corki.png" alt="Corki" style="width:50px;height:50px">
            <?php
            echo("Corki");
            ?>
            <br>
        <?php
        }
        if($championHelper == 122){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Darius.png" alt="Darius" style="width:50px;height:50px">
            <?php
            echo("Darius");
            ?>
            <br>
        <?php
        }
        if($championHelper == 131){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Diana.png" alt="Diana" style="width:50px;height:50px">
            <?php
            echo("Diana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 119){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Draven.png" alt="Draven" style="width:50px;height:50px">
            <?php
            echo("Draven");
            ?>
            <br>
        <?php
        }
      if($championHelper == 36){
        echo("Level: $champLevels");
        ?>
        <img src="img/champion/DrMundo.png" alt="Dr. Mundo" style="width:50px;height:50px">
        <?php
        echo("Dr. Mundo");
        ?>
        <br>
    <?php
      }
        if($championHelper == 245){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ekko.png" alt="Ekko" style="width:50px;height:50px">
            <?php
            echo("Ekko");
            ?>
            <br>
        <?php
        }
        if($championHelper == 60){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Elise.png" alt="Elise" style="width:50px;height:50px">
            <?php
            echo("Elise");
            ?>
            <br>
        <?php
        }
        if($championHelper == 28){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Evelynn.png" alt="Evelynn" style="width:50px;height:50px">
            <?php
            echo("Evelynn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 81){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ezreal.png" alt="Ezreal" style="width:50px;height:50px">
            <?php
            echo("Ezreal");
            ?>
            <br>
        <?php
        }
        if($championHelper == 9){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/FiddleSticks.png" alt="Fiddlesticks" style="width:50px;height:50px">
            <?php
            echo("Fiddlesticks");
            ?>
            <br>
        <?php
        }
        if($championHelper == 114){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Fiora.png" alt="Fiora" style="width:50px;height:50px">
            <?php
            echo("Fiora");
            ?>
            <br>
        <?php
        }
        if($championHelper == 105){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Fizz.png" alt="Fizz" style="width:50px;height:50px">
            <?php
            echo("Fizz");
            ?>
            <br>
        <?php
        }
        if($championHelper == 3){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Galio.png" alt="Galio" style="width:50px;height:50px">
            <?php
            echo("Galio");
            ?>
            <br>
        <?php
        }
        if($championHelper == 41){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Gangplank.png" alt="Gangplank" style="width:50px;height:50px">
            <?php
            echo("Gangplank");
            ?>
            <br>
        <?php
        }
        if($championHelper == 86){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Garen.png" alt="Garen" style="width:50px;height:50px">
            <?php
            echo("Garen");
            ?>
            <br>
        <?php
        }
        if($championHelper == 150){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Gnar.png" alt="Gnar" style="width:50px;height:50px">
            <?php
            echo("Gnar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 79){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Gragas.png" alt="Gragas" style="width:50px;height:50px">
            <?php
            echo("Gragas");
            ?>
            <br>
        <?php
        }
        if($championHelper == 104){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Graves.png" alt="Graves" style="width:50px;height:50px">
            <?php
            echo("Graves");
            ?>
            <br>
        <?php
        }
        if($championHelper == 120){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Hecarim.png" alt="Hecarim" style="width:50px;height:50px">
            <?php
            echo("Hecarim");
            ?>
            <br>
        <?php
        }
        if($championHelper == 74){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Heimerdinger.png" alt="Heimerdinger" style="width:50px;height:50px">
            <?php
            echo("Heimerdinger");
            ?>
            <br>
        <?php
        }
        if($championHelper == 420){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Illaoi.png" alt="Illaoi" style="width:50px;height:50px">
            <?php
            echo("Illaoi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 39){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Irelia.png" alt="Irelia" style="width:50px;height:50px">
            <?php
            echo("Irelia");
            ?>
            <br>
        <?php
        }
        if($championHelper == 427){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ivern.png" alt="Ivern" style="width:50px;height:50px">
            <?php
            echo("Ivern");
            ?>
            <br>
        <?php
        }
        if($championHelper == 40){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Janna.png" alt="Janna" style="width:50px;height:50px">
            <?php
            echo("Janna");
            ?>
            <br>
        <?php
        }
        if($championHelper == 59){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/JarvanIV.png" alt="Jarvan IV" style="width:50px;height:50px">
            <?php
            echo("Jarvan IV");
            ?>
            <br>
        <?php
        }
        if($championHelper == 24){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jax.png" alt="Jax" style="width:50px;height:50px">
            <?php
            echo("Jax");
            ?>
            <br>
        <?php
        }
        if($championHelper == 126){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jayce.png" alt="Jayce" style="width:50px;height:50px">
            <?php
            echo("Jayce");
            ?>
            <br>
        <?php
        }
        if($championHelper == 202){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jhin.png" alt="Jhin" style="width:50px;height:50px">
            <?php
            echo("Jhin");
            ?>
            <br>
        <?php
        }
        if($championHelper == 222){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Jinx.png" alt="Jinx" style="width:50px;height:50px">
            <?php
            echo("Jinx");
            ?>
            <br>
        <?php
        }
        if($championHelper == 429){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kalista.png" alt="Kalista" style="width:50px;height:50px">
            <?php
            echo("Kalista");
            ?>
            <br>
        <?php
        }
        if($championHelper == 43){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Karma.png" alt="Karma" style="width:50px;height:50px">
            <?php
            echo("Karma");
            ?>
            <br>
        <?php
        }
        if($championHelper == 30){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Karthus.png" alt="Karthus" style="width:50px;height:50px">
            <?php
            echo("Karthus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 38){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kassadin.png" alt="Kassadin" style="width:50px;height:50px">
            <?php
            echo("Kassadin");
            ?>
            <br>
        <?php
        }
        if($championHelper == 55){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Katarina.png" alt="Katarina" style="width:50px;height:50px">
            <?php
            echo("Katarina");
            ?>
            <br>
        <?php
        }
        if($championHelper == 10){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kayle.png" alt="Kayle" style="width:50px;height:50px">
            <?php
            echo("Kayle");
            ?>
            <br>
        <?php
        }
        if($championHelper == 85){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kennen.png" alt="Kennen" style="width:50px;height:50px">
            <?php
            echo("Kennen");
            ?>
            <br>
        <?php
        }
        if($championHelper == 121){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Khazix.png" alt="Kha'Zix" style="width:50px;height:50px">
            <?php
            echo("Kha'Zix");
            ?>
            <br>
        <?php
        }
        if($championHelper == 203){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kindred.png" alt="Kindred" style="width:50px;height:50px">
            <?php
            echo("Kindred");
            ?>
            <br>
        <?php
        }
        if($championHelper == 240){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kled.png" alt="Kled" style="width:50px;height:50px">
            <?php
            echo("Kled");
            ?>
            <br>
        <?php
        }
        if($championHelper == 96){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/KogMaw.png" alt="Kog'Maw" style="width:50px;height:50px">
            <?php
            echo("Kog'Maw");
            ?>
            <br>
        <?php
        }
        if($championHelper == 7){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Leblanc.png" alt="LeBlanc" style="width:50px;height:50px">
            <?php
            echo("LeBlanc");
            ?>
            <br>
        <?php
        }
        if($championHelper == 64){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/LeeSin.png" alt="Lee Sin" style="width:50px;height:50px">
            <?php
            echo("Lee Sin");
            ?>
            <br>
        <?php
        }
        if($championHelper == 89){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Leona.png" alt="Leona" style="width:50px;height:50px">
            <?php
            echo("Leona");
            ?>
            <br>
        <?php
        }
        if($championHelper == 127){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lissandra.png" alt="Lissandra" style="width:50px;height:50px">
            <?php
            echo("Lissandra");
            ?>
            <br>
        <?php
        }
        if($championHelper == 236){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lucian.png" alt="Lucian" style="width:50px;height:50px">
            <?php
            echo("Lucian");
            ?>
            <br>
        <?php
        }
        if($championHelper == 117){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lulu.png" alt="Lulu" style="width:50px;height:50px">
            <?php
            echo("Lulu");
            ?>
            <br>
        <?php
        }
        if($championHelper == 99){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Lux.png" alt="Lux" style="width:50px;height:50px">
            <?php
            echo("Lux");
            ?>
            <br>
        <?php
        }
        if($championHelper == 54){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Malphite.png" alt="Malphite" style="width:50px;height:50px">
            <?php
            echo("Malphite");
            ?>
            <br>
        <?php
        }
        if($championHelper == 90){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Malzahar.png" alt="Malzahar" style="width:50px;height:50px">
            <?php
            echo("Malzahar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 57){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Maokai.png" alt="Maokai" style="width:50px;height:50px">
            <?php
            echo("Maokai");
            ?>
            <br>
        <?php
        }
        if($championHelper == 11){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/MasterYi.png" alt="Master Yi" style="width:50px;height:50px">
            <?php
            echo("Master Yi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 21){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/MissFortune.png" alt="Miss Fortune" style="width:50px;height:50px">
            <?php
            echo("Miss Fortune");
            ?>
            <br>
        <?php
        }
        if($championHelper == 62){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/MonkeyKing.png" alt="Wukong" style="width:50px;height:50px">
            <?php
            echo("Wukong");
            ?>
            <br>
        <?php
        }
        if($championHelper == 82){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Mordekaiser.png" alt="Mordekaiser" style="width:50px;height:50px">
            <?php
            echo("Mordekaiser");
            ?>
            <br>
        <?php
        }
        if($championHelper == 25){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Morgana.png" alt="Morgana" style="width:50px;height:50px">
            <?php
            echo("Morgana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 267){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nami.png" alt="Nami" style="width:50px;height:50px">
            <?php
            echo("Nami");
            ?>
            <br>
        <?php
        }
        if($championHelper == 75){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nasus.png" alt="Nasus" style="width:50px;height:50px">
            <?php
            echo("Nasus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 111){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nautilus.png" alt="Nautilus" style="width:50px;height:50px">
            <?php
            echo("Nautilus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 76){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nidalee.png" alt="Nidalee" style="width:50px;height:50px">
            <?php
            echo("Nidalee");
            ?>
            <br>
        <?php
        }
        if($championHelper == 56){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nocturne.png" alt="Nocturne" style="width:50px;height:50px">
            <?php
            echo("Nocturne");
            ?>
            <br>
        <?php
        }
        if($championHelper == 20){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Nunu.png" alt="Nunu" style="width:50px;height:50px">
            <?php
            echo("Nunu & Willump");
            ?>
            <br>
        <?php
        }
        if($championHelper == 2){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Olaf.png" alt="Olaf" style="width:50px;height:50px">
            <?php
            echo("Olaf");
            ?>
            <br>
        <?php
        }
        if($championHelper == 61){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Orianna.png" alt="Orianna" style="width:50px;height:50px">
            <?php
            echo("Orianna");
            ?>
            <br>
        <?php
        }
        if($championHelper == 80){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Pantheon.png" alt="Pantheon" style="width:50px;height:50px">
            <?php
            echo("Pantheon");
            ?>
            <br>
        <?php
        }
        if($championHelper == 78){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Poppy.png" alt="Poppy" style="width:50px;height:50px">
            <?php
            echo("Poppy");
            ?>
            <br>
        <?php
        }
        if($championHelper == 133){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Quinn.png" alt="Quinn" style="width:50px;height:50px">
            <?php
            echo("Quinn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 33){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rammus.png" alt="Rammus" style="width:50px;height:50px">
            <?php
            echo("Rammus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 421){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/RekSai.png" alt="Rek'Sai" style="width:50px;height:50px">
            <?php
            echo("Rek'Sai");
            ?>
            <br>
        <?php
        }
        if($championHelper == 58){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Renekton.png" alt="Renekton" style="width:50px;height:50px">
            <?php
            echo("Renekton");
            ?>
            <br>
        <?php
        }
        if($championHelper == 107){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rengar.png" alt="Rengar" style="width:50px;height:50px">
            <?php
            echo("Rengar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 92){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Riven.png" alt="Riven" style="width:50px;height:50px">
            <?php
            echo("Riven");
            ?>
            <br>
        <?php
        }
        if($championHelper == 68){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rumble.png" alt="Rumble" style="width:50px;height:50px">
            <?php
            echo("Rumble");
            ?>
            <br>
        <?php
        }
        if($championHelper == 13){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ryze.png" alt="Ryze" style="width:50px;height:50px">
            <?php
            echo("Ryze");
            ?>
            <br>
        <?php
        }
        if($championHelper == 113){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sejuani.png" alt="Sejuani" style="width:50px;height:50px">
            <?php
            echo("Sejuani");
            ?>
            <br>
        <?php
        }
        if($championHelper == 35){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Shaco.png" alt="Shaco" style="width:50px;height:50px">
            <?php
            echo("Shaco");
            ?>
            <br>
        <?php
        }
        if($championHelper == 98){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Shen.png" alt="Shen" style="width:50px;height:50px">
            <?php
            echo("Shen");
            ?>
            <br>
        <?php
        }
        if($championHelper == 102){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Shyvana.png" alt="Shyvana" style="width:50px;height:50px">
            <?php
            echo("Shyvana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 27){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Singed.png" alt="Singed" style="width:50px;height:50px">
            <?php
            echo("Singed");
            ?>
            <br>
        <?php
        }
        if($championHelper == 14){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sion.png" alt="Sion" style="width:50px;height:50px">
            <?php
            echo("Sion");
            ?>
            <br>
        <?php
        }
        if($championHelper == 15){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sivir.png" alt="Sivir" style="width:50px;height:50px">
            <?php
            echo("Sivir");
            ?>
            <br>
        <?php
        }
        if($championHelper == 72){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Skarner.png" alt="Skarner" style="width:50px;height:50px">
            <?php
            echo("Skarner");
            ?>
            <br>
        <?php
        }
        if($championHelper == 37){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sona.png" alt="Sona" style="width:50px;height:50px">
            <?php
            echo("Sona");
            ?>
            <br>
        <?php
        }
        if($championHelper == 16){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Soraka.png" alt="Soraka" style="width:50px;height:50px">
            <?php
            echo("Soraka");
            ?>
            <br>
        <?php
        }
        if($championHelper == 50){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Swain.png" alt="Swain" style="width:50px;height:50px">
            <?php
            echo("Swain");
            ?>
            <br>
        <?php
        }
        if($championHelper == 134){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Syndra.png" alt="Syndra" style="width:50px;height:50px">
            <?php
            echo("Syndra");
            ?>
            <br>
        <?php
        }
        if($championHelper == 223){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/TahmKench.png" alt="Tahm Kench" style="width:50px;height:50px">
            <?php
            echo("Tahm Kench");
            ?>
            <br>
        <?php
        }
        if($championHelper == 163){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Taliyah.png" alt="Taliyah" style="width:50px;height:50px">
            <?php
            echo("Taliyah");
            ?>
            <br>
        <?php
        }
        if($championHelper == 91){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Talon.png" alt="Talon" style="width:50px;height:50px">
            <?php
            echo("Talon");
            ?>
            <br>
        <?php
        }
        if($championHelper == 44){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Taric.png" alt="Taric" style="width:50px;height:50px">
            <?php
            echo("Taric");
            ?>
            <br>
        <?php
        }
        if($championHelper == 17){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Teemo.png" alt="Teemo" style="width:50px;height:50px">
            <?php
            echo("Teemo");
            ?>
            <br>
        <?php
        }
        if($championHelper == 412){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Thresh.png" alt="Thresh" style="width:50px;height:50px">
            <?php
            echo("Thresh");
            ?>
            <br>
        <?php
        }
        if($championHelper == 18){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Tristana.png" alt="Tristana" style="width:50px;height:50px">
            <?php
            echo("Tristana");
            ?>
            <br>
        <?php
        }
        if($championHelper == 48){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Trundle.png" alt="Trundle" style="width:50px;height:50px">
            <?php
            echo("Trundle");
            ?>
            <br>
        <?php
        }
      if($championHelper == 23){
        echo("Level: $champLevels");
        ?>
        <img src="img/champion/Tryndamere.png" alt="Tryndamere" style="width:50px;height:50px">
        <?php
        echo("Tryndamere");
        ?>
        <br>
    <?php
      }
        if($championHelper == 4){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/TwistedFate.png" alt="Twisted Fate" style="width:50px;height:50px">
            <?php
            echo("Twisted Fate");
            ?>
            <br>
        <?php
        }
        if($championHelper == 29){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Twitch.png" alt="Twitch" style="width:50px;height:50px">
            <?php
            echo("Twitch");
            ?>
            <br>
        <?php
        }
        if($championHelper == 77){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Udyr.png" alt="Udyr" style="width:50px;height:50px">
            <?php
            echo("Udyr");
            ?>
            <br>
        <?php
        }
        if($championHelper == 6){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Urgot.png" alt="Urgot" style="width:50px;height:50px">
            <?php
            echo("Urgot");
            ?>
            <br>
        <?php
        }
        if($championHelper == 110){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Varus.png" alt="Varus" style="width:50px;height:50px">
            <?php
            echo("Varus");
            ?>
            <br>
        <?php
        }
        if($championHelper == 67){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Vayne.png" alt="Vayne" style="width:50px;height:50px">
            <?php
            echo("Vayne");
            ?>
            <br>
        <?php
        }
        if($championHelper == 45){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Veigar.png" alt="Veigar" style="width:50px;height:50px">
            <?php
            echo("Veigar");
            ?>
            <br>
        <?php
        }
        if($championHelper == 161){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Velkoz.png" alt="Vel'Koz" style="width:50px;height:50px">
            <?php
            echo("Vel'Koz");
            ?>
            <br>
        <?php
        }
        if($championHelper == 254){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Vi.png" alt="Vi" style="width:50px;height:50px">
            <?php
            echo("Vi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 112){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Viktor.png" alt="Viktor" style="width:50px;height:50px">
            <?php
            echo("Viktor");
            ?>
            <br>
        <?php
        }
        if($championHelper == 8){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Vladimir.png" alt="Vladimir" style="width:50px;height:50px">
            <?php
            echo("Vladimir");
            ?>
            <br>
        <?php
        }
        if($championHelper == 106){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Volibear.png" alt="Volibear" style="width:50px;height:50px">
            <?php
            echo("Volibear");
            ?>
            <br>
        <?php
        }
        if($championHelper == 19){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Warwick.png" alt="Warwick" style="width:50px;height:50px">
            <?php
            echo("Warwick");
            ?>
            <br>
        <?php
        }
        if($championHelper == 101){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Xerath.png" alt="Xerath" style="width:50px;height:50px">
            <?php
            echo("Xerath");
            ?>
            <br>
        <?php
        }
        if($championHelper == 5){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/XinZhao.png" alt="Xin Zhao" style="width:50px;height:50px">
            <?php
            echo("Xin Zhao");
            ?>
            <br>
        <?php
        }
        if($championHelper == 157){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Yasuo.png" alt="Yasuo" style="width:50px;height:50px">
            <?php
            echo("Yasuo");
            ?>
            <br>
        <?php
        }
        if($championHelper == 83){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Yorick.png" alt="Yorick" style="width:50px;height:50px">
            <?php
            echo("Yorick");
            ?>
            <br>
        <?php
        }
        if($championHelper == 154){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zac.png" alt="Zac" style="width:50px;height:50px">
            <?php
            echo("Zac");
            ?>
            <br>
        <?php
        }
        if($championHelper == 238){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zed.png" alt="Zed" style="width:50px;height:50px">
            <?php
            echo("Zed");
            ?>
            <br>
        <?php
        }
        if($championHelper == 115){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ziggs.png" alt="Ziggs" style="width:50px;height:50px">
            <?php
            echo("Ziggs");
            ?>
            <br>
        <?php
        }
        if($championHelper == 26){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zilean.png" alt="Zilean" style="width:50px;height:50px">
            <?php
            echo("Zilean");
            ?>
            <br>
        <?php
        }
        if($championHelper == 143){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zyra.png" alt="Zyra" style="width:50px;height:50px">
            <?php
            echo("Zyra");
            ?>
            <br>
        <?php
        }
        if($championHelper == 518){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Neeko.png" alt="Neeko" style="width:50px;height:50px">
            <?php
            echo("Neeko");
            ?>
            <br>
        <?php
        }
        if($championHelper == 350){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Yuumi.png" alt="Yuumi" style="width:50px;height:50px">
            <?php
            echo("Yuumi");
            ?>
            <br>
        <?php
        }
        if($championHelper == 497){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Rakan.png" alt="Rakan" style="width:50px;height:50px">
            <?php
            echo("Rakan");
            ?>
            <br>
        <?php
        }
        if($championHelper == 498){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Xayah.png" alt="Xayah" style="width:50px;height:50px">
            <?php
            echo("Xayah");
            ?>
            <br>
        <?php
        }
        if($championHelper == 142){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Zoe.png" alt="Zoe" style="width:50px;height:50px">
            <?php
            echo("Zoe");
            ?>
            <br>
        <?php
        }
        if($championHelper == 555){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Pyke.png" alt="Pyke" style="width:50px;height:50px">
            <?php
            echo("Pyke");
            ?>
            <br>
        <?php
        }
        if($championHelper == 516){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Ornn.png" alt="Ornn" style="width:50px;height:50px">
            <?php
            echo("Ornn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 517){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Sylas.png" alt="Sylas" style="width:50px;height:50px">
            <?php
            echo("Sylas");
            ?>
            <br>
        <?php
        }
        if($championHelper == 141){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kayn.png" alt="Kayn" style="width:50px;height:50px">
            <?php
            echo("Kayn");
            ?>
            <br>
        <?php
        }
        if($championHelper == 145){
            echo("Level: $champLevels");
            ?>
            <img src="img/champion/Kaisa.png" alt="Kai'Sa" style="width:50px;height:50px">
            <?php
            echo("Kai'Sa");
            ?>
            <br>
        <?php
        }

        #TIMELINE
        $csPerMinDiffInLane = $resultData['MatchHistories10']['participants'][$y]['timeline']['csDiffPerMinDeltas']['10-20'];
        $goldPerMinDeltas = $resultData['MatchHistories10']['participants'][$y]['timeline']['goldPerMinDeltas']['10-20'];
        $lanes = $resultData['MatchHistories10']['participants'][$y]['timeline']['lane'];

        #PERSONAL STATS
        $kills = $resultData['MatchHistories10']['participants'][$y]['stats']['kills'];
        $assists = $resultData['MatchHistories10']['participants'][$y]['stats']['assists'];
        $deaths = $resultData['MatchHistories10']['participants'][$y]['stats']['deaths'];
        $doubleKills = $resultData['MatchHistories10']['participants'][$y]['stats']['doubleKills'];
        $tripleKills = $resultData['MatchHistories10']['participants'][$y]['stats']['tripleKills'];
        $quadraKills = $resultData['MatchHistories10']['participants'][$y]['stats']['quadraKills'];
        $pentaKills = $resultData['MatchHistories10']['participants'][$y]['stats']['pentaKills'];
        $totalMinionKills = $resultData['MatchHistories10']['participants'][$y]['stats']['totalMinionsKilled'];
        $neutralMinionsKilled = $resultData['MatchHistories10']['participants'][$y]['stats']['neutralMinionsKilled'];
        $totalCS = $totalMinionKills + $neutralMinionsKilled;
        $CSperMin = $totalCS/$mins;
        $CSperMin = round($CSperMin,2);
        $visionScore = $resultData['MatchHistories10']['participants'][$y]['stats']['visionScore'];
        $turretPERSONALKills = $resultData['MatchHistories10']['participants'][$y]['stats']['turretKills'];
        $inhibitorPERSONALKills = $resultData['MatchHistories10']['participants'][$y]['stats']['inhibitorKills'];


        $firstBloodKill = $resultData['MatchHistories10']['participants'][$y]['stats']['firstBloodKill'];
        $largestKillingSpree = $resultData['MatchHistories10']['participants'][$y]['stats']['largestKillingSpree'];

        

        if($deaths!=0){
            $KDA = ($kills+$assists)/$deaths;
            $KDA = round($KDA, 2);
        }
        if($deaths==0){
            $KDA = "Perfect";
        }

        echo("Lane: $lanes");
        ?>
        <br>
        
        <h5>Personal Stats:</h5>
        <div class="personal">
            <div class="row">
                <div class="col-md-6">
        <?php
        echo("Kills/Deaths/Assists: $kills/$deaths/$assists");
        ?>
        <br>
        <?php
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KDA: $KDA:1");
        ?>
        <br>
        <br>
        <?php
        echo("Double Kills/Triple Kills/Quadra Kills/Penta Kills: $doubleKills/$tripleKills/$quadraKills/$pentaKills");
        ?>
        <br>
        </div>
                <div class="col-md-6">
        <?php
        if($firstBloodKill == NULL){
            echo("First Blood: ");
            ?>
            <img src="img/CheckNo.png" alt="No" style="width:25px;height:25px">
            <?php
        }
        ?>
                <?php
        if($firstBloodKill == '1'){
            echo("First Blood: ");
            ?>
            <img src="img/CheckYes.png" alt="Yes" style="width:25px;height:25px">
            <?php
        }
        ?>
        <br>
        <?php
        echo("CS: $totalCS");
        ?>
        <br>
        <?php
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CS/Min: $CSperMin")
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Vision Score: $visionScore");
        ?>
        <br>
        <?php
        echo("Turret Kills/Inhibitor Kills: $turretPERSONALKills/$inhibitorPERSONALKills");
        ?>
        <br>
    </div>
    </div>
    </div>
        <br>
        <h5>Timeline Information:</h5>
        <?php
        echo("Avg difference in CS/MIN against enemy laner from 10-20min: $csPerMinDiffInLane");
        ?>
        <br>
        <?php
        echo("GOLD/MIN from 10-20min: $goldPerMinDeltas");
        ?>
        <br>
        <br>
        <?php
    

        #print_r($resultData['MatchHistories10']['participants'][$y]['stats']);
    }

    ?>
    </div>
    </div>
    </div>
    <?php



}

else{
    ?>
    <h2>NOT A 5v5 MATCH: NO REPORT</h2>
    <?php
}
   # print_r($participants);
    ?>
