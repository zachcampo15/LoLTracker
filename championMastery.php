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
              <a class="nav-link" href="#">Champion Mastery</a>
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
    <h1><?php echo "$summonerName's Champion Mastery"; ?></h1>
    
    <?php
    foreach($resultData['ChampionMastery'] as $item){
      $size = $size + 1;
      #if($ChampionId == 36){
      #  echo("Dr. Mundo");
      #}
      #if($ChampionId == 23){
      #  echo("Tryndamere");
      #}
    }

    ?>
    
    <?php
    #THERE ARE PICTURES OF EVERY CHAMP IN /Downloads/dragontail-6.24.1/6.24.1/img/champion/'CHAMPION'.png
    #MISSING NEEKO, YUUMI, RAKAN, XAYAH, ZOE, SYLAS, PYKE, ORNN, KAYN
    for($i = 0; $i < $size; $i++){
        $q = $i+1;


    #3 COLUMN FORMATTING
    if($i%3 == 0){
        ?>
        <div class="container">
            <div class="row">
                <div class = "col-md-4">
        <?php
    }
    if($i%3 > 0){
        ?>
        <div class="col-md-4">
        <?php
    }
    ?>
   
    <?php
        if($resultData['ChampionMastery'][$i]['championId'] == 266){
            echo("$q. ");
            ?>
            <img src="img/champion/Aatrox.png" alt="Aatrox" style="width:50px;height:50px">
            <?php
            echo("Aatrox");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 103){
            echo("$q. ");
            ?>
            <img src="img/champion/Ahri.png" alt="Ahri" style="width:50px;height:50px">
            <?php
            echo("Ahri");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 84){
            echo("$q. ");
            ?>
            <img src="img/champion/Akali.png" alt="Akali" style="width:50px;height:50px">
            <?php
            echo("Akali");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 12){
            echo("$q. ");
            ?>
            <img src="img/champion/Alistar.png" alt="Alistar" style="width:50px;height:50px">
            <?php
            echo("Alistar");
            ?>
            <br>
        <?php
          }
        if($resultData['ChampionMastery'][$i]['championId'] == 32){
            echo("$q. ");
            ?>
            <img src="img/champion/Amumu.png" alt="Amumu" style="width:50px;height:50px">
            <?php
            echo("Amumu");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 34){
            echo("$q. ");
            ?>
            <img src="img/champion/Anivia.png" alt="Anivia" style="width:50px;height:50px">
            <?php
            echo("Anivia");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 1){
            echo("$q. ");
            ?>
            <img src="img/champion/Annie.png" alt="Annie" style="width:50px;height:50px">
            <?php
            echo("Annie");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 22){
            echo("$q. ");
            ?>
            <img src="img/champion/Ashe.png" alt="Ashe" style="width:50px;height:50px">
            <?php
            echo("Ashe");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 136){
            echo("$q. ");
            ?>
            <img src="img/champion/AurelionSol.png" alt="Aurelion Sol" style="width:50px;height:50px">
            <?php
            echo("Aurelion Sol");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 268){
            echo("$q. ");
            ?>
            <img src="img/champion/Azir.png" alt="Azir" style="width:50px;height:50px">
            <?php
            echo("Azir");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 432){
            echo("$q. ");
            ?>
            <img src="img/champion/Bard.png" alt="Bard" style="width:50px;height:50px">
            <?php
            echo("Bard");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 53){
            echo("$q. ");
            ?>
            <img src="img/champion/Blitzcrank.png" alt="Blitzcrank" style="width:50px;height:50px">
            <?php
            echo("Blitzcrank");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 63){
            echo("$q. ");
            ?>
            <img src="img/champion/Brand.png" alt="Brand" style="width:50px;height:50px">
            <?php
            echo("Brand");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 201){
            echo("$q. ");
            ?>
            <img src="img/champion/Braum.png" alt="Braum" style="width:50px;height:50px">
            <?php
            echo("Braum");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 51){
            echo("$q. ");
            ?>
            <img src="img/champion/Caitlyn.png" alt="Caitlyn" style="width:50px;height:50px">
            <?php
            echo("Caitlyn");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 164){
            echo("$q. ");
            ?>
            <img src="img/champion/Camille.png" alt="Camille" style="width:50px;height:50px">
            <?php
            echo("Camille");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 69){
            echo("$q. ");
            ?>
            <img src="img/champion/Cassiopeia.png" alt="Cassiopeia" style="width:50px;height:50px">
            <?php
            echo("Cassiopeia");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 31){
            echo("$q. ");
            ?>
            <img src="img/champion/Chogath.png" alt="Cho'Gath" style="width:50px;height:50px">
            <?php
            echo("Cho'Gath");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 42){
            echo("$q. ");
            ?>
            <img src="img/champion/Corki.png" alt="Corki" style="width:50px;height:50px">
            <?php
            echo("Corki");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 122){
            echo("$q. ");
            ?>
            <img src="img/champion/Darius.png" alt="Darius" style="width:50px;height:50px">
            <?php
            echo("Darius");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 131){
            echo("$q. ");
            ?>
            <img src="img/champion/Diana.png" alt="Diana" style="width:50px;height:50px">
            <?php
            echo("Diana");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 119){
            echo("$q. ");
            ?>
            <img src="img/champion/Draven.png" alt="Draven" style="width:50px;height:50px">
            <?php
            echo("Draven");
            ?>
            <br>
        <?php
        }
      if($resultData['ChampionMastery'][$i]['championId'] == 36){
        echo("$q. ");
        ?>
        <img src="img/champion/DrMundo.png" alt="Dr. Mundo" style="width:50px;height:50px">
        <?php
        echo("Dr. Mundo");
        ?>
        <br>
    <?php
      }
        if($resultData['ChampionMastery'][$i]['championId'] == 245){
            echo("$q. ");
            ?>
            <img src="img/champion/Ekko.png" alt="Ekko" style="width:50px;height:50px">
            <?php
            echo("Ekko");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 60){
            echo("$q. ");
            ?>
            <img src="img/champion/Elise.png" alt="Elise" style="width:50px;height:50px">
            <?php
            echo("Elise");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 28){
            echo("$q. ");
            ?>
            <img src="img/champion/Evelynn.png" alt="Evelynn" style="width:50px;height:50px">
            <?php
            echo("Evelynn");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 81){
            echo("$q. ");
            ?>
            <img src="img/champion/Ezreal.png" alt="Ezreal" style="width:50px;height:50px">
            <?php
            echo("Ezreal");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 9){
            echo("$q. ");
            ?>
            <img src="img/champion/FiddleSticks.png" alt="Fiddlesticks" style="width:50px;height:50px">
            <?php
            echo("Fiddlesticks");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 114){
            echo("$q. ");
            ?>
            <img src="img/champion/Fiora.png" alt="Fiora" style="width:50px;height:50px">
            <?php
            echo("Fiora");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 105){
            echo("$q. ");
            ?>
            <img src="img/champion/Fizz.png" alt="Fizz" style="width:50px;height:50px">
            <?php
            echo("Fizz");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 3){
            echo("$q. ");
            ?>
            <img src="img/champion/Galio.png" alt="Galio" style="width:50px;height:50px">
            <?php
            echo("Galio");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 41){
            echo("$q. ");
            ?>
            <img src="img/champion/Gangplank.png" alt="Gangplank" style="width:50px;height:50px">
            <?php
            echo("Gangplank");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 86){
            echo("$q. ");
            ?>
            <img src="img/champion/Garen.png" alt="Garen" style="width:50px;height:50px">
            <?php
            echo("Garen");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 150){
            echo("$q. ");
            ?>
            <img src="img/champion/Gnar.png" alt="Gnar" style="width:50px;height:50px">
            <?php
            echo("Gnar");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 79){
            echo("$q. ");
            ?>
            <img src="img/champion/Gragas.png" alt="Gragas" style="width:50px;height:50px">
            <?php
            echo("Gragas");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 104){
            echo("$q. ");
            ?>
            <img src="img/champion/Graves.png" alt="Graves" style="width:50px;height:50px">
            <?php
            echo("Graves");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 120){
            echo("$q. ");
            ?>
            <img src="img/champion/Hecarim.png" alt="Hecarim" style="width:50px;height:50px">
            <?php
            echo("Hecarim");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 74){
            echo("$q. ");
            ?>
            <img src="img/champion/Heimerdinger.png" alt="Heimerdinger" style="width:50px;height:50px">
            <?php
            echo("Heimerdinger");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 420){
            echo("$q. ");
            ?>
            <img src="img/champion/Illaoi.png" alt="Illaoi" style="width:50px;height:50px">
            <?php
            echo("Illaoi");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 39){
            echo("$q. ");
            ?>
            <img src="img/champion/Irelia.png" alt="Irelia" style="width:50px;height:50px">
            <?php
            echo("Irelia");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 427){
            echo("$q. ");
            ?>
            <img src="img/champion/Ivern.png" alt="Ivern" style="width:50px;height:50px">
            <?php
            echo("Ivern");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 40){
            echo("$q. ");
            ?>
            <img src="img/champion/Janna.png" alt="Janna" style="width:50px;height:50px">
            <?php
            echo("Janna");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 59){
            echo("$q. ");
            ?>
            <img src="img/champion/JarvanIV.png" alt="Jarvan IV" style="width:50px;height:50px">
            <?php
            echo("Jarvan IV");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 24){
            echo("$q. ");
            ?>
            <img src="img/champion/Jax.png" alt="Jax" style="width:50px;height:50px">
            <?php
            echo("Jax");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 126){
            echo("$q. ");
            ?>
            <img src="img/champion/Jayce.png" alt="Jayce" style="width:50px;height:50px">
            <?php
            echo("Jayce");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 202){
            echo("$q. ");
            ?>
            <img src="img/champion/Jhin.png" alt="Jhin" style="width:50px;height:50px">
            <?php
            echo("Jhin");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 222){
            echo("$q. ");
            ?>
            <img src="img/champion/Jinx.png" alt="Jinx" style="width:50px;height:50px">
            <?php
            echo("Jinx");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 429){
            echo("$q. ");
            ?>
            <img src="img/champion/Kalista.png" alt="Kalista" style="width:50px;height:50px">
            <?php
            echo("Kalista");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 43){
            echo("$q. ");
            ?>
            <img src="img/champion/Karma.png" alt="Karma" style="width:50px;height:50px">
            <?php
            echo("Karma");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 30){
            echo("$q. ");
            ?>
            <img src="img/champion/Karthus.png" alt="Karthus" style="width:50px;height:50px">
            <?php
            echo("Karthus");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 38){
            echo("$q. ");
            ?>
            <img src="img/champion/Kassadin.png" alt="Kassadin" style="width:50px;height:50px">
            <?php
            echo("Kassadin");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 55){
            echo("$q. ");
            ?>
            <img src="img/champion/Katarina.png" alt="Katarina" style="width:50px;height:50px">
            <?php
            echo("Katarina");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 10){
            echo("$q. ");
            ?>
            <img src="img/champion/Kayle.png" alt="Kayle" style="width:50px;height:50px">
            <?php
            echo("Kayle");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 85){
            echo("$q. ");
            ?>
            <img src="img/champion/Kennen.png" alt="Kennen" style="width:50px;height:50px">
            <?php
            echo("Kennen");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 121){
            echo("$q. ");
            ?>
            <img src="img/champion/Khazix.png" alt="Kha'Zix" style="width:50px;height:50px">
            <?php
            echo("Kha'Zix");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 203){
            echo("$q. ");
            ?>
            <img src="img/champion/Kindred.png" alt="Kindred" style="width:50px;height:50px">
            <?php
            echo("Kindred");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 240){
            echo("$q. ");
            ?>
            <img src="img/champion/Kled.png" alt="Kled" style="width:50px;height:50px">
            <?php
            echo("Kled");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 96){
            echo("$q. ");
            ?>
            <img src="img/champion/KogMaw.png" alt="Kog'Maw" style="width:50px;height:50px">
            <?php
            echo("Kog'Maw");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 7){
            echo("$q. ");
            ?>
            <img src="img/champion/Leblanc.png" alt="LeBlanc" style="width:50px;height:50px">
            <?php
            echo("LeBlanc");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 64){
            echo("$q. ");
            ?>
            <img src="img/champion/LeeSin.png" alt="Lee Sin" style="width:50px;height:50px">
            <?php
            echo("Lee Sin");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 89){
            echo("$q. ");
            ?>
            <img src="img/champion/Leona.png" alt="Leona" style="width:50px;height:50px">
            <?php
            echo("Leona");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 127){
            echo("$q. ");
            ?>
            <img src="img/champion/Lissandra.png" alt="Lissandra" style="width:50px;height:50px">
            <?php
            echo("Lissandra");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 236){
            echo("$q. ");
            ?>
            <img src="img/champion/Lucian.png" alt="Lucian" style="width:50px;height:50px">
            <?php
            echo("Lucian");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 117){
            echo("$q. ");
            ?>
            <img src="img/champion/Lulu.png" alt="Lulu" style="width:50px;height:50px">
            <?php
            echo("Lulu");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 99){
            echo("$q. ");
            ?>
            <img src="img/champion/Lux.png" alt="Lux" style="width:50px;height:50px">
            <?php
            echo("Lux");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 54){
            echo("$q. ");
            ?>
            <img src="img/champion/Malphite.png" alt="Malphite" style="width:50px;height:50px">
            <?php
            echo("Malphite");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 90){
            echo("$q. ");
            ?>
            <img src="img/champion/Malzahar.png" alt="Malzahar" style="width:50px;height:50px">
            <?php
            echo("Malzahar");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 57){
            echo("$q. ");
            ?>
            <img src="img/champion/Maokai.png" alt="Maokai" style="width:50px;height:50px">
            <?php
            echo("Maokai");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 11){
            echo("$q. ");
            ?>
            <img src="img/champion/MasterYi.png" alt="Master Yi" style="width:50px;height:50px">
            <?php
            echo("Master Yi");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 21){
            echo("$q. ");
            ?>
            <img src="img/champion/MissFortune.png" alt="Miss Fortune" style="width:50px;height:50px">
            <?php
            echo("Miss Fortune");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 62){
            echo("$q. ");
            ?>
            <img src="img/champion/MonkeyKing.png" alt="Wukong" style="width:50px;height:50px">
            <?php
            echo("Wukong");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 82){
            echo("$q. ");
            ?>
            <img src="img/champion/Mordekaiser.png" alt="Mordekaiser" style="width:50px;height:50px">
            <?php
            echo("Mordekaiser");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 25){
            echo("$q. ");
            ?>
            <img src="img/champion/Morgana.png" alt="Morgana" style="width:50px;height:50px">
            <?php
            echo("Morgana");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 267){
            echo("$q. ");
            ?>
            <img src="img/champion/Nami.png" alt="Nami" style="width:50px;height:50px">
            <?php
            echo("Nami");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 75){
            echo("$q. ");
            ?>
            <img src="img/champion/Nasus.png" alt="Nasus" style="width:50px;height:50px">
            <?php
            echo("Nasus");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 111){
            echo("$q. ");
            ?>
            <img src="img/champion/Nautilus.png" alt="Nautilus" style="width:50px;height:50px">
            <?php
            echo("Nautilus");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 76){
            echo("$q. ");
            ?>
            <img src="img/champion/Nidalee.png" alt="Nidalee" style="width:50px;height:50px">
            <?php
            echo("Nidalee");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 56){
            echo("$q. ");
            ?>
            <img src="img/champion/Nocturne.png" alt="Nocturne" style="width:50px;height:50px">
            <?php
            echo("Nocturne");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 20){
            echo("$q. ");
            ?>
            <img src="img/champion/Nunu.png" alt="Nunu" style="width:50px;height:50px">
            <?php
            echo("Nunu & Willump");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 2){
            echo("$q. ");
            ?>
            <img src="img/champion/Olaf.png" alt="Olaf" style="width:50px;height:50px">
            <?php
            echo("Olaf");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 61){
            echo("$q. ");
            ?>
            <img src="img/champion/Orianna.png" alt="Orianna" style="width:50px;height:50px">
            <?php
            echo("Orianna");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 80){
            echo("$q. ");
            ?>
            <img src="img/champion/Pantheon.png" alt="Pantheon" style="width:50px;height:50px">
            <?php
            echo("Pantheon");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 78){
            echo("$q. ");
            ?>
            <img src="img/champion/Poppy.png" alt="Poppy" style="width:50px;height:50px">
            <?php
            echo("Poppy");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 133){
            echo("$q. ");
            ?>
            <img src="img/champion/Quinn.png" alt="Quinn" style="width:50px;height:50px">
            <?php
            echo("Quinn");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 33){
            echo("$q. ");
            ?>
            <img src="img/champion/Rammus.png" alt="Rammus" style="width:50px;height:50px">
            <?php
            echo("Rammus");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 421){
            echo("$q. ");
            ?>
            <img src="img/champion/RekSai.png" alt="Rek'Sai" style="width:50px;height:50px">
            <?php
            echo("Rek'Sai");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 58){
            echo("$q. ");
            ?>
            <img src="img/champion/Renekton.png" alt="Renekton" style="width:50px;height:50px">
            <?php
            echo("Renekton");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 107){
            echo("$q. ");
            ?>
            <img src="img/champion/Rengar.png" alt="Rengar" style="width:50px;height:50px">
            <?php
            echo("Rengar");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 92){
            echo("$q. ");
            ?>
            <img src="img/champion/Riven.png" alt="Riven" style="width:50px;height:50px">
            <?php
            echo("Riven");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 68){
            echo("$q. ");
            ?>
            <img src="img/champion/Rumble.png" alt="Rumble" style="width:50px;height:50px">
            <?php
            echo("Rumble");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 13){
            echo("$q. ");
            ?>
            <img src="img/champion/Ryze.png" alt="Ryze" style="width:50px;height:50px">
            <?php
            echo("Ryze");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 113){
            echo("$q. ");
            ?>
            <img src="img/champion/Sejuani.png" alt="Sejuani" style="width:50px;height:50px">
            <?php
            echo("Sejuani");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 35){
            echo("$q. ");
            ?>
            <img src="img/champion/Shaco.png" alt="Shaco" style="width:50px;height:50px">
            <?php
            echo("Shaco");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 98){
            echo("$q. ");
            ?>
            <img src="img/champion/Shen.png" alt="Shen" style="width:50px;height:50px">
            <?php
            echo("Shen");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 102){
            echo("$q. ");
            ?>
            <img src="img/champion/Shyvana.png" alt="Shyvana" style="width:50px;height:50px">
            <?php
            echo("Shyvana");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 27){
            echo("$q. ");
            ?>
            <img src="img/champion/Singed.png" alt="Singed" style="width:50px;height:50px">
            <?php
            echo("Singed");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 14){
            echo("$q. ");
            ?>
            <img src="img/champion/Sion.png" alt="Sion" style="width:50px;height:50px">
            <?php
            echo("Sion");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 15){
            echo("$q. ");
            ?>
            <img src="img/champion/Sivir.png" alt="Sivir" style="width:50px;height:50px">
            <?php
            echo("Sivir");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 72){
            echo("$q. ");
            ?>
            <img src="img/champion/Skarner.png" alt="Skarner" style="width:50px;height:50px">
            <?php
            echo("Skarner");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 37){
            echo("$q. ");
            ?>
            <img src="img/champion/Sona.png" alt="Sona" style="width:50px;height:50px">
            <?php
            echo("Sona");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 16){
            echo("$q. ");
            ?>
            <img src="img/champion/Soraka.png" alt="Soraka" style="width:50px;height:50px">
            <?php
            echo("Soraka");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 50){
            echo("$q. ");
            ?>
            <img src="img/champion/Swain.png" alt="Swain" style="width:50px;height:50px">
            <?php
            echo("Swain");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 134){
            echo("$q. ");
            ?>
            <img src="img/champion/Syndra.png" alt="Syndra" style="width:50px;height:50px">
            <?php
            echo("Syndra");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 223){
            echo("$q. ");
            ?>
            <img src="img/champion/TahmKench.png" alt="Tahm Kench" style="width:50px;height:50px">
            <?php
            echo("Tahm Kench");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 163){
            echo("$q. ");
            ?>
            <img src="img/champion/Taliyah.png" alt="Taliyah" style="width:50px;height:50px">
            <?php
            echo("Taliyah");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 91){
            echo("$q. ");
            ?>
            <img src="img/champion/Talon.png" alt="Talon" style="width:50px;height:50px">
            <?php
            echo("Talon");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 44){
            echo("$q. ");
            ?>
            <img src="img/champion/Taric.png" alt="Taric" style="width:50px;height:50px">
            <?php
            echo("Taric");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 17){
            echo("$q. ");
            ?>
            <img src="img/champion/Teemo.png" alt="Teemo" style="width:50px;height:50px">
            <?php
            echo("Teemo");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 412){
            echo("$q. ");
            ?>
            <img src="img/champion/Thresh.png" alt="Thresh" style="width:50px;height:50px">
            <?php
            echo("Thresh");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 18){
            echo("$q. ");
            ?>
            <img src="img/champion/Tristana.png" alt="Tristana" style="width:50px;height:50px">
            <?php
            echo("Tristana");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 48){
            echo("$q. ");
            ?>
            <img src="img/champion/Trundle.png" alt="Trundle" style="width:50px;height:50px">
            <?php
            echo("Trundle");
            ?>
            <br>
        <?php
        }
      if($resultData['ChampionMastery'][$i]['championId'] == 23){
        echo("$q. ");
        ?>
        <img src="img/champion/Tryndamere.png" alt="Tryndamere" style="width:50px;height:50px">
        <?php
        echo("Tryndamere");
        ?>
        <br>
    <?php
      }
        if($resultData['ChampionMastery'][$i]['championId'] == 4){
            echo("$q. ");
            ?>
            <img src="img/champion/TwistedFate.png" alt="Twisted Fate" style="width:50px;height:50px">
            <?php
            echo("Twisted Fate");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 29){
            echo("$q. ");
            ?>
            <img src="img/champion/Twitch.png" alt="Twitch" style="width:50px;height:50px">
            <?php
            echo("Twitch");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 77){
            echo("$q. ");
            ?>
            <img src="img/champion/Udyr.png" alt="Udyr" style="width:50px;height:50px">
            <?php
            echo("Udyr");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 6){
            echo("$q. ");
            ?>
            <img src="img/champion/Urgot.png" alt="Urgot" style="width:50px;height:50px">
            <?php
            echo("Urgot");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 110){
            echo("$q. ");
            ?>
            <img src="img/champion/Varus.png" alt="Varus" style="width:50px;height:50px">
            <?php
            echo("Varus");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 67){
            echo("$q. ");
            ?>
            <img src="img/champion/Vayne.png" alt="Vayne" style="width:50px;height:50px">
            <?php
            echo("Vayne");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 45){
            echo("$q. ");
            ?>
            <img src="img/champion/Veigar.png" alt="Veigar" style="width:50px;height:50px">
            <?php
            echo("Veigar");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 161){
            echo("$q. ");
            ?>
            <img src="img/champion/Velkoz.png" alt="Vel'Koz" style="width:50px;height:50px">
            <?php
            echo("Vel'Koz");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 254){
            echo("$q. ");
            ?>
            <img src="img/champion/Vi.png" alt="Vi" style="width:50px;height:50px">
            <?php
            echo("Vi");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 112){
            echo("$q. ");
            ?>
            <img src="img/champion/Viktor.png" alt="Viktor" style="width:50px;height:50px">
            <?php
            echo("Viktor");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 8){
            echo("$q. ");
            ?>
            <img src="img/champion/Vladimir.png" alt="Vladimir" style="width:50px;height:50px">
            <?php
            echo("Vladimir");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 106){
            echo("$q. ");
            ?>
            <img src="img/champion/Volibear.png" alt="Volibear" style="width:50px;height:50px">
            <?php
            echo("Volibear");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 19){
            echo("$q. ");
            ?>
            <img src="img/champion/Warwick.png" alt="Warwick" style="width:50px;height:50px">
            <?php
            echo("Warwick");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 101){
            echo("$q. ");
            ?>
            <img src="img/champion/Xerath.png" alt="Xerath" style="width:50px;height:50px">
            <?php
            echo("Xerath");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 5){
            echo("$q. ");
            ?>
            <img src="img/champion/XinZhao.png" alt="Xin Zhao" style="width:50px;height:50px">
            <?php
            echo("Xin Zhao");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 157){
            echo("$q. ");
            ?>
            <img src="img/champion/Yasuo.png" alt="Yasuo" style="width:50px;height:50px">
            <?php
            echo("Yasuo");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 83){
            echo("$q. ");
            ?>
            <img src="img/champion/Yorick.png" alt="Yorick" style="width:50px;height:50px">
            <?php
            echo("Yorick");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 154){
            echo("$q. ");
            ?>
            <img src="img/champion/Zac.png" alt="Zac" style="width:50px;height:50px">
            <?php
            echo("Zac");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 238){
            echo("$q. ");
            ?>
            <img src="img/champion/Zed.png" alt="Zed" style="width:50px;height:50px">
            <?php
            echo("Zed");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 115){
            echo("$q. ");
            ?>
            <img src="img/champion/Ziggs.png" alt="Ziggs" style="width:50px;height:50px">
            <?php
            echo("Ziggs");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 26){
            echo("$q. ");
            ?>
            <img src="img/champion/Zilean.png" alt="Zilean" style="width:50px;height:50px">
            <?php
            echo("Zilean");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 143){
            echo("$q. ");
            ?>
            <img src="img/champion/Zyra.png" alt="Zyra" style="width:50px;height:50px">
            <?php
            echo("Zyra");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 518){
            echo("$q. ");
            ?>
            <img src="img/champion/Neeko.png" alt="Neeko" style="width:50px;height:50px">
            <?php
            echo("Neeko");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 350){
            echo("$q. ");
            ?>
            <img src="img/champion/Yuumi.png" alt="Yuumi" style="width:50px;height:50px">
            <?php
            echo("Yuumi");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 497){
            echo("$q. ");
            ?>
            <img src="img/champion/Rakan.png" alt="Rakan" style="width:50px;height:50px">
            <?php
            echo("Rakan");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 498){
            echo("$q. ");
            ?>
            <img src="img/champion/Xayah.png" alt="Xayah" style="width:50px;height:50px">
            <?php
            echo("Xayah");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 142){
            echo("$q. ");
            ?>
            <img src="img/champion/Zoe.png" alt="Zoe" style="width:50px;height:50px">
            <?php
            echo("Zoe");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 555){
            echo("$q. ");
            ?>
            <img src="img/champion/Pyke.png" alt="Pyke" style="width:50px;height:50px">
            <?php
            echo("Pyke");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 516){
            echo("$q. ");
            ?>
            <img src="img/champion/Ornn.png" alt="Ornn" style="width:50px;height:50px">
            <?php
            echo("Ornn");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 517){
            echo("$q. ");
            ?>
            <img src="img/champion/Sylas.png" alt="Sylas" style="width:50px;height:50px">
            <?php
            echo("Sylas");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 141){
            echo("$q. ");
            ?>
            <img src="img/champion/Kayn.png" alt="Kayn" style="width:50px;height:50px">
            <?php
            echo("Kayn");
            ?>
            <br>
        <?php
        }
        if($resultData['ChampionMastery'][$i]['championId'] == 145){
            echo("$q. ");
            ?>
            <img src="img/champion/Kaisa.png" alt="Kai'Sa" style="width:50px;height:50px">
            <?php
            echo("Kai'Sa");
            ?>
            <br>
        <?php
        }

        $ChampionMasteryLevel = $resultData['ChampionMastery'][$i]['championLevel'];
        $MasteryPoints = $resultData['ChampionMastery'][$i]['championPoints'];
        $ChestEarned = $resultData['ChampionMastery'][$i]['chestGranted'];
        $pointsToNext = $resultData['ChampionMastery'][$i]['championPointsUntilNextLevel'];
        #print_r($resultData['ChampionMastery'][$i]);

        echo("      Mastery Level: $ChampionMasteryLevel at $MasteryPoints points.");
        ?>
        <br>
        <?php
        echo("      Points to Next Mastery Level: $pointsToNext.");
        ?>
        <br>
        <?php
        if($ChestEarned == 1){
            echo("      Chest Earned: YES");
        }
        if($ChestEarned == NULL){
           echo("      Chest Earned: NO");
        }

        #END OF 3 COLUMN FORMATTING
        if($i%3 < 2){
            ?>
            </div>
            <?php
        }
        if($i%3 == 2){
            ?>
            </div>
            </div>
            </div>
            <?php
        }
        ?>
        
        <br>
        <br>
        <?php
    }
  
    ?>
    </body>
</html>
