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
#CHAMPION SPECIFIC STATS:

#Search Bar to pick a champion


?>


<h2>Champion Search</h2>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <select style="width:50%;" name="Champion">
    <option value="266">Aatrox</option>
    <option value="103">Ahri</option>
    <option value="84">Akali</option>
    <option value="12">Alistar</option>
    <option value="32">Amumu</option>
    <option value="34">Anivia</option>
    <option value="1">Annie</option>
    <option value="22">Ashe</option>
    <option value="136">Aurelion Sol</option>
    <option value="268">Azir</option>
    <option value="432">Bard</option>
    <option value="53">Blitzcrank</option>
    <option value="63">Brand</option>
    <option value="201">Braum</option>
    <option value="51">Caitlyn</option>
    <option value="164">Camille</option>
    <option value="69">Cassiopeia</option>
    <option value="31">Cho'Gath</option>
    <option value="42">Corki</option>
    <option value="122">Darius</option>
    <option value="131">Diana</option>
    <option value="119">Draven</option>
    <option value="36">Dr. Mundo</option>
    <option value="245">Ekko</option>
    <option value="60">Elise</option>
    <option value="28">Evelynn</option>
    <option value="81">Ezreal</option>
    <option value="9">Fiddlesticks</option>
    <option value="114">Fiora</option>
    <option value="105">Fizz</option>
    <option value="3">Galio</option>
    <option value="41">Gangplank</option>
    <option value="86">Garen</option>
    <option value="150">Gnar</option>
    <option value="79">Gragas</option>
    <option value="104">Graves</option>
    <option value="120">Hecarim</option>
    <option value="74">Heimerdinger</option>
    <option value="420">Illaoi</option>
    <option value="39">Irelia</option>
    <option value="427">Ivern</option>
    <option value="40">Janna</option>
    <option value="59">Jarvan IV</option>
    <option value="24">Jax</option>
    <option value="126">Jayce</option>
    <option value="202">Jhin</option>
    <option value="222">Jinx</option>
    <option value="145">Kai'Sa</option>
    <option value="429">Kalista</option>
    <option value="43">Karma</option>
    <option value="30">Karthus</option>
    <option value="38">Kassadin</option>
    <option value="55">Katarina</option>
    <option value="10">Kayle</option>
    <option value="141">Kayn</option>
    <option value="85">Kennen</option>
    <option value="121">Kha'Zix</option>
    <option value="203">Kindred</option>
    <option value="240">Kled</option>
    <option value="96">Kog'Maw</option>
    <option value="7">LeBlanc</option>
    <option value="64">Lee Sin</option>
    <option value="89">Leona</option>
    <option value="127">Lissandra</option>
    <option value="236">Lucian</option>
    <option value="117">Lulu</option>
    <option value="99">Lux</option>
    <option value="54">Malphite</option>
    <option value="90">Malzahar</option>
    <option value="57">Maokai</option>
    <option value="11">Master Yi</option>
    <option value="21">Miss Fortune</option>
    <option value="82">Mordekaiser</option>
    <option value="25">Morgana</option>
    <option value="267">Nami</option>
    <option value="75">Nasus</option>
    <option value="111">Nautilus</option>
    <option value="518">Neeko</option>
    <option value="76">Nidalee</option>
    <option value="56">Nocturne</option>
    <option value="20">Nunu & Willump</option>
    <option value="2">Olaf</option>
    <option value="61">Orianna</option>
    <option value="516">Ornn</option>
    <option value="80">Pantheon</option>
    <option value="78">Poppy</option>
    <option value="555">Pyke</option>
    <option value="133">Quinn</option>
    <option value="497">Rakan</option>
    <option value="33">Rammus</option>
    <option value="421">Rek'Sai</option>
    <option value="58">Renekton</option>
    <option value="107">Rengar</option>
    <option value="92">Riven</option>
    <option value="68">Rumble</option>
    <option value="13">Ryze</option>
    <option value="113">Sejuani</option>
    <option value="35">Shaco</option>
    <option value="98">Shen</option>
    <option value="102">Shyvana</option>
    <option value="27">Singed</option>
    <option value="14">Sion</option>
    <option value="15">Sivir</option>
    <option value="72">Skarner</option>
    <option value="37">Sona</option>
    <option value="16">Soraka</option>
    <option value="50">Swain</option>
    <option value="517">Sylas</option>
    <option value="134">Syndra</option>
    <option value="233">Tahm Kench</option>
    <option value="163">Taliyah</option>
    <option value="91">Talon</option>
    <option value="44">Taric</option>
    <option value="17">Teemo</option>
    <option value="412">Thresh</option>
    <option value="18">Tristana</option>
    <option value="48">Trundle</option>
    <option value="23">Tryndamere</option>
    <option value="4">Twisted Fate</option>
    <option value="29">Twitch</option>
    <option value="77">Udyr</option>
    <option value="6">Urgot</option>
    <option value="110">Varus</option>
    <option value="67">Vayne</option>
    <option value="45">Veigar</option>
    <option value="161">Vel'Koz</option>
    <option value="254">Vi</option>
    <option value="112">Viktor</option>
    <option value="8">Vladimir</option>
    <option value="106">Volibear</option>
    <option value="19">Warwick</option>
    <option value="62">Wukong</option>
    <option value="498">Xayah</option>
    <option value="101">Xerath</option>
    <option value="5">Xin Zhao</option>
    <option value="157">Yasuo</option>
    <option value="83">Yorick</option>
    <option value="350">Yuumi</option>
    <option value="154">Zac</option>
    <option value="238">Zed</option>
    <option value="115">Ziggs</option>
    <option value="26">Zilean</option>
    <option value="142">Zoe</option>
    <option value="143">Zyra</option>
  </select>
  <input type="submit" name="submit" value="Go">
</form>


<?php
  if(isset($_POST['submit'])){
	
    switch($_POST['submit']){
      case 'Go': helper(); break;
    }
  }
?>

<?php
function jsonDecode($json, $assoc = TRUE)
{
    $ret = json_decode($json, $assoc);
    if ($error = json_last_error())
    {
        $errorReference = [
            JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded.',
            JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON.',
            JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded.',
            JSON_ERROR_SYNTAX => 'Syntax error.',
            JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded.',
            JSON_ERROR_RECURSION => 'One or more recursive references in the value to be encoded.',
            JSON_ERROR_INF_OR_NAN => 'One or more NAN or INF values in the value to be encoded.',
            JSON_ERROR_UNSUPPORTED_TYPE => 'A value of a type that cannot be encoded was given.',
        ];
        $errStr = isset($errorReference[$error]) ? $errorReference[$error] : "Unknown error ($error)";
        throw new \Exception("JSON decode error ($error): $errStr");
    }
    return $ret;
}

function helper(){
    $champion = $_POST['Champion'];

    #echo($_SESSION['apiKey']);
    #echo($_SESSION['summonerName']);
    #echo($_SESSION['region']);
    #echo($champion);
    

    #SEND DATA TO PYTHON
    $data = array($champion, $_SESSION['apiKey'], $_SESSION['summonerName'], $_SESSION['region']);

    #DO THE COMMAND LINE TO RUN PYTHON
    
    $result = shell_exec('/Library/Frameworks/Python.framework/Versions/3.7/bin/python3 /Applications/XAMPP/xamppfiles/htdocs/LoLTracker/APIGrabber2.py ' . escapeshellarg(json_encode($data)));
    
    #GET THE RESULT OF PYTHON AS A NESTED ARRAY
    $resultData2 = (array) json_decode($result, TRUE);

    $_SESSION['resultData2'] = $resultData2;

    $results = $_SESSION['resultData2'];

    if(isset($results['ChampionID']['totalGames'])){
      $size = $results['ChampionID']['totalGames'];
    }
    if(!isset($results['ChampionID']['totalGames'])){
      ?>
      <h3> NO GAMES PLAYED ON THIS CHAMPION</h3>
      <?php
      exit();
    }
      
    $totalGames = $results['ChampionID']['totalGames'];
    $size = $results['ChampionID']['totalGames'];
    if($size > 10){
      $size = 10;
    }

    #print_r($results['ChampionID']);
    $data2 = array($champion, $_SESSION['apiKey'], $_SESSION['summonerName'], $_SESSION['region'], $size);
    ?>
    <?php
    #print_r($size);
    ?>
    <?php
    for($i = 0; $i<$size; $i++){
      array_push($data2, $results['ChampionID']['matches'][$i]['gameId']);
      ?>
      <?php
    }

    $result2 = shell_exec('/Library/Frameworks/Python.framework/Versions/3.7/bin/python3 /Applications/XAMPP/xamppfiles/htdocs/LoLTracker/APIGrabber3.py ' . escapeshellarg(json_encode($data2)));
    
    $result2 = stripslashes(html_entity_decode($result2));

    $resultData3 = (array) jsonDecode($result2, TRUE);

    ?>
    <div class="headerCols">
      <div class="row">
        <div class="col-md-6">
        <h3>All Stats Totalled Over Last <?php echo($size); ?> Games</h3>
        </div>
        <div class="col-md-6">
        <h3>Total Games On This Champion: <?php echo($totalGames); ?></h3>
        </div>
      </div>
    </div>

    <?php

    if($champion == 266){
      
      ?>
      <img src="img/champion/Aatrox.png" alt="Aatrox" style="width:100px;height:100px">
      <?php
      echo("Aatrox");
      ?>
      <br>
  <?php
  }
  if($champion == 103){
      
      ?>
      <img src="img/champion/Ahri.png" alt="Ahri" style="width:100px;height:100px">
      <?php
      echo("Ahri");
      ?>
      <br>
  <?php
  }
  if($champion == 84){
      
      ?>
      <img src="img/champion/Akali.png" alt="Akali" style="width:100px;height:100px">
      <?php
      echo("Akali");
      ?>
      <br>
  <?php
  }
  if($champion == 12){
      
      ?>
      <img src="img/champion/Alistar.png" alt="Alistar" style="width:100px;height:100px">
      <?php
      echo("Alistar");
      ?>
      <br>
  <?php
    }
  if($champion == 32){
      
      ?>
      <img src="img/champion/Amumu.png" alt="Amumu" style="width:100px;height:100px">
      <?php
      echo("Amumu");
      ?>
      <br>
  <?php
  }
  if($champion == 34){
      
      ?>
      <img src="img/champion/Anivia.png" alt="Anivia" style="width:100px;height:100px">
      <?php
      echo("Anivia");
      ?>
      <br>
  <?php
  }
  if($champion == 1){
      
      ?>
      <img src="img/champion/Annie.png" alt="Annie" style="width:100px;height:100px">
      <?php
      echo("Annie");
      ?>
      <br>
  <?php
  }
  if($champion == 22){
      
      ?>
      <img src="img/champion/Ashe.png" alt="Ashe" style="width:100px;height:100px">
      <?php
      echo("Ashe");
      ?>
      <br>
  <?php
  }
  if($champion == 136){
      
      ?>
      <img src="img/champion/AurelionSol.png" alt="Aurelion Sol" style="width:100px;height:100px">
      <?php
      echo("Aurelion Sol");
      ?>
      <br>
  <?php
  }
  if($champion == 268){
      
      ?>
      <img src="img/champion/Azir.png" alt="Azir" style="width:100px;height:100px">
      <?php
      echo("Azir");
      ?>
      <br>
  <?php
  }
  if($champion == 432){
      
      ?>
      <img src="img/champion/Bard.png" alt="Bard" style="width:100px;height:100px">
      <?php
      echo("Bard");
      ?>
      <br>
  <?php
  }
  if($champion == 53){
      
      ?>
      <img src="img/champion/Blitzcrank.png" alt="Blitzcrank" style="width:100px;height:100px">
      <?php
      echo("Blitzcrank");
      ?>
      <br>
  <?php
  }
  if($champion == 63){
      
      ?>
      <img src="img/champion/Brand.png" alt="Brand" style="width:100px;height:100px">
      <?php
      echo("Brand");
      ?>
      <br>
  <?php
  }
  if($champion == 201){
      
      ?>
      <img src="img/champion/Braum.png" alt="Braum" style="width:100px;height:100px">
      <?php
      echo("Braum");
      ?>
      <br>
  <?php
  }
  if($champion == 51){
      
      ?>
      <img src="img/champion/Caitlyn.png" alt="Caitlyn" style="width:100px;height:100px">
      <?php
      echo("Caitlyn");
      ?>
      <br>
  <?php
  }
  if($champion == 164){
      
      ?>
      <img src="img/champion/Camille.png" alt="Camille" style="width:100px;height:100px">
      <?php
      echo("Camille");
      ?>
      <br>
  <?php
  }
  if($champion == 69){
      
      ?>
      <img src="img/champion/Cassiopeia.png" alt="Cassiopeia" style="width:100px;height:100px">
      <?php
      echo("Cassiopeia");
      ?>
      <br>
  <?php
  }
  if($champion == 31){
      
      ?>
      <img src="img/champion/Chogath.png" alt="Cho'Gath" style="width:100px;height:100px">
      <?php
      echo("Cho'Gath");
      ?>
      <br>
  <?php
  }
  if($champion == 42){
      
      ?>
      <img src="img/champion/Corki.png" alt="Corki" style="width:100px;height:100px">
      <?php
      echo("Corki");
      ?>
      <br>
  <?php
  }
  if($champion == 122){
      
      ?>
      <img src="img/champion/Darius.png" alt="Darius" style="width:100px;height:100px">
      <?php
      echo("Darius");
      ?>
      <br>
  <?php
  }
  if($champion == 131){
      
      ?>
      <img src="img/champion/Diana.png" alt="Diana" style="width:100px;height:100px">
      <?php
      echo("Diana");
      ?>
      <br>
  <?php
  }
  if($champion == 119){
      
      ?>
      <img src="img/champion/Draven.png" alt="Draven" style="width:100px;height:100px">
      <?php
      echo("Draven");
      ?>
      <br>
  <?php
  }
if($champion == 36){
  
  ?>
  <img src="img/champion/DrMundo.png" alt="Dr. Mundo" style="width:100px;height:100px">
  <?php
  echo("Dr. Mundo");
  ?>
  <br>
<?php
}
  if($champion == 245){
      
      ?>
      <img src="img/champion/Ekko.png" alt="Ekko" style="width:100px;height:100px">
      <?php
      echo("Ekko");
      ?>
      <br>
  <?php
  }
  if($champion == 60){
      
      ?>
      <img src="img/champion/Elise.png" alt="Elise" style="width:100px;height:100px">
      <?php
      echo("Elise");
      ?>
      <br>
  <?php
  }
  if($champion == 28){
      
      ?>
      <img src="img/champion/Evelynn.png" alt="Evelynn" style="width:100px;height:100px">
      <?php
      echo("Evelynn");
      ?>
      <br>
  <?php
  }
  if($champion == 81){
      
      ?>
      <img src="img/champion/Ezreal.png" alt="Ezreal" style="width:100px;height:100px">
      <?php
      echo("Ezreal");
      ?>
      <br>
  <?php
  }
  if($champion == 9){
      
      ?>
      <img src="img/champion/FiddleSticks.png" alt="Fiddlesticks" style="width:100px;height:100px">
      <?php
      echo("Fiddlesticks");
      ?>
      <br>
  <?php
  }
  if($champion == 114){
      
      ?>
      <img src="img/champion/Fiora.png" alt="Fiora" style="width:100px;height:100px">
      <?php
      echo("Fiora");
      ?>
      <br>
  <?php
  }
  if($champion == 105){
      
      ?>
      <img src="img/champion/Fizz.png" alt="Fizz" style="width:100px;height:100px">
      <?php
      echo("Fizz");
      ?>
      <br>
  <?php
  }
  if($champion == 3){
      
      ?>
      <img src="img/champion/Galio.png" alt="Galio" style="width:100px;height:100px">
      <?php
      echo("Galio");
      ?>
      <br>
  <?php
  }
  if($champion == 41){
      
      ?>
      <img src="img/champion/Gangplank.png" alt="Gangplank" style="width:100px;height:100px">
      <?php
      echo("Gangplank");
      ?>
      <br>
  <?php
  }
  if($champion == 86){
      
      ?>
      <img src="img/champion/Garen.png" alt="Garen" style="width:100px;height:100px">
      <?php
      echo("Garen");
      ?>
      <br>
  <?php
  }
  if($champion == 150){
      
      ?>
      <img src="img/champion/Gnar.png" alt="Gnar" style="width:100px;height:100px">
      <?php
      echo("Gnar");
      ?>
      <br>
  <?php
  }
  if($champion == 79){
      
      ?>
      <img src="img/champion/Gragas.png" alt="Gragas" style="width:100px;height:100px">
      <?php
      echo("Gragas");
      ?>
      <br>
  <?php
  }
  if($champion == 104){
      
      ?>
      <img src="img/champion/Graves.png" alt="Graves" style="width:100px;height:100px">
      <?php
      echo("Graves");
      ?>
      <br>
  <?php
  }
  if($champion == 120){
      
      ?>
      <img src="img/champion/Hecarim.png" alt="Hecarim" style="width:100px;height:100px">
      <?php
      echo("Hecarim");
      ?>
      <br>
  <?php
  }
  if($champion == 74){
      
      ?>
      <img src="img/champion/Heimerdinger.png" alt="Heimerdinger" style="width:100px;height:100px">
      <?php
      echo("Heimerdinger");
      ?>
      <br>
  <?php
  }
  if($champion == 420){
      
      ?>
      <img src="img/champion/Illaoi.png" alt="Illaoi" style="width:100px;height:100px">
      <?php
      echo("Illaoi");
      ?>
      <br>
  <?php
  }
  if($champion == 39){
      
      ?>
      <img src="img/champion/Irelia.png" alt="Irelia" style="width:100px;height:100px">
      <?php
      echo("Irelia");
      ?>
      <br>
  <?php
  }
  if($champion == 427){
      
      ?>
      <img src="img/champion/Ivern.png" alt="Ivern" style="width:100px;height:100px">
      <?php
      echo("Ivern");
      ?>
      <br>
  <?php
  }
  if($champion == 40){
      
      ?>
      <img src="img/champion/Janna.png" alt="Janna" style="width:100px;height:100px">
      <?php
      echo("Janna");
      ?>
      <br>
  <?php
  }
  if($champion == 59){
      
      ?>
      <img src="img/champion/JarvanIV.png" alt="Jarvan IV" style="width:100px;height:100px">
      <?php
      echo("Jarvan IV");
      ?>
      <br>
  <?php
  }
  if($champion == 24){
      
      ?>
      <img src="img/champion/Jax.png" alt="Jax" style="width:100px;height:100px">
      <?php
      echo("Jax");
      ?>
      <br>
  <?php
  }
  if($champion == 126){
      
      ?>
      <img src="img/champion/Jayce.png" alt="Jayce" style="width:100px;height:100px">
      <?php
      echo("Jayce");
      ?>
      <br>
  <?php
  }
  if($champion == 202){
      
      ?>
      <img src="img/champion/Jhin.png" alt="Jhin" style="width:100px;height:100px">
      <?php
      echo("Jhin");
      ?>
      <br>
  <?php
  }
  if($champion == 222){
      
      ?>
      <img src="img/champion/Jinx.png" alt="Jinx" style="width:100px;height:100px">
      <?php
      echo("Jinx");
      ?>
      <br>
  <?php
  }
  if($champion == 429){
      
      ?>
      <img src="img/champion/Kalista.png" alt="Kalista" style="width:100px;height:100px">
      <?php
      echo("Kalista");
      ?>
      <br>
  <?php
  }
  if($champion == 43){
      
      ?>
      <img src="img/champion/Karma.png" alt="Karma" style="width:100px;height:100px">
      <?php
      echo("Karma");
      ?>
      <br>
  <?php
  }
  if($champion == 30){
      
      ?>
      <img src="img/champion/Karthus.png" alt="Karthus" style="width:100px;height:100px">
      <?php
      echo("Karthus");
      ?>
      <br>
  <?php
  }
  if($champion == 38){
      
      ?>
      <img src="img/champion/Kassadin.png" alt="Kassadin" style="width:100px;height:100px">
      <?php
      echo("Kassadin");
      ?>
      <br>
  <?php
  }
  if($champion == 55){
      
      ?>
      <img src="img/champion/Katarina.png" alt="Katarina" style="width:100px;height:100px">
      <?php
      echo("Katarina");
      ?>
      <br>
  <?php
  }
  if($champion == 10){
      
      ?>
      <img src="img/champion/Kayle.png" alt="Kayle" style="width:100px;height:100px">
      <?php
      echo("Kayle");
      ?>
      <br>
  <?php
  }
  if($champion == 85){
      
      ?>
      <img src="img/champion/Kennen.png" alt="Kennen" style="width:100px;height:100px">
      <?php
      echo("Kennen");
      ?>
      <br>
  <?php
  }
  if($champion == 121){
      
      ?>
      <img src="img/champion/Khazix.png" alt="Kha'Zix" style="width:100px;height:100px">
      <?php
      echo("Kha'Zix");
      ?>
      <br>
  <?php
  }
  if($champion == 203){
      
      ?>
      <img src="img/champion/Kindred.png" alt="Kindred" style="width:100px;height:100px">
      <?php
      echo("Kindred");
      ?>
      <br>
  <?php
  }
  if($champion == 240){
      
      ?>
      <img src="img/champion/Kled.png" alt="Kled" style="width:100px;height:100px">
      <?php
      echo("Kled");
      ?>
      <br>
  <?php
  }
  if($champion == 96){
      
      ?>
      <img src="img/champion/KogMaw.png" alt="Kog'Maw" style="width:100px;height:100px">
      <?php
      echo("Kog'Maw");
      ?>
      <br>
  <?php
  }
  if($champion == 7){
      
      ?>
      <img src="img/champion/Leblanc.png" alt="LeBlanc" style="width:100px;height:100px">
      <?php
      echo("LeBlanc");
      ?>
      <br>
  <?php
  }
  if($champion == 64){
      
      ?>
      <img src="img/champion/LeeSin.png" alt="Lee Sin" style="width:100px;height:100px">
      <?php
      echo("Lee Sin");
      ?>
      <br>
  <?php
  }
  if($champion == 89){
      
      ?>
      <img src="img/champion/Leona.png" alt="Leona" style="width:100px;height:100px">
      <?php
      echo("Leona");
      ?>
      <br>
  <?php
  }
  if($champion == 127){
      
      ?>
      <img src="img/champion/Lissandra.png" alt="Lissandra" style="width:100px;height:100px">
      <?php
      echo("Lissandra");
      ?>
      <br>
  <?php
  }
  if($champion == 236){
      
      ?>
      <img src="img/champion/Lucian.png" alt="Lucian" style="width:100px;height:100px">
      <?php
      echo("Lucian");
      ?>
      <br>
  <?php
  }
  if($champion == 117){
      
      ?>
      <img src="img/champion/Lulu.png" alt="Lulu" style="width:100px;height:100px">
      <?php
      echo("Lulu");
      ?>
      <br>
  <?php
  }
  if($champion == 99){
      
      ?>
      <img src="img/champion/Lux.png" alt="Lux" style="width:100px;height:100px">
      <?php
      echo("Lux");
      ?>
      <br>
  <?php
  }
  if($champion == 54){
      
      ?>
      <img src="img/champion/Malphite.png" alt="Malphite" style="width:100px;height:100px">
      <?php
      echo("Malphite");
      ?>
      <br>
  <?php
  }
  if($champion == 90){
      
      ?>
      <img src="img/champion/Malzahar.png" alt="Malzahar" style="width:100px;height:100px">
      <?php
      echo("Malzahar");
      ?>
      <br>
  <?php
  }
  if($champion == 57){
      
      ?>
      <img src="img/champion/Maokai.png" alt="Maokai" style="width:100px;height:100px">
      <?php
      echo("Maokai");
      ?>
      <br>
  <?php
  }
  if($champion == 11){
      
      ?>
      <img src="img/champion/MasterYi.png" alt="Master Yi" style="width:100px;height:100px">
      <?php
      echo("Master Yi");
      ?>
      <br>
  <?php
  }
  if($champion == 21){
      
      ?>
      <img src="img/champion/MissFortune.png" alt="Miss Fortune" style="width:100px;height:100px">
      <?php
      echo("Miss Fortune");
      ?>
      <br>
  <?php
  }
  if($champion == 62){
      
      ?>
      <img src="img/champion/MonkeyKing.png" alt="Wukong" style="width:100px;height:100px">
      <?php
      echo("Wukong");
      ?>
      <br>
  <?php
  }
  if($champion == 82){
      
      ?>
      <img src="img/champion/Mordekaiser.png" alt="Mordekaiser" style="width:100px;height:100px">
      <?php
      echo("Mordekaiser");
      ?>
      <br>
  <?php
  }
  if($champion == 25){
      
      ?>
      <img src="img/champion/Morgana.png" alt="Morgana" style="width:100px;height:100px">
      <?php
      echo("Morgana");
      ?>
      <br>
  <?php
  }
  if($champion == 267){
      
      ?>
      <img src="img/champion/Nami.png" alt="Nami" style="width:100px;height:100px">
      <?php
      echo("Nami");
      ?>
      <br>
  <?php
  }
  if($champion == 75){
      
      ?>
      <img src="img/champion/Nasus.png" alt="Nasus" style="width:100px;height:100px">
      <?php
      echo("Nasus");
      ?>
      <br>
  <?php
  }
  if($champion == 111){
      
      ?>
      <img src="img/champion/Nautilus.png" alt="Nautilus" style="width:100px;height:100px">
      <?php
      echo("Nautilus");
      ?>
      <br>
  <?php
  }
  if($champion == 76){
      
      ?>
      <img src="img/champion/Nidalee.png" alt="Nidalee" style="width:100px;height:100px">
      <?php
      echo("Nidalee");
      ?>
      <br>
  <?php
  }
  if($champion == 56){
      
      ?>
      <img src="img/champion/Nocturne.png" alt="Nocturne" style="width:100px;height:100px">
      <?php
      echo("Nocturne");
      ?>
      <br>
  <?php
  }
  if($champion == 20){
      
      ?>
      <img src="img/champion/Nunu.png" alt="Nunu" style="width:100px;height:100px">
      <?php
      echo("Nunu & Willump");
      ?>
      <br>
  <?php
  }
  if($champion == 2){
      
      ?>
      <img src="img/champion/Olaf.png" alt="Olaf" style="width:100px;height:100px">
      <?php
      echo("Olaf");
      ?>
      <br>
  <?php
  }
  if($champion == 61){
      
      ?>
      <img src="img/champion/Orianna.png" alt="Orianna" style="width:100px;height:100px">
      <?php
      echo("Orianna");
      ?>
      <br>
  <?php
  }
  if($champion == 80){
      
      ?>
      <img src="img/champion/Pantheon.png" alt="Pantheon" style="width:100px;height:100px">
      <?php
      echo("Pantheon");
      ?>
      <br>
  <?php
  }
  if($champion == 78){
      
      ?>
      <img src="img/champion/Poppy.png" alt="Poppy" style="width:100px;height:100px">
      <?php
      echo("Poppy");
      ?>
      <br>
  <?php
  }
  if($champion == 133){
      
      ?>
      <img src="img/champion/Quinn.png" alt="Quinn" style="width:100px;height:100px">
      <?php
      echo("Quinn");
      ?>
      <br>
  <?php
  }
  if($champion == 33){
      
      ?>
      <img src="img/champion/Rammus.png" alt="Rammus" style="width:100px;height:100px">
      <?php
      echo("Rammus");
      ?>
      <br>
  <?php
  }
  if($champion == 421){
      
      ?>
      <img src="img/champion/RekSai.png" alt="Rek'Sai" style="width:100px;height:100px">
      <?php
      echo("Rek'Sai");
      ?>
      <br>
  <?php
  }
  if($champion == 58){
      
      ?>
      <img src="img/champion/Renekton.png" alt="Renekton" style="width:100px;height:100px">
      <?php
      echo("Renekton");
      ?>
      <br>
  <?php
  }
  if($champion == 107){
      
      ?>
      <img src="img/champion/Rengar.png" alt="Rengar" style="width:100px;height:100px">
      <?php
      echo("Rengar");
      ?>
      <br>
  <?php
  }
  if($champion == 92){
      
      ?>
      <img src="img/champion/Riven.png" alt="Riven" style="width:100px;height:100px">
      <?php
      echo("Riven");
      ?>
      <br>
  <?php
  }
  if($champion == 68){
      
      ?>
      <img src="img/champion/Rumble.png" alt="Rumble" style="width:100px;height:100px">
      <?php
      echo("Rumble");
      ?>
      <br>
  <?php
  }
  if($champion == 13){
      
      ?>
      <img src="img/champion/Ryze.png" alt="Ryze" style="width:100px;height:100px">
      <?php
      echo("Ryze");
      ?>
      <br>
  <?php
  }
  if($champion == 113){
      
      ?>
      <img src="img/champion/Sejuani.png" alt="Sejuani" style="width:100px;height:100px">
      <?php
      echo("Sejuani");
      ?>
      <br>
  <?php
  }
  if($champion == 35){
      
      ?>
      <img src="img/champion/Shaco.png" alt="Shaco" style="width:100px;height:100px">
      <?php
      echo("Shaco");
      ?>
      <br>
  <?php
  }
  if($champion == 98){
      
      ?>
      <img src="img/champion/Shen.png" alt="Shen" style="width:100px;height:100px">
      <?php
      echo("Shen");
      ?>
      <br>
  <?php
  }
  if($champion == 102){
      
      ?>
      <img src="img/champion/Shyvana.png" alt="Shyvana" style="width:100px;height:100px">
      <?php
      echo("Shyvana");
      ?>
      <br>
  <?php
  }
  if($champion == 27){
      
      ?>
      <img src="img/champion/Singed.png" alt="Singed" style="width:100px;height:100px">
      <?php
      echo("Singed");
      ?>
      <br>
  <?php
  }
  if($champion == 14){
      
      ?>
      <img src="img/champion/Sion.png" alt="Sion" style="width:100px;height:100px">
      <?php
      echo("Sion");
      ?>
      <br>
  <?php
  }
  if($champion == 15){
      
      ?>
      <img src="img/champion/Sivir.png" alt="Sivir" style="width:100px;height:100px">
      <?php
      echo("Sivir");
      ?>
      <br>
  <?php
  }
  if($champion == 72){
      
      ?>
      <img src="img/champion/Skarner.png" alt="Skarner" style="width:100px;height:100px">
      <?php
      echo("Skarner");
      ?>
      <br>
  <?php
  }
  if($champion == 37){
      
      ?>
      <img src="img/champion/Sona.png" alt="Sona" style="width:100px;height:100px">
      <?php
      echo("Sona");
      ?>
      <br>
  <?php
  }
  if($champion == 16){
      
      ?>
      <img src="img/champion/Soraka.png" alt="Soraka" style="width:100px;height:100px">
      <?php
      echo("Soraka");
      ?>
      <br>
  <?php
  }
  if($champion == 50){
      
      ?>
      <img src="img/champion/Swain.png" alt="Swain" style="width:100px;height:100px">
      <?php
      echo("Swain");
      ?>
      <br>
  <?php
  }
  if($champion == 134){
      
      ?>
      <img src="img/champion/Syndra.png" alt="Syndra" style="width:100px;height:100px">
      <?php
      echo("Syndra");
      ?>
      <br>
  <?php
  }
  if($champion == 223){
      
      ?>
      <img src="img/champion/TahmKench.png" alt="Tahm Kench" style="width:100px;height:100px">
      <?php
      echo("Tahm Kench");
      ?>
      <br>
  <?php
  }
  if($champion == 163){
      
      ?>
      <img src="img/champion/Taliyah.png" alt="Taliyah" style="width:100px;height:100px">
      <?php
      echo("Taliyah");
      ?>
      <br>
  <?php
  }
  if($champion == 91){
      
      ?>
      <img src="img/champion/Talon.png" alt="Talon" style="width:100px;height:100px">
      <?php
      echo("Talon");
      ?>
      <br>
  <?php
  }
  if($champion == 44){
      
      ?>
      <img src="img/champion/Taric.png" alt="Taric" style="width:100px;height:100px">
      <?php
      echo("Taric");
      ?>
      <br>
  <?php
  }
  if($champion == 17){
      
      ?>
      <img src="img/champion/Teemo.png" alt="Teemo" style="width:100px;height:100px">
      <?php
      echo("Teemo");
      ?>
      <br>
  <?php
  }
  if($champion == 412){
      
      ?>
      <img src="img/champion/Thresh.png" alt="Thresh" style="width:100px;height:100px">
      <?php
      echo("Thresh");
      ?>
      <br>
  <?php
  }
  if($champion == 18){
      
      ?>
      <img src="img/champion/Tristana.png" alt="Tristana" style="width:100px;height:100px">
      <?php
      echo("Tristana");
      ?>
      <br>
  <?php
  }
  if($champion == 48){
      
      ?>
      <img src="img/champion/Trundle.png" alt="Trundle" style="width:100px;height:100px">
      <?php
      echo("Trundle");
      ?>
      <br>
  <?php
  }
if($champion == 23){
  
  ?>
  <img src="img/champion/Tryndamere.png" alt="Tryndamere" style="width:100px;height:100px">
  <?php
  echo("Tryndamere");
  ?>
  <br>
<?php
}
  if($champion == 4){
      
      ?>
      <img src="img/champion/TwistedFate.png" alt="Twisted Fate" style="width:100px;height:100px">
      <?php
      echo("Twisted Fate");
      ?>
      <br>
  <?php
  }
  if($champion == 29){
      
      ?>
      <img src="img/champion/Twitch.png" alt="Twitch" style="width:100px;height:100px">
      <?php
      echo("Twitch");
      ?>
      <br>
  <?php
  }
  if($champion == 77){
      
      ?>
      <img src="img/champion/Udyr.png" alt="Udyr" style="width:100px;height:100px">
      <?php
      echo("Udyr");
      ?>
      <br>
  <?php
  }
  if($champion == 6){
      
      ?>
      <img src="img/champion/Urgot.png" alt="Urgot" style="width:100px;height:100px">
      <?php
      echo("Urgot");
      ?>
      <br>
  <?php
  }
  if($champion == 110){
      
      ?>
      <img src="img/champion/Varus.png" alt="Varus" style="width:100px;height:100px">
      <?php
      echo("Varus");
      ?>
      <br>
  <?php
  }
  if($champion == 67){
      
      ?>
      <img src="img/champion/Vayne.png" alt="Vayne" style="width:100px;height:100px">
      <?php
      echo("Vayne");
      ?>
      <br>
  <?php
  }
  if($champion == 45){
      
      ?>
      <img src="img/champion/Veigar.png" alt="Veigar" style="width:100px;height:100px">
      <?php
      echo("Veigar");
      ?>
      <br>
  <?php
  }
  if($champion == 161){
      
      ?>
      <img src="img/champion/Velkoz.png" alt="Vel'Koz" style="width:100px;height:100px">
      <?php
      echo("Vel'Koz");
      ?>
      <br>
  <?php
  }
  if($champion == 254){
      
      ?>
      <img src="img/champion/Vi.png" alt="Vi" style="width:100px;height:100px">
      <?php
      echo("Vi");
      ?>
      <br>
  <?php
  }
  if($champion == 112){
      
      ?>
      <img src="img/champion/Viktor.png" alt="Viktor" style="width:100px;height:100px">
      <?php
      echo("Viktor");
      ?>
      <br>
  <?php
  }
  if($champion == 8){
      
      ?>
      <img src="img/champion/Vladimir.png" alt="Vladimir" style="width:100px;height:100px">
      <?php
      echo("Vladimir");
      ?>
      <br>
  <?php
  }
  if($champion == 106){
      
      ?>
      <img src="img/champion/Volibear.png" alt="Volibear" style="width:100px;height:100px">
      <?php
      echo("Volibear");
      ?>
      <br>
  <?php
  }
  if($champion == 19){
      
      ?>
      <img src="img/champion/Warwick.png" alt="Warwick" style="width:100px;height:100px">
      <?php
      echo("Warwick");
      ?>
      <br>
  <?php
  }
  if($champion == 101){
      
      ?>
      <img src="img/champion/Xerath.png" alt="Xerath" style="width:100px;height:100px">
      <?php
      echo("Xerath");
      ?>
      <br>
  <?php
  }
  if($champion == 5){
      
      ?>
      <img src="img/champion/XinZhao.png" alt="Xin Zhao" style="width:100px;height:100px">
      <?php
      echo("Xin Zhao");
      ?>
      <br>
  <?php
  }
  if($champion == 157){
      
      ?>
      <img src="img/champion/Yasuo.png" alt="Yasuo" style="width:100px;height:100px">
      <?php
      echo("Yasuo");
      ?>
      <br>
  <?php
  }
  if($champion == 83){
      
      ?>
      <img src="img/champion/Yorick.png" alt="Yorick" style="width:100px;height:100px">
      <?php
      echo("Yorick");
      ?>
      <br>
  <?php
  }
  if($champion == 154){
      
      ?>
      <img src="img/champion/Zac.png" alt="Zac" style="width:100px;height:100px">
      <?php
      echo("Zac");
      ?>
      <br>
  <?php
  }
  if($champion == 238){
      
      ?>
      <img src="img/champion/Zed.png" alt="Zed" style="width:100px;height:100px">
      <?php
      echo("Zed");
      ?>
      <br>
  <?php
  }
  if($champion == 115){
      
      ?>
      <img src="img/champion/Ziggs.png" alt="Ziggs" style="width:100px;height:100px">
      <?php
      echo("Ziggs");
      ?>
      <br>
  <?php
  }
  if($champion == 26){
      
      ?>
      <img src="img/champion/Zilean.png" alt="Zilean" style="width:100px;height:100px">
      <?php
      echo("Zilean");
      ?>
      <br>
  <?php
  }
  if($champion == 143){
      
      ?>
      <img src="img/champion/Zyra.png" alt="Zyra" style="width:100px;height:100px">
      <?php
      echo("Zyra");
      ?>
      <br>
  <?php
  }
  if($champion == 518){
      
      ?>
      <img src="img/champion/Neeko.png" alt="Neeko" style="width:100px;height:100px">
      <?php
      echo("Neeko");
      ?>
      <br>
  <?php
  }
  if($champion == 350){
      
      ?>
      <img src="img/champion/Yuumi.png" alt="Yuumi" style="width:100px;height:100px">
      <?php
      echo("Yuumi");
      ?>
      <br>
  <?php
  }
  if($champion == 497){
      
      ?>
      <img src="img/champion/Rakan.png" alt="Rakan" style="width:100px;height:100px">
      <?php
      echo("Rakan");
      ?>
      <br>
  <?php
  }
  if($champion == 498){
      
      ?>
      <img src="img/champion/Xayah.png" alt="Xayah" style="width:100px;height:100px">
      <?php
      echo("Xayah");
      ?>
      <br>
  <?php
  }
  if($champion == 142){
      
      ?>
      <img src="img/champion/Zoe.png" alt="Zoe" style="width:100px;height:100px">
      <?php
      echo("Zoe");
      ?>
      <br>
  <?php
  }
  if($champion == 555){
      
      ?>
      <img src="img/champion/Pyke.png" alt="Pyke" style="width:100px;height:100px">
      <?php
      echo("Pyke");
      ?>
      <br>
  <?php
  }
  if($champion == 516){
      
      ?>
      <img src="img/champion/Ornn.png" alt="Ornn" style="width:100px;height:100px">
      <?php
      echo("Ornn");
      ?>
      <br>
  <?php
  }
  if($champion == 517){
      
      ?>
      <img src="img/champion/Sylas.png" alt="Sylas" style="width:100px;height:100px">
      <?php
      echo("Sylas");
      ?>
      <br>
  <?php
  }
  if($champion == 141){
      
      ?>
      <img src="img/champion/Kayn.png" alt="Kayn" style="width:100px;height:100px">
      <?php
      echo("Kayn");
      ?>
      <br>
  <?php
  }
  if($champion == 145){
      
      ?>
      <img src="img/champion/Kaisa.png" alt="Kai'Sa" style="width:100px;height:100px">
      <?php
      echo("Kai'Sa");
      ?>
      <br>
  <?php
  }
  ?>
      
  <?php

  # 2345 if size is 9, 2895 if size is 8, 3423 if size is 7, 3909 if size is 6
  # 4332 if size is 5, 4710 if size is 4, 5042 if size is 3, 5328 if size is 2
  # 5569 if size is 1, 5763 if size is 0

    if($size == 10){
      #print_r($resultData3);
      // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
      // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
      // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
      // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
      // print_r($resultData3['match5']['participantIdentities'][6]['player']['summonerName']);
      // print_r($resultData3['match6']['participantIdentities'][1]['player']['summonerName']);
      // print_r($resultData3['match7']['participantIdentities'][3]['player']['summonerName']);
      // print_r($resultData3['match8']['participantIdentities'][2]['player']['summonerName']);
      // print_r($resultData3['match9']['participantIdentities'][7]['player']['summonerName']);
      // print_r($resultData3['match10']['participantIdentities'][6]['player']['summonerName']);
      #print_r($_SESSION['summonerName']);
      for($x = 0; $x<10; $x++){
        if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID5 = $resultData3['match5']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'], $participantID5);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID6 = $resultData3['match6']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'], $participantID6);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID7 = $resultData3['match7']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'], $participantID7);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match8']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID8 = $resultData3['match8']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match8']['participantIdentities'][$x]['player']['summonerName'], $participantID8);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match9']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID9 = $resultData3['match9']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match9']['participantIdentities'][$x]['player']['summonerName'], $participantID9);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match10']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID10 = $resultData3['match10']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match10']['participantIdentities'][$x]['player']['summonerName'], $participantID10);
        }
      }
      $participantID1 = $participantID1-1;
      $participantID2 = $participantID2-1;
      $participantID3 = $participantID3-1;
      $participantID4 = $participantID4-1;
      $participantID5 = $participantID5-1;
      $participantID6 = $participantID6-1;
      $participantID7 = $participantID7-1;
      $participantID8 = $participantID8-1;
      $participantID9 = $participantID9-1;
      $participantID10 = $participantID10-1;
      //  echo($participantID1);
      //  echo($participantID2);
      //  echo($participantID3);
      //  echo($participantID4);
      //  echo($participantID5);
      //  echo($participantID6);
      //  echo($participantID7);
      //  echo($participantID8);
      //  echo($participantID9);
      //  echo($participantID10);
  
      #print($participantID);
      $kills = 0;
      $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
      $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
      $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
      $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
      $kills5 = $resultData3['match5']['participants'][$participantID5]['stats']['kills'];
      $kills6 = $resultData3['match6']['participants'][$participantID6]['stats']['kills'];
      $kills7 = $resultData3['match7']['participants'][$participantID7]['stats']['kills'];
      $kills8 = $resultData3['match8']['participants'][$participantID8]['stats']['kills'];
      $kills9 = $resultData3['match9']['participants'][$participantID9]['stats']['kills'];
      $kills10 = $resultData3['match10']['participants'][$participantID10]['stats']['kills'];
      $totalKills = $kills1 + $kills2 + $kills3 + $kills4 + $kills5 + $kills6 + $kills7 + $kills8 + $kills9 + $kills10;

      $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
      $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
      $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
      $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
      $assists5 = $resultData3['match5']['participants'][$participantID5]['stats']['assists'];
      $assists6 = $resultData3['match6']['participants'][$participantID6]['stats']['assists'];
      $assists7 = $resultData3['match7']['participants'][$participantID7]['stats']['assists'];
      $assists8 = $resultData3['match8']['participants'][$participantID8]['stats']['assists'];
      $assists9 = $resultData3['match9']['participants'][$participantID9]['stats']['assists'];
      $assists10 = $resultData3['match10']['participants'][$participantID10]['stats']['assists'];
      $totalAssists = $assists1 + $assists2 + $assists3 + $assists4 + $assists5 + $assists6 + $assists7 + $assists8 + $assists9 + $assists10;

      $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
      $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
      $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
      $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
      $deaths5 = $resultData3['match5']['participants'][$participantID5]['stats']['deaths'];
      $deaths6 = $resultData3['match6']['participants'][$participantID6]['stats']['deaths'];
      $deaths7 = $resultData3['match7']['participants'][$participantID7]['stats']['deaths'];
      $deaths8 = $resultData3['match8']['participants'][$participantID8]['stats']['deaths'];
      $deaths9 = $resultData3['match9']['participants'][$participantID9]['stats']['deaths'];
      $deaths10 = $resultData3['match10']['participants'][$participantID10]['stats']['deaths'];
      $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4 + $deaths5 + $deaths6 + $deaths7 + $deaths8 + $deaths9 + $deaths10;

      $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
      $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
      $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
      $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
      $doubleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['doubleKills'];
      $doubleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['doubleKills'];
      $doubleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['doubleKills'];
      $doubleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['doubleKills'];
      $doubleKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['doubleKills'];
      $doubleKills10 = $resultData3['match10']['participants'][$participantID10]['stats']['doubleKills'];
      $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4 + $doubleKills5 + $doubleKills6 + $doubleKills7 + $doubleKills8 + $doubleKills9 + $doubleKills10;


      $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
      $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
      $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
      $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
      $tripleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['tripleKills'];
      $tripleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['tripleKills'];
      $tripleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['tripleKills'];
      $tripleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['tripleKills'];
      $tripleKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['tripleKills'];
      $tripleKills10 = $resultData3['match10']['participants'][$participantID10]['stats']['tripleKills'];
      $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4 + $tripleKills5 + $tripleKills6 + $tripleKills7 + $tripleKills8 + $tripleKills9 + $tripleKills10;

      $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
      $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
      $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
      $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
      $quadrupleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['quadraKills'];
      $quadrupleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['quadraKills'];
      $quadrupleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['quadraKills'];
      $quadrupleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['quadraKills'];
      $quadrupleKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['quadraKills'];
      $quadrupleKills10 = $resultData3['match10']['participants'][$participantID10]['stats']['quadraKills'];
      $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4 + $quadrupleKills5 + $quadrupleKills6 + $quadrupleKills7 + $quadrupleKills8 + $quadrupleKills9 + $quadrupleKills10;

      $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
      $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
      $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
      $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
      $pentaKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['pentaKills'];
      $pentaKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['pentaKills'];
      $pentaKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['pentaKills'];
      $pentaKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['pentaKills'];
      $pentaKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['pentaKills'];
      $pentaKills10 = $resultData3['match10']['participants'][$participantID10]['stats']['pentaKills'];
      $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4 + $pentaKills5 + $pentaKills6 + $pentaKills7 + $pentaKills8 + $pentaKills9 + $pentaKills10;

      $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
      $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
      $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
      $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
      $visionScore5 = $resultData3['match5']['participants'][$participantID5]['stats']['visionScore'];
      $visionScore6 = $resultData3['match6']['participants'][$participantID6]['stats']['visionScore'];
      $visionScore7 = $resultData3['match7']['participants'][$participantID7]['stats']['visionScore'];
      $visionScore8 = $resultData3['match8']['participants'][$participantID8]['stats']['visionScore'];
      $visionScore9 = $resultData3['match9']['participants'][$participantID9]['stats']['visionScore'];
      $visionScore10 = $resultData3['match10']['participants'][$participantID10]['stats']['visionScore'];
      $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4 + $visionScore5 + $visionScore6 + $visionScore7 + $visionScore8 + $visionScore9 + $visionScore10;
      $avgVisionScore = round($totalvisionScore/10);


      $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
      $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
      $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
      $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
      $totalMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['totalMinionsKilled'];
      $totalMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['totalMinionsKilled'];
      $totalMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['totalMinionsKilled'];
      $totalMinionsKilled8 = $resultData3['match8']['participants'][$participantID8]['stats']['totalMinionsKilled'];
      $totalMinionsKilled9 = $resultData3['match9']['participants'][$participantID9]['stats']['totalMinionsKilled'];
      $totalMinionsKilled10 = $resultData3['match10']['participants'][$participantID10]['stats']['totalMinionsKilled'];
      $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4 + $totalMinionsKilled5 + $totalMinionsKilled6 + $totalMinionsKilled7 + $totalMinionsKilled8 + $totalMinionsKilled9 + $totalMinionsKilled10;

      $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled8 = $resultData3['match8']['participants'][$participantID8]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled9 = $resultData3['match9']['participants'][$participantID9]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled10 = $resultData3['match10']['participants'][$participantID10]['stats']['neutralMinionsKilled'];
      $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4 + $neutralMinionsKilled5 + $neutralMinionsKilled6 + $neutralMinionsKilled7 + $neutralMinionsKilled8 + $neutralMinionsKilled9 + $neutralMinionsKilled10;

      $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
      $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
      $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
      $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
      $turretKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['turretKills'];
      $turretKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['turretKills'];
      $turretKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['turretKills'];
      $turretKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['turretKills'];
      $turretKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['turretKills'];
      $turretKills10 = $resultData3['match10']['participants'][$participantID10]['stats']['turretKills'];
      $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4 + $turretKills5 + $turretKills6 + $turretKills7 + $turretKills8 + $turretKills9 + $turretKills10;

      $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
      $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
      $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
      $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
      $inhibitorKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['inhibitorKills'];
      $inhibitorKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['inhibitorKills'];
      $inhibitorKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['inhibitorKills'];
      $inhibitorKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['inhibitorKills'];
      $inhibitorKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['inhibitorKills'];
      $inhibitorKills10 = $resultData3['match10']['participants'][$participantID10]['stats']['inhibitorKills'];
      $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4 + $inhibitorKills5 + $inhibitorKills6 + $inhibitorKills7 + $inhibitorKills8 + $inhibitorKills9 + $inhibitorKills10;

      $gameDuration1 = $resultData3['match1']['gameDuration'];
      $mins1 = $gameDuration1/60;
      $gameDuration2 = $resultData3['match2']['gameDuration'];
      $mins2 = $gameDuration2/60;
      $gameDuration3 = $resultData3['match3']['gameDuration'];
      $mins3 = $gameDuration3/60;
      $gameDuration4 = $resultData3['match4']['gameDuration'];
      $mins4 = $gameDuration4/60;
      $gameDuration5 = $resultData3['match5']['gameDuration'];
      $mins5 = $gameDuration5/60;
      $gameDuration6 = $resultData3['match6']['gameDuration'];
      $mins6 = $gameDuration6/60;
      $gameDuration7 = $resultData3['match7']['gameDuration'];
      $mins7 = $gameDuration7/60;
      $gameDuration8 = $resultData3['match8']['gameDuration'];
      $mins8 = $gameDuration8/60;
      $gameDuration9 = $resultData3['match9']['gameDuration'];
      $mins9 = $gameDuration9/60;
      $gameDuration10 = $resultData3['match10']['gameDuration'];
      $mins10 = $gameDuration10/60;
      $totalMins = $mins1 + $mins2 + $mins3 + $mins4 + $mins5 + $mins6 + $mins7 + $mins8 + $mins9 + $mins10;
      
      
      $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
      $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
      $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
      $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
      $largestKillingSpree5 = $resultData3['match5']['participants'][$participantID5]['stats']['largestKillingSpree'];
      $largestKillingSpree6 = $resultData3['match6']['participants'][$participantID6]['stats']['largestKillingSpree'];
      $largestKillingSpree7 = $resultData3['match7']['participants'][$participantID7]['stats']['largestKillingSpree'];
      $largestKillingSpree8 = $resultData3['match8']['participants'][$participantID8]['stats']['largestKillingSpree'];
      $largestKillingSpree9 = $resultData3['match9']['participants'][$participantID9]['stats']['largestKillingSpree'];
      $largestKillingSpree10 = $resultData3['match10']['participants'][$participantID10]['stats']['largestKillingSpree'];

      $largestKillingSpree = 0;
      if($largestKillingSpree1 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree1;
      }
      if($largestKillingSpree2 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree2;
      }
      if($largestKillingSpree3 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree3;
      }
      if($largestKillingSpree4 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree4;
      }
      if($largestKillingSpree5 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree5;
      }
      if($largestKillingSpree6 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree6;
      }
      if($largestKillingSpree7 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree7;
      }
      if($largestKillingSpree8 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree8;
      }
      if($largestKillingSpree9 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree9;
      }
      if($largestKillingSpree10 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree10;
      }

  
      if($participantID1 < 5){
        $win1 = $resultData3['match1']['teams'][0]['win'];
      }
      if($participantID1 >= 5){
        $win1 = $resultData3['match1']['teams'][1]['win'];
        
      }
      if($win1 == "Win"){
        $win1 = 1;
      }
      if($win1 == "Fail"){
        $win1 = 0;
      }
      

      if($participantID2 < 5){
        $win2 = $resultData3['match2']['teams'][0]['win'];
      }
      if($participantID2 >= 5){
        $win2 = $resultData3['match2']['teams'][1]['win'];
      }
      if($win2 == "Win"){
        $win2 = 1;
      }
      if($win2 == "Fail"){
        $win2 = 0;
      }
      
      if($participantID3 < 5){
        $win3 = $resultData3['match3']['teams'][0]['win'];
      }
      if($participantID3 >= 5){
        $win3 = $resultData3['match3']['teams'][1]['win'];
      }
      if($win3 == "Win"){
        $win3 = 1;
      }
      if($win3 == "Fail"){
        $win3 = 0;
      }
      
      if($participantID4 < 5){
        $win4 = $resultData3['match4']['teams'][0]['win'];
      }
      if($participantID4 >= 5){
        $win4 = $resultData3['match4']['teams'][1]['win'];
      }
      if($win4 == "Win"){
        $win4 = 1;
      }
      if($win4 == "Fail"){
        $win4 = 0;
      }
      
      if($participantID5 < 5){
        $win5 = $resultData3['match5']['teams'][0]['win'];
      }
      if($participantID5 >= 5){
        $win5 = $resultData3['match5']['teams'][1]['win'];
      }
      if($win5 == "Win"){
        $win5 = 1;
      }
      if($win5 == "Fail"){
        $win5 = 0;
      }
      
      if($participantID6 < 5){
        $win6 = $resultData3['match6']['teams'][0]['win'];
      }
      if($participantID6 >= 5){
        $win6 = $resultData3['match6']['teams'][1]['win'];
      }
      if($win6 == "Win"){
        $win6 = 1;
      }
      if($win6 == "Fail"){
        $win6 = 0;
      }
      
      if($participantID7 < 5){
        $win7 = $resultData3['match7']['teams'][0]['win'];
      }
      if($participantID7 >= 5){
        $win7 = $resultData3['match7']['teams'][1]['win'];
      }
      if($win7 == "Win"){
        $win7 = 1;
      }
      if($win7 == "Fail"){
        $win7 = 0;
      }
      
      if($participantID8 < 5){
        $win8 = $resultData3['match8']['teams'][0]['win'];
      }
      if($participantID8 >= 5){
        $win8 = $resultData3['match8']['teams'][1]['win'];
      }
      if($win8 == "Win"){
        $win8 = 1;
      }
      if($win8 == "Fail"){
        $win8 = 0;
      }
      
      if($participantID9 < 5){
        $win9 = $resultData3['match9']['teams'][0]['win'];
      }
      if($participantID9 >= 5){
        $win9 = $resultData3['match9']['teams'][1]['win'];
      }
      if($win9 == "Win"){
        $win9 = 1;
      }
      if($win9 == "Fail"){
        $win9 = 0;
      }
      
      if($participantID10 < 5){
        $win10 = $resultData3['match10']['teams'][0]['win'];
      }
      if($participantID10 >= 5){
        $win10 = $resultData3['match10']['teams'][1]['win'];
      }
      if($win10 == "Win"){
        $win10 = 1;
      }
      if($win10 == "Fail"){
        $win10 = 0;
      }
      

      $wins = $win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7 + $win8 + $win9 + $win10;
      $losses = 10-$wins;

      $avgKills = $totalKills/10;
      $avgAssists = $totalAssists/10;
      $avgDeaths = $totalDeaths/10;
      $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
      $avgKDA = round($avgKDA, 2);
      $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
      $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
      $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
      $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
      $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
      $CS5 = $totalMinionsKilled5 + $neutralMinionsKilled5;
      $CS6 = $totalMinionsKilled6 + $neutralMinionsKilled6;
      $CS7 = $totalMinionsKilled7 + $neutralMinionsKilled7;
      $CS8 = $totalMinionsKilled8 + $neutralMinionsKilled8;
      $CS9 = $totalMinionsKilled9 + $neutralMinionsKilled9;
      $CS10 = $totalMinionsKilled10 + $neutralMinionsKilled10;
      $avgCSperMin = round($totalCS/$totalMins, 2);
      $avgCSperGame = round($totalCS/10, 2);
      ?>
      <div class="helper">
        <div class="row">
          <div class="col-md-6">
      <br>
      <?php
      echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
      ?>
      <br>
      <?php
      echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
      ?>
      <br>
      <?php
      echo("Average K/D/A: $avgKDA:1");
      ?>
      <br>
      <?php
      echo("Total CS: $totalCS");
      ?>
      <br>
      <?php
      echo("CS Game 1: $CS1");
      ?>
      <br>
      <?php
      echo("CS Game 2: $CS2");
      ?>
      <br>
      <?php
      echo("CS Game 3: $CS3");
      ?>
      <br>
      <?php
      echo("CS Game 4: $CS4");
      ?>
      <br>
      <?php
      echo("CS Game 5: $CS5");
      ?>
      <br>
      <?php
      echo("CS Game 6: $CS6");
      ?>
      <br>
      <?php
      echo("CS Game 7: $CS7");
      ?>
      <br>
      <?php
      echo("CS Game 8: $CS8");
      ?>
      <br>
      <?php
      echo("CS Game 9: $CS9");
      ?>
      <br>
      <?php
      echo("CS Game 10: $CS10");
      ?>
      </div>
      <div class="col-md-6">
        <br>
      <?php
      echo("Wins: $wins");
      ?>
      <br>
      <?php
      echo("Losses: $losses");
      ?>
      <br>
      <?php
      echo("Double Kills: $totaldoubleKills");
      ?>
      <br>
      <?php
      echo("Triple Kills: $totaltripleKills");
      ?>
      <br>
      <?php
      echo("Quadra Kills: $totalquadrupleKills");
      ?>
      <br>
      <?php
      echo("Penta Kills: $totalpentaKills");
      ?>
      <br>
      <?php
      echo("Total Turret Kills: $totalturretKills");
      ?>
      <br>
      <?php
      echo("Total Inhibitor Kills: $totalinhibitorKills");
      ?>
      <br>
      <?php
      echo("Average Vision Score: $avgVisionScore");
      ?>
      <br>
      <?php
      echo("Largest Killing Spree: $largestKillingSpree");
      ?>
      <br>
      <?php
      echo("Average CS/Min: $avgCSperMin");
      ?>
      <br>
      <?php
      echo("Average CS/Game: $avgCSperGame");
      ?>
      </div>
    </div>
    </div>
      <?php
    }


    #IF SIZE IS 9
    if($size == 9){
      #print_r($resultData3);
      // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
      // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
      // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
      // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
      // print_r($resultData3['match5']['participantIdentities'][6]['player']['summonerName']);
      // print_r($resultData3['match6']['participantIdentities'][1]['player']['summonerName']);
      // print_r($resultData3['match7']['participantIdentities'][3]['player']['summonerName']);
      // print_r($resultData3['match8']['participantIdentities'][2]['player']['summonerName']);
      // print_r($resultData3['match9']['participantIdentities'][7]['player']['summonerName']);
      // print_r($resultData3['match10']['participantIdentities'][6]['player']['summonerName']);
      #print_r($_SESSION['summonerName']);
      for($x = 0; $x<10; $x++){
        if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID5 = $resultData3['match5']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'], $participantID5);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID6 = $resultData3['match6']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'], $participantID6);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID7 = $resultData3['match7']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'], $participantID7);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match8']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID8 = $resultData3['match8']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match8']['participantIdentities'][$x]['player']['summonerName'], $participantID8);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match9']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID9 = $resultData3['match9']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match9']['participantIdentities'][$x]['player']['summonerName'], $participantID9);
        }
      }
      
      $participantID1 = $participantID1-1;
      $participantID2 = $participantID2-1;
      $participantID3 = $participantID3-1;
      $participantID4 = $participantID4-1;
      $participantID5 = $participantID5-1;
      $participantID6 = $participantID6-1;
      $participantID7 = $participantID7-1;
      $participantID8 = $participantID8-1;
      $participantID9 = $participantID9-1;
      
      //  echo($participantID1);
      //  echo($participantID2);
      //  echo($participantID3);
      //  echo($participantID4);
      //  echo($participantID5);
      //  echo($participantID6);
      //  echo($participantID7);
      //  echo($participantID8);
      //  echo($participantID9);
      //  echo($participantID10);
  
      #print($participantID);
      $kills = 0;
      $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
      $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
      $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
      $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
      $kills5 = $resultData3['match5']['participants'][$participantID5]['stats']['kills'];
      $kills6 = $resultData3['match6']['participants'][$participantID6]['stats']['kills'];
      $kills7 = $resultData3['match7']['participants'][$participantID7]['stats']['kills'];
      $kills8 = $resultData3['match8']['participants'][$participantID8]['stats']['kills'];
      $kills9 = $resultData3['match9']['participants'][$participantID9]['stats']['kills'];
      
      $totalKills = $kills1 + $kills2 + $kills3 + $kills4 + $kills5 + $kills6 + $kills7 + $kills8 + $kills9;

      $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
      $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
      $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
      $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
      $assists5 = $resultData3['match5']['participants'][$participantID5]['stats']['assists'];
      $assists6 = $resultData3['match6']['participants'][$participantID6]['stats']['assists'];
      $assists7 = $resultData3['match7']['participants'][$participantID7]['stats']['assists'];
      $assists8 = $resultData3['match8']['participants'][$participantID8]['stats']['assists'];
      $assists9 = $resultData3['match9']['participants'][$participantID9]['stats']['assists'];
     
      $totalAssists = $assists1 + $assists2 + $assists3 + $assists4 + $assists5 + $assists6 + $assists7 + $assists8 + $assists9;

      $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
      $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
      $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
      $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
      $deaths5 = $resultData3['match5']['participants'][$participantID5]['stats']['deaths'];
      $deaths6 = $resultData3['match6']['participants'][$participantID6]['stats']['deaths'];
      $deaths7 = $resultData3['match7']['participants'][$participantID7]['stats']['deaths'];
      $deaths8 = $resultData3['match8']['participants'][$participantID8]['stats']['deaths'];
      $deaths9 = $resultData3['match9']['participants'][$participantID9]['stats']['deaths'];
      
      $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4 + $deaths5 + $deaths6 + $deaths7 + $deaths8 + $deaths9;

      $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
      $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
      $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
      $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
      $doubleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['doubleKills'];
      $doubleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['doubleKills'];
      $doubleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['doubleKills'];
      $doubleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['doubleKills'];
      $doubleKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['doubleKills'];
      $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4 + $doubleKills5 + $doubleKills6 + $doubleKills7 + $doubleKills8 + $doubleKills9;


      $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
      $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
      $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
      $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
      $tripleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['tripleKills'];
      $tripleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['tripleKills'];
      $tripleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['tripleKills'];
      $tripleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['tripleKills'];
      $tripleKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['tripleKills'];
      
      $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4 + $tripleKills5 + $tripleKills6 + $tripleKills7 + $tripleKills8 + $tripleKills9;

      $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
      $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
      $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
      $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
      $quadrupleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['quadraKills'];
      $quadrupleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['quadraKills'];
      $quadrupleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['quadraKills'];
      $quadrupleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['quadraKills'];
      $quadrupleKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['quadraKills'];
      
      $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4 + $quadrupleKills5 + $quadrupleKills6 + $quadrupleKills7 + $quadrupleKills8 + $quadrupleKills9;

      $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
      $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
      $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
      $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
      $pentaKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['pentaKills'];
      $pentaKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['pentaKills'];
      $pentaKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['pentaKills'];
      $pentaKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['pentaKills'];
      $pentaKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['pentaKills'];
      
      $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4 + $pentaKills5 + $pentaKills6 + $pentaKills7 + $pentaKills8 + $pentaKills9;

      $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
      $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
      $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
      $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
      $visionScore5 = $resultData3['match5']['participants'][$participantID5]['stats']['visionScore'];
      $visionScore6 = $resultData3['match6']['participants'][$participantID6]['stats']['visionScore'];
      $visionScore7 = $resultData3['match7']['participants'][$participantID7]['stats']['visionScore'];
      $visionScore8 = $resultData3['match8']['participants'][$participantID8]['stats']['visionScore'];
      $visionScore9 = $resultData3['match9']['participants'][$participantID9]['stats']['visionScore'];
      
      $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4 + $visionScore5 + $visionScore6 + $visionScore7 + $visionScore8 + $visionScore9;
      $avgVisionScore = round($totalvisionScore/9, 2);


      $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
      $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
      $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
      $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
      $totalMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['totalMinionsKilled'];
      $totalMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['totalMinionsKilled'];
      $totalMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['totalMinionsKilled'];
      $totalMinionsKilled8 = $resultData3['match8']['participants'][$participantID8]['stats']['totalMinionsKilled'];
      $totalMinionsKilled9 = $resultData3['match9']['participants'][$participantID9]['stats']['totalMinionsKilled'];
      $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4 + $totalMinionsKilled5 + $totalMinionsKilled6 + $totalMinionsKilled7 + $totalMinionsKilled8 + $totalMinionsKilled9;

      $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled8 = $resultData3['match8']['participants'][$participantID8]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled9 = $resultData3['match9']['participants'][$participantID9]['stats']['neutralMinionsKilled'];
      
      $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4 + $neutralMinionsKilled5 + $neutralMinionsKilled6 + $neutralMinionsKilled7 + $neutralMinionsKilled8 + $neutralMinionsKilled9;

      $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
      $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
      $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
      $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
      $turretKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['turretKills'];
      $turretKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['turretKills'];
      $turretKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['turretKills'];
      $turretKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['turretKills'];
      $turretKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['turretKills'];
      $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4 + $turretKills5 + $turretKills6 + $turretKills7 + $turretKills8 + $turretKills9;

      $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
      $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
      $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
      $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
      $inhibitorKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['inhibitorKills'];
      $inhibitorKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['inhibitorKills'];
      $inhibitorKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['inhibitorKills'];
      $inhibitorKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['inhibitorKills'];
      $inhibitorKills9 = $resultData3['match9']['participants'][$participantID9]['stats']['inhibitorKills'];
      $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4 + $inhibitorKills5 + $inhibitorKills6 + $inhibitorKills7 + $inhibitorKills8 + $inhibitorKills9;

      $gameDuration1 = $resultData3['match1']['gameDuration'];
      $mins1 = $gameDuration1/60;
      $gameDuration2 = $resultData3['match2']['gameDuration'];
      $mins2 = $gameDuration2/60;
      $gameDuration3 = $resultData3['match3']['gameDuration'];
      $mins3 = $gameDuration3/60;
      $gameDuration4 = $resultData3['match4']['gameDuration'];
      $mins4 = $gameDuration4/60;
      $gameDuration5 = $resultData3['match5']['gameDuration'];
      $mins5 = $gameDuration5/60;
      $gameDuration6 = $resultData3['match6']['gameDuration'];
      $mins6 = $gameDuration6/60;
      $gameDuration7 = $resultData3['match7']['gameDuration'];
      $mins7 = $gameDuration7/60;
      $gameDuration8 = $resultData3['match8']['gameDuration'];
      $mins8 = $gameDuration8/60;
      $gameDuration9 = $resultData3['match9']['gameDuration'];
      $mins9 = $gameDuration9/60;
      $totalMins = $mins1 + $mins2 + $mins3 + $mins4 + $mins5 + $mins6 + $mins7 + $mins8 + $mins9;
      
      
      $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
      $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
      $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
      $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
      $largestKillingSpree5 = $resultData3['match5']['participants'][$participantID5]['stats']['largestKillingSpree'];
      $largestKillingSpree6 = $resultData3['match6']['participants'][$participantID6]['stats']['largestKillingSpree'];
      $largestKillingSpree7 = $resultData3['match7']['participants'][$participantID7]['stats']['largestKillingSpree'];
      $largestKillingSpree8 = $resultData3['match8']['participants'][$participantID8]['stats']['largestKillingSpree'];
      $largestKillingSpree9 = $resultData3['match9']['participants'][$participantID9]['stats']['largestKillingSpree'];
      

      $largestKillingSpree = 0;
      if($largestKillingSpree1 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree1;
      }
      if($largestKillingSpree2 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree2;
      }
      if($largestKillingSpree3 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree3;
      }
      if($largestKillingSpree4 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree4;
      }
      if($largestKillingSpree5 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree5;
      }
      if($largestKillingSpree6 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree6;
      }
      if($largestKillingSpree7 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree7;
      }
      if($largestKillingSpree8 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree8;
      }
      if($largestKillingSpree9 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree9;
      }

  
      if($participantID1 < 5){
        $win1 = $resultData3['match1']['teams'][0]['win'];
      }
      if($participantID1 >= 5){
        $win1 = $resultData3['match1']['teams'][1]['win'];
        
      }
      if($win1 == "Win"){
        $win1 = 1;
      }
      if($win1 == "Fail"){
        $win1 = 0;
      }
      

      if($participantID2 < 5){
        $win2 = $resultData3['match2']['teams'][0]['win'];
      }
      if($participantID2 >= 5){
        $win2 = $resultData3['match2']['teams'][1]['win'];
      }
      if($win2 == "Win"){
        $win2 = 1;
      }
      if($win2 == "Fail"){
        $win2 = 0;
      }
      
      if($participantID3 < 5){
        $win3 = $resultData3['match3']['teams'][0]['win'];
      }
      if($participantID3 >= 5){
        $win3 = $resultData3['match3']['teams'][1]['win'];
      }
      if($win3 == "Win"){
        $win3 = 1;
      }
      if($win3 == "Fail"){
        $win3 = 0;
      }
      
      if($participantID4 < 5){
        $win4 = $resultData3['match4']['teams'][0]['win'];
      }
      if($participantID4 >= 5){
        $win4 = $resultData3['match4']['teams'][1]['win'];
      }
      if($win4 == "Win"){
        $win4 = 1;
      }
      if($win4 == "Fail"){
        $win4 = 0;
      }
      
      if($participantID5 < 5){
        $win5 = $resultData3['match5']['teams'][0]['win'];
      }
      if($participantID5 >= 5){
        $win5 = $resultData3['match5']['teams'][1]['win'];
      }
      if($win5 == "Win"){
        $win5 = 1;
      }
      if($win5 == "Fail"){
        $win5 = 0;
      }
      
      if($participantID6 < 5){
        $win6 = $resultData3['match6']['teams'][0]['win'];
      }
      if($participantID6 >= 5){
        $win6 = $resultData3['match6']['teams'][1]['win'];
      }
      if($win6 == "Win"){
        $win6 = 1;
      }
      if($win6 == "Fail"){
        $win6 = 0;
      }
      
      if($participantID7 < 5){
        $win7 = $resultData3['match7']['teams'][0]['win'];
      }
      if($participantID7 >= 5){
        $win7 = $resultData3['match7']['teams'][1]['win'];
      }
      if($win7 == "Win"){
        $win7 = 1;
      }
      if($win7 == "Fail"){
        $win7 = 0;
      }
      
      if($participantID8 < 5){
        $win8 = $resultData3['match8']['teams'][0]['win'];
      }
      if($participantID8 >= 5){
        $win8 = $resultData3['match8']['teams'][1]['win'];
      }
      if($win8 == "Win"){
        $win8 = 1;
      }
      if($win8 == "Fail"){
        $win8 = 0;
      }
      
      if($participantID9 < 5){
        $win9 = $resultData3['match9']['teams'][0]['win'];
      }
      if($participantID9 >= 5){
        $win9 = $resultData3['match9']['teams'][1]['win'];
      }
      if($win9 == "Win"){
        $win9 = 1;
      }
      if($win9 == "Fail"){
        $win9 = 0;
      }
      
      

      $wins = $win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7 + $win8 + $win9;
      $losses = 9-$wins;

      $avgKills = $totalKills/9;
      $avgAssists = $totalAssists/9;
      $avgDeaths = $totalDeaths/9;
      $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
      $avgKDA = round($avgKDA, 2);
      $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
      $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
      $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
      $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
      $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
      $CS5 = $totalMinionsKilled5 + $neutralMinionsKilled5;
      $CS6 = $totalMinionsKilled6 + $neutralMinionsKilled6;
      $CS7 = $totalMinionsKilled7 + $neutralMinionsKilled7;
      $CS8 = $totalMinionsKilled8 + $neutralMinionsKilled8;
      $CS9 = $totalMinionsKilled9 + $neutralMinionsKilled9;
      $avgCSperMin = round($totalCS/$totalMins, 2);
      $avgCSperGame = round($totalCS/9, 2);
      ?>
      <div class="helper">
        <div class="row">
          <div class="col-md-6">
      <br>
      <?php
      echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
      ?>
      <br>
      <?php
      echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
      ?>
      <br>
      <?php
      echo("Average K/D/A: $avgKDA:1");
      ?>
      <br>
      <?php
      echo("Total CS: $totalCS");
      ?>
      <br>
      <?php
      echo("CS Game 1: $CS1");
      ?>
      <br>
      <?php
      echo("CS Game 2: $CS2");
      ?>
      <br>
      <?php
      echo("CS Game 3: $CS3");
      ?>
      <br>
      <?php
      echo("CS Game 4: $CS4");
      ?>
      <br>
      <?php
      echo("CS Game 5: $CS5");
      ?>
      <br>
      <?php
      echo("CS Game 6: $CS6");
      ?>
      <br>
      <?php
      echo("CS Game 7: $CS7");
      ?>
      <br>
      <?php
      echo("CS Game 8: $CS8");
      ?>
      <br>
      <?php
      echo("CS Game 9: $CS9");
      ?>
      </div>
      <div class="col-md-6">
        <br>
      <?php
      echo("Wins: $wins");
      ?>
      <br>
      <?php
      echo("Losses: $losses");
      ?>
      <br>
      <?php
      echo("Double Kills: $totaldoubleKills");
      ?>
      <br>
      <?php
      echo("Triple Kills: $totaltripleKills");
      ?>
      <br>
      <?php
      echo("Quadra Kills: $totalquadrupleKills");
      ?>
      <br>
      <?php
      echo("Penta Kills: $totalpentaKills");
      ?>
      <br>
      <?php
      echo("Total Turret Kills: $totalturretKills");
      ?>
      <br>
      <?php
      echo("Total Inhibitor Kills: $totalinhibitorKills");
      ?>
      <br>
      <?php
      echo("Average Vision Score: $avgVisionScore");
      ?>
      <br>
      <?php
      echo("Largest Killing Spree: $largestKillingSpree");
      ?>
      <br>
      <?php
      echo("Average CS/Min: $avgCSperMin");
      ?>
      <br>
      <?php
      echo("Average CS/Game: $avgCSperGame");
      ?>
      </div>
    </div>
    </div>
      <?php
    }
    

    #if size is 8

    if($size == 8){
      #print_r($resultData3);
      // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
      // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
      // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
      // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
      // print_r($resultData3['match5']['participantIdentities'][6]['player']['summonerName']);
      // print_r($resultData3['match6']['participantIdentities'][1]['player']['summonerName']);
      // print_r($resultData3['match7']['participantIdentities'][3]['player']['summonerName']);
      // print_r($resultData3['match8']['participantIdentities'][2]['player']['summonerName']);
      // print_r($resultData3['match9']['participantIdentities'][7]['player']['summonerName']);
      // print_r($resultData3['match10']['participantIdentities'][6]['player']['summonerName']);
      #print_r($_SESSION['summonerName']);
      for($x = 0; $x<10; $x++){
        if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID5 = $resultData3['match5']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'], $participantID5);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID6 = $resultData3['match6']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'], $participantID6);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID7 = $resultData3['match7']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'], $participantID7);
        }
      }
      for($x = 0; $x<10; $x++){
        if($resultData3['match8']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
          $participantID8 = $resultData3['match8']['participantIdentities'][$x]['participantId'];
          #print_r($resultData3['match8']['participantIdentities'][$x]['player']['summonerName'], $participantID8);
        }
      }
      
      $participantID1 = $participantID1-1;
      $participantID2 = $participantID2-1;
      $participantID3 = $participantID3-1;
      $participantID4 = $participantID4-1;
      $participantID5 = $participantID5-1;
      $participantID6 = $participantID6-1;
      $participantID7 = $participantID7-1;
      $participantID8 = $participantID8-1;
      
      //  echo($participantID1);
      //  echo($participantID2);
      //  echo($participantID3);
      //  echo($participantID4);
      //  echo($participantID5);
      //  echo($participantID6);
      //  echo($participantID7);
      //  echo($participantID8);
      //  echo($participantID9);
      //  echo($participantID10);
  
      #print($participantID);
      $kills = 0;
      $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
      $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
      $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
      $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
      $kills5 = $resultData3['match5']['participants'][$participantID5]['stats']['kills'];
      $kills6 = $resultData3['match6']['participants'][$participantID6]['stats']['kills'];
      $kills7 = $resultData3['match7']['participants'][$participantID7]['stats']['kills'];
      $kills8 = $resultData3['match8']['participants'][$participantID8]['stats']['kills'];
      
      
      $totalKills = $kills1 + $kills2 + $kills3 + $kills4 + $kills5 + $kills6 + $kills7 + $kills8;

      $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
      $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
      $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
      $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
      $assists5 = $resultData3['match5']['participants'][$participantID5]['stats']['assists'];
      $assists6 = $resultData3['match6']['participants'][$participantID6]['stats']['assists'];
      $assists7 = $resultData3['match7']['participants'][$participantID7]['stats']['assists'];
      $assists8 = $resultData3['match8']['participants'][$participantID8]['stats']['assists'];
      
     
      $totalAssists = $assists1 + $assists2 + $assists3 + $assists4 + $assists5 + $assists6 + $assists7 + $assists8;

      $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
      $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
      $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
      $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
      $deaths5 = $resultData3['match5']['participants'][$participantID5]['stats']['deaths'];
      $deaths6 = $resultData3['match6']['participants'][$participantID6]['stats']['deaths'];
      $deaths7 = $resultData3['match7']['participants'][$participantID7]['stats']['deaths'];
      $deaths8 = $resultData3['match8']['participants'][$participantID8]['stats']['deaths'];
      
      
      $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4 + $deaths5 + $deaths6 + $deaths7 + $deaths8;

      $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
      $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
      $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
      $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
      $doubleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['doubleKills'];
      $doubleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['doubleKills'];
      $doubleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['doubleKills'];
      $doubleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['doubleKills'];
      
      $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4 + $doubleKills5 + $doubleKills6 + $doubleKills7 + $doubleKills8;


      $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
      $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
      $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
      $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
      $tripleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['tripleKills'];
      $tripleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['tripleKills'];
      $tripleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['tripleKills'];
      $tripleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['tripleKills'];
      
      
      $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4 + $tripleKills5 + $tripleKills6 + $tripleKills7 + $tripleKills8;

      $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
      $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
      $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
      $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
      $quadrupleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['quadraKills'];
      $quadrupleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['quadraKills'];
      $quadrupleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['quadraKills'];
      $quadrupleKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['quadraKills'];
     
      
      $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4 + $quadrupleKills5 + $quadrupleKills6 + $quadrupleKills7 + $quadrupleKills8;

      $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
      $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
      $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
      $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
      $pentaKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['pentaKills'];
      $pentaKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['pentaKills'];
      $pentaKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['pentaKills'];
      $pentaKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['pentaKills'];
      
      
      $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4 + $pentaKills5 + $pentaKills6 + $pentaKills7 + $pentaKills8;

      $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
      $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
      $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
      $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
      $visionScore5 = $resultData3['match5']['participants'][$participantID5]['stats']['visionScore'];
      $visionScore6 = $resultData3['match6']['participants'][$participantID6]['stats']['visionScore'];
      $visionScore7 = $resultData3['match7']['participants'][$participantID7]['stats']['visionScore'];
      $visionScore8 = $resultData3['match8']['participants'][$participantID8]['stats']['visionScore'];
      
      $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4 + $visionScore5 + $visionScore6 + $visionScore7 + $visionScore8;
      $avgVisionScore = round($totalvisionScore/8, 2);


      $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
      $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
      $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
      $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
      $totalMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['totalMinionsKilled'];
      $totalMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['totalMinionsKilled'];
      $totalMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['totalMinionsKilled'];
      $totalMinionsKilled8 = $resultData3['match8']['participants'][$participantID8]['stats']['totalMinionsKilled'];
      
      $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4 + $totalMinionsKilled5 + $totalMinionsKilled6 + $totalMinionsKilled7 + $totalMinionsKilled8;

      $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['neutralMinionsKilled'];
      $neutralMinionsKilled8 = $resultData3['match8']['participants'][$participantID8]['stats']['neutralMinionsKilled'];
      
      
      $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4 + $neutralMinionsKilled5 + $neutralMinionsKilled6 + $neutralMinionsKilled7 + $neutralMinionsKilled8;

      $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
      $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
      $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
      $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
      $turretKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['turretKills'];
      $turretKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['turretKills'];
      $turretKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['turretKills'];
      $turretKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['turretKills'];
      
      $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4 + $turretKills5 + $turretKills6 + $turretKills7 + $turretKills8;

      $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
      $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
      $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
      $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
      $inhibitorKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['inhibitorKills'];
      $inhibitorKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['inhibitorKills'];
      $inhibitorKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['inhibitorKills'];
      $inhibitorKills8 = $resultData3['match8']['participants'][$participantID8]['stats']['inhibitorKills'];
      
      $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4 + $inhibitorKills5 + $inhibitorKills6 + $inhibitorKills7 + $inhibitorKills8;

      $gameDuration1 = $resultData3['match1']['gameDuration'];
      $mins1 = $gameDuration1/60;
      $gameDuration2 = $resultData3['match2']['gameDuration'];
      $mins2 = $gameDuration2/60;
      $gameDuration3 = $resultData3['match3']['gameDuration'];
      $mins3 = $gameDuration3/60;
      $gameDuration4 = $resultData3['match4']['gameDuration'];
      $mins4 = $gameDuration4/60;
      $gameDuration5 = $resultData3['match5']['gameDuration'];
      $mins5 = $gameDuration5/60;
      $gameDuration6 = $resultData3['match6']['gameDuration'];
      $mins6 = $gameDuration6/60;
      $gameDuration7 = $resultData3['match7']['gameDuration'];
      $mins7 = $gameDuration7/60;
      $gameDuration8 = $resultData3['match8']['gameDuration'];
      $mins8 = $gameDuration8/60;
      
      $totalMins = $mins1 + $mins2 + $mins3 + $mins4 + $mins5 + $mins6 + $mins7 + $mins8;
      
      
      $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
      $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
      $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
      $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
      $largestKillingSpree5 = $resultData3['match5']['participants'][$participantID5]['stats']['largestKillingSpree'];
      $largestKillingSpree6 = $resultData3['match6']['participants'][$participantID6]['stats']['largestKillingSpree'];
      $largestKillingSpree7 = $resultData3['match7']['participants'][$participantID7]['stats']['largestKillingSpree'];
      $largestKillingSpree8 = $resultData3['match8']['participants'][$participantID8]['stats']['largestKillingSpree'];
      
      

      $largestKillingSpree = 0;
      if($largestKillingSpree1 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree1;
      }
      if($largestKillingSpree2 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree2;
      }
      if($largestKillingSpree3 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree3;
      }
      if($largestKillingSpree4 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree4;
      }
      if($largestKillingSpree5 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree5;
      }
      if($largestKillingSpree6 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree6;
      }
      if($largestKillingSpree7 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree7;
      }
      if($largestKillingSpree8 > $largestKillingSpree){
        $largestKillingSpree = $largestKillingSpree8;
      }
      

  
      if($participantID1 < 5){
        $win1 = $resultData3['match1']['teams'][0]['win'];
      }
      if($participantID1 >= 5){
        $win1 = $resultData3['match1']['teams'][1]['win'];
        
      }
      if($win1 == "Win"){
        $win1 = 1;
      }
      if($win1 == "Fail"){
        $win1 = 0;
      }
      

      if($participantID2 < 5){
        $win2 = $resultData3['match2']['teams'][0]['win'];
      }
      if($participantID2 >= 5){
        $win2 = $resultData3['match2']['teams'][1]['win'];
      }
      if($win2 == "Win"){
        $win2 = 1;
      }
      if($win2 == "Fail"){
        $win2 = 0;
      }
      
      if($participantID3 < 5){
        $win3 = $resultData3['match3']['teams'][0]['win'];
      }
      if($participantID3 >= 5){
        $win3 = $resultData3['match3']['teams'][1]['win'];
      }
      if($win3 == "Win"){
        $win3 = 1;
      }
      if($win3 == "Fail"){
        $win3 = 0;
      }
      
      if($participantID4 < 5){
        $win4 = $resultData3['match4']['teams'][0]['win'];
      }
      if($participantID4 >= 5){
        $win4 = $resultData3['match4']['teams'][1]['win'];
      }
      if($win4 == "Win"){
        $win4 = 1;
      }
      if($win4 == "Fail"){
        $win4 = 0;
      }
      
      if($participantID5 < 5){
        $win5 = $resultData3['match5']['teams'][0]['win'];
      }
      if($participantID5 >= 5){
        $win5 = $resultData3['match5']['teams'][1]['win'];
      }
      if($win5 == "Win"){
        $win5 = 1;
      }
      if($win5 == "Fail"){
        $win5 = 0;
      }
      
      if($participantID6 < 5){
        $win6 = $resultData3['match6']['teams'][0]['win'];
      }
      if($participantID6 >= 5){
        $win6 = $resultData3['match6']['teams'][1]['win'];
      }
      if($win6 == "Win"){
        $win6 = 1;
      }
      if($win6 == "Fail"){
        $win6 = 0;
      }
      
      if($participantID7 < 5){
        $win7 = $resultData3['match7']['teams'][0]['win'];
      }
      if($participantID7 >= 5){
        $win7 = $resultData3['match7']['teams'][1]['win'];
      }
      if($win7 == "Win"){
        $win7 = 1;
      }
      if($win7 == "Fail"){
        $win7 = 0;
      }
      
      if($participantID8 < 5){
        $win8 = $resultData3['match8']['teams'][0]['win'];
      }
      if($participantID8 >= 5){
        $win8 = $resultData3['match8']['teams'][1]['win'];
      }
      if($win8 == "Win"){
        $win8 = 1;
      }
      if($win8 == "Fail"){
        $win8 = 0;
      }
      
     
      
      

      $wins = $win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7 + $win8;
      $losses = 8-$wins;

      $avgKills = $totalKills/8;
      $avgAssists = $totalAssists/8;
      $avgDeaths = $totalDeaths/8;
      $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
      $avgKDA = round($avgKDA, 2);
      $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
      $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
      $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
      $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
      $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
      $CS5 = $totalMinionsKilled5 + $neutralMinionsKilled5;
      $CS6 = $totalMinionsKilled6 + $neutralMinionsKilled6;
      $CS7 = $totalMinionsKilled7 + $neutralMinionsKilled7;
      $CS8 = $totalMinionsKilled8 + $neutralMinionsKilled8;
      
      $avgCSperMin = round($totalCS/$totalMins, 2);
      $avgCSperGame = round($totalCS/8, 2);
      ?>
      <div class="helper">
        <div class="row">
          <div class="col-md-6">
      <br>
      <?php
      echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
      ?>
      <br>
      <?php
      echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
      ?>
      <br>
      <?php
      echo("Average K/D/A: $avgKDA:1");
      ?>
      <br>
      <?php
      echo("Total CS: $totalCS");
      ?>
      <br>
      <?php
      echo("CS Game 1: $CS1");
      ?>
      <br>
      <?php
      echo("CS Game 2: $CS2");
      ?>
      <br>
      <?php
      echo("CS Game 3: $CS3");
      ?>
      <br>
      <?php
      echo("CS Game 4: $CS4");
      ?>
      <br>
      <?php
      echo("CS Game 5: $CS5");
      ?>
      <br>
      <?php
      echo("CS Game 6: $CS6");
      ?>
      <br>
      <?php
      echo("CS Game 7: $CS7");
      ?>
      <br>
      <?php
      echo("CS Game 8: $CS8");
      ?>
      </div>
      <div class="col-md-6">
        <br>
      <?php
      echo("Wins: $wins");
      ?>
      <br>
      <?php
      echo("Losses: $losses");
      ?>
      <br>
      <?php
      echo("Double Kills: $totaldoubleKills");
      ?>
      <br>
      <?php
      echo("Triple Kills: $totaltripleKills");
      ?>
      <br>
      <?php
      echo("Quadra Kills: $totalquadrupleKills");
      ?>
      <br>
      <?php
      echo("Penta Kills: $totalpentaKills");
      ?>
      <br>
      <?php
      echo("Total Turret Kills: $totalturretKills");
      ?>
      <br>
      <?php
      echo("Total Inhibitor Kills: $totalinhibitorKills");
      ?>
      <br>
      <?php
      echo("Average Vision Score: $avgVisionScore");
      ?>
      <br>
      <?php
      echo("Largest Killing Spree: $largestKillingSpree");
      ?>
      <br>
      <?php
      echo("Average CS/Min: $avgCSperMin");
      ?>
      <br>
      <?php
      echo("Average CS/Game: $avgCSperGame");
      ?>
      </div>
    </div>
    </div>
      <?php
    }


      #if size is 7

      if($size == 7){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
        // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
        // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
        // print_r($resultData3['match5']['participantIdentities'][6]['player']['summonerName']);
        // print_r($resultData3['match6']['participantIdentities'][1]['player']['summonerName']);
        // print_r($resultData3['match7']['participantIdentities'][3]['player']['summonerName']);
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID5 = $resultData3['match5']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'], $participantID5);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID6 = $resultData3['match6']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'], $participantID6);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID7 = $resultData3['match7']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match7']['participantIdentities'][$x]['player']['summonerName'], $participantID7);
          }
        }
        
        $participantID1 = $participantID1-1;
        $participantID2 = $participantID2-1;
        $participantID3 = $participantID3-1;
        $participantID4 = $participantID4-1;
        $participantID5 = $participantID5-1;
        $participantID6 = $participantID6-1;
        $participantID7 = $participantID7-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        //  echo($participantID3);
        //  echo($participantID4);
        //  echo($participantID5);
        //  echo($participantID6);
        //  echo($participantID7);
        //  echo($participantID8);
        //  echo($participantID9);
        //  echo($participantID10);
    
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
        $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
        $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
        $kills5 = $resultData3['match5']['participants'][$participantID5]['stats']['kills'];
        $kills6 = $resultData3['match6']['participants'][$participantID6]['stats']['kills'];
        $kills7 = $resultData3['match7']['participants'][$participantID7]['stats']['kills'];
        
        
        $totalKills = $kills1 + $kills2 + $kills3 + $kills4 + $kills5 + $kills6 + $kills7;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
        $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
        $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
        $assists5 = $resultData3['match5']['participants'][$participantID5]['stats']['assists'];
        $assists6 = $resultData3['match6']['participants'][$participantID6]['stats']['assists'];
        $assists7 = $resultData3['match7']['participants'][$participantID7]['stats']['assists'];
       
        
       
        $totalAssists = $assists1 + $assists2 + $assists3 + $assists4 + $assists5 + $assists6 + $assists7;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
        $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
        $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
        $deaths5 = $resultData3['match5']['participants'][$participantID5]['stats']['deaths'];
        $deaths6 = $resultData3['match6']['participants'][$participantID6]['stats']['deaths'];
        $deaths7 = $resultData3['match7']['participants'][$participantID7]['stats']['deaths'];
        
        
        
        $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4 + $deaths5 + $deaths6 + $deaths7;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
        $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
        $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
        $doubleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['doubleKills'];
        $doubleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['doubleKills'];
        $doubleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['doubleKills'];
        
        
        $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4 + $doubleKills5 + $doubleKills6 + $doubleKills7;
  
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
        $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
        $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
        $tripleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['tripleKills'];
        $tripleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['tripleKills'];
        $tripleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['tripleKills'];
       
        
        
        $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4 + $tripleKills5 + $tripleKills6 + $tripleKills7;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
        $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
        $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
        $quadrupleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['quadraKills'];
        $quadrupleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['quadraKills'];
        $quadrupleKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['quadraKills'];
        
       
        
        $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4 + $quadrupleKills5 + $quadrupleKills6 + $quadrupleKills7;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
        $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
        $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
        $pentaKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['pentaKills'];
        $pentaKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['pentaKills'];
        $pentaKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['pentaKills'];
        
        
        
        $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4 + $pentaKills5 + $pentaKills6 + $pentaKills7;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
        $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
        $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
        $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
        $visionScore5 = $resultData3['match5']['participants'][$participantID5]['stats']['visionScore'];
        $visionScore6 = $resultData3['match6']['participants'][$participantID6]['stats']['visionScore'];
        $visionScore7 = $resultData3['match7']['participants'][$participantID7]['stats']['visionScore'];
        
        
        $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4 + $visionScore5 + $visionScore6 + $visionScore7;
        $avgVisionScore = round($totalvisionScore/7, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
        $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
        $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
        $totalMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['totalMinionsKilled'];
        $totalMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['totalMinionsKilled'];
        $totalMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['totalMinionsKilled'];
        
        
        $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4 + $totalMinionsKilled5 + $totalMinionsKilled6 + $totalMinionsKilled7;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled7 = $resultData3['match7']['participants'][$participantID7]['stats']['neutralMinionsKilled'];
        
        
        $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4 + $neutralMinionsKilled5 + $neutralMinionsKilled6 + $neutralMinionsKilled7;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
        $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
        $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
        $turretKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['turretKills'];
        $turretKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['turretKills'];
        $turretKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['turretKills'];
        
        
        $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4 + $turretKills5 + $turretKills6 + $turretKills7;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
        $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
        $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
        $inhibitorKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['inhibitorKills'];
        $inhibitorKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['inhibitorKills'];
        $inhibitorKills7 = $resultData3['match7']['participants'][$participantID7]['stats']['inhibitorKills'];
        
        
        $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4 + $inhibitorKills5 + $inhibitorKills6 + $inhibitorKills7;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        $gameDuration2 = $resultData3['match2']['gameDuration'];
        $mins2 = $gameDuration2/60;
        $gameDuration3 = $resultData3['match3']['gameDuration'];
        $mins3 = $gameDuration3/60;
        $gameDuration4 = $resultData3['match4']['gameDuration'];
        $mins4 = $gameDuration4/60;
        $gameDuration5 = $resultData3['match5']['gameDuration'];
        $mins5 = $gameDuration5/60;
        $gameDuration6 = $resultData3['match6']['gameDuration'];
        $mins6 = $gameDuration6/60;
        $gameDuration7 = $resultData3['match7']['gameDuration'];
        $mins7 = $gameDuration7/60;
        
        $totalMins = $mins1 + $mins2 + $mins3 + $mins4 + $mins5 + $mins6 + $mins7;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
        $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
        $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
        $largestKillingSpree5 = $resultData3['match5']['participants'][$participantID5]['stats']['largestKillingSpree'];
        $largestKillingSpree6 = $resultData3['match6']['participants'][$participantID6]['stats']['largestKillingSpree'];
        $largestKillingSpree7 = $resultData3['match7']['participants'][$participantID7]['stats']['largestKillingSpree'];
        
        
  
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        if($largestKillingSpree2 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree2;
        }
        if($largestKillingSpree3 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree3;
        }
        if($largestKillingSpree4 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree4;
        }
        if($largestKillingSpree5 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree5;
        }
        if($largestKillingSpree6 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree6;
        }
        if($largestKillingSpree7 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree7;
        }
  
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        if($participantID2 < 5){
          $win2 = $resultData3['match2']['teams'][0]['win'];
        }
        if($participantID2 >= 5){
          $win2 = $resultData3['match2']['teams'][1]['win'];
        }
        if($win2 == "Win"){
          $win2 = 1;
        }
        if($win2 == "Fail"){
          $win2 = 0;
        }
        
        if($participantID3 < 5){
          $win3 = $resultData3['match3']['teams'][0]['win'];
        }
        if($participantID3 >= 5){
          $win3 = $resultData3['match3']['teams'][1]['win'];
        }
        if($win3 == "Win"){
          $win3 = 1;
        }
        if($win3 == "Fail"){
          $win3 = 0;
        }
        
        if($participantID4 < 5){
          $win4 = $resultData3['match4']['teams'][0]['win'];
        }
        if($participantID4 >= 5){
          $win4 = $resultData3['match4']['teams'][1]['win'];
        }
        if($win4 == "Win"){
          $win4 = 1;
        }
        if($win4 == "Fail"){
          $win4 = 0;
        }
        
        if($participantID5 < 5){
          $win5 = $resultData3['match5']['teams'][0]['win'];
        }
        if($participantID5 >= 5){
          $win5 = $resultData3['match5']['teams'][1]['win'];
        }
        if($win5 == "Win"){
          $win5 = 1;
        }
        if($win5 == "Fail"){
          $win5 = 0;
        }
        
        if($participantID6 < 5){
          $win6 = $resultData3['match6']['teams'][0]['win'];
        }
        if($participantID6 >= 5){
          $win6 = $resultData3['match6']['teams'][1]['win'];
        }
        if($win6 == "Win"){
          $win6 = 1;
        }
        if($win6 == "Fail"){
          $win6 = 0;
        }
        
        if($participantID7 < 5){
          $win7 = $resultData3['match7']['teams'][0]['win'];
        }
        if($participantID7 >= 5){
          $win7 = $resultData3['match7']['teams'][1]['win'];
        }
        if($win7 == "Win"){
          $win7 = 1;
        }
        if($win7 == "Fail"){
          $win7 = 0;
        }  
        
  
        $wins = $win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7;
        $losses = 7-$wins;
  
        $avgKills = $totalKills/7;
        $avgAssists = $totalAssists/7;
        $avgDeaths = $totalDeaths/7;
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
        $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
        $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
        $CS5 = $totalMinionsKilled5 + $neutralMinionsKilled5;
        $CS6 = $totalMinionsKilled6 + $neutralMinionsKilled6;
        $CS7 = $totalMinionsKilled7 + $neutralMinionsKilled7;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/7, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        <br>
        <?php
        echo("CS Game 2: $CS2");
        ?>
        <br>
        <?php
        echo("CS Game 3: $CS3");
        ?>
        <br>
        <?php
        echo("CS Game 4: $CS4");
        ?>
        <br>
        <?php
        echo("CS Game 5: $CS5");
        ?>
        <br>
        <?php
        echo("CS Game 6: $CS6");
        ?>
        <br>
        <?php
        echo("CS Game 7: $CS7");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }


      #if size is 6

      if($size == 6){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
        // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
        // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
        // print_r($resultData3['match5']['participantIdentities'][6]['player']['summonerName']);
        // print_r($resultData3['match6']['participantIdentities'][1]['player']['summonerName']);
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID5 = $resultData3['match5']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'], $participantID5);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID6 = $resultData3['match6']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match6']['participantIdentities'][$x]['player']['summonerName'], $participantID6);
          }
        }
       
        $participantID1 = $participantID1-1;
        $participantID2 = $participantID2-1;
        $participantID3 = $participantID3-1;
        $participantID4 = $participantID4-1;
        $participantID5 = $participantID5-1;
        $participantID6 = $participantID6-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        //  echo($participantID3);
        //  echo($participantID4);
        //  echo($participantID5);
        //  echo($participantID6);
    
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
        $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
        $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
        $kills5 = $resultData3['match5']['participants'][$participantID5]['stats']['kills'];
        $kills6 = $resultData3['match6']['participants'][$participantID6]['stats']['kills'];
        
        
        $totalKills = $kills1 + $kills2 + $kills3 + $kills4 + $kills5 + $kills6;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
        $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
        $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
        $assists5 = $resultData3['match5']['participants'][$participantID5]['stats']['assists'];
        $assists6 = $resultData3['match6']['participants'][$participantID6]['stats']['assists'];
   
       
        $totalAssists = $assists1 + $assists2 + $assists3 + $assists4 + $assists5 + $assists6;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
        $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
        $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
        $deaths5 = $resultData3['match5']['participants'][$participantID5]['stats']['deaths'];
        $deaths6 = $resultData3['match6']['participants'][$participantID6]['stats']['deaths'];
      
        
        $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4 + $deaths5 + $deaths6;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
        $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
        $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
        $doubleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['doubleKills'];
        $doubleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['doubleKills'];
        
        $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4 + $doubleKills5 + $doubleKills6;
  
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
        $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
        $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
        $tripleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['tripleKills'];
        $tripleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['tripleKills'];
       
        
        $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4 + $tripleKills5 + $tripleKills6;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
        $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
        $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
        $quadrupleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['quadraKills'];
        $quadrupleKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['quadraKills'];
        
        $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4 + $quadrupleKills5 + $quadrupleKills6;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
        $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
        $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
        $pentaKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['pentaKills'];
        $pentaKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['pentaKills'];
        
        $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4 + $pentaKills5 + $pentaKills6;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
        $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
        $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
        $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
        $visionScore5 = $resultData3['match5']['participants'][$participantID5]['stats']['visionScore'];
        $visionScore6 = $resultData3['match6']['participants'][$participantID6]['stats']['visionScore'];
        
        $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4 + $visionScore5 + $visionScore6;
        $avgVisionScore = round($totalvisionScore/6, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
        $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
        $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
        $totalMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['totalMinionsKilled'];
        $totalMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['totalMinionsKilled'];
        
        $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4 + $totalMinionsKilled5 + $totalMinionsKilled6;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled6 = $resultData3['match6']['participants'][$participantID6]['stats']['neutralMinionsKilled'];
        
        $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4 + $neutralMinionsKilled5 + $neutralMinionsKilled6;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
        $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
        $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
        $turretKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['turretKills'];
        $turretKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['turretKills'];
        
        $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4 + $turretKills5 + $turretKills6;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
        $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
        $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
        $inhibitorKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['inhibitorKills'];
        $inhibitorKills6 = $resultData3['match6']['participants'][$participantID6]['stats']['inhibitorKills'];
        
        $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4 + $inhibitorKills5 + $inhibitorKills6;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        $gameDuration2 = $resultData3['match2']['gameDuration'];
        $mins2 = $gameDuration2/60;
        $gameDuration3 = $resultData3['match3']['gameDuration'];
        $mins3 = $gameDuration3/60;
        $gameDuration4 = $resultData3['match4']['gameDuration'];
        $mins4 = $gameDuration4/60;
        $gameDuration5 = $resultData3['match5']['gameDuration'];
        $mins5 = $gameDuration5/60;
        $gameDuration6 = $resultData3['match6']['gameDuration'];
        $mins6 = $gameDuration6/60;
        
        $totalMins = $mins1 + $mins2 + $mins3 + $mins4 + $mins5 + $mins6;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
        $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
        $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
        $largestKillingSpree5 = $resultData3['match5']['participants'][$participantID5]['stats']['largestKillingSpree'];
        $largestKillingSpree6 = $resultData3['match6']['participants'][$participantID6]['stats']['largestKillingSpree'];
  
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        if($largestKillingSpree2 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree2;
        }
        if($largestKillingSpree3 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree3;
        }
        if($largestKillingSpree4 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree4;
        }
        if($largestKillingSpree5 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree5;
        }
        if($largestKillingSpree6 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree6;
        }
        
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        if($participantID2 < 5){
          $win2 = $resultData3['match2']['teams'][0]['win'];
        }
        if($participantID2 >= 5){
          $win2 = $resultData3['match2']['teams'][1]['win'];
        }
        if($win2 == "Win"){
          $win2 = 1;
        }
        if($win2 == "Fail"){
          $win2 = 0;
        }
        
        if($participantID3 < 5){
          $win3 = $resultData3['match3']['teams'][0]['win'];
        }
        if($participantID3 >= 5){
          $win3 = $resultData3['match3']['teams'][1]['win'];
        }
        if($win3 == "Win"){
          $win3 = 1;
        }
        if($win3 == "Fail"){
          $win3 = 0;
        }
        
        if($participantID4 < 5){
          $win4 = $resultData3['match4']['teams'][0]['win'];
        }
        if($participantID4 >= 5){
          $win4 = $resultData3['match4']['teams'][1]['win'];
        }
        if($win4 == "Win"){
          $win4 = 1;
        }
        if($win4 == "Fail"){
          $win4 = 0;
        }
        
        if($participantID5 < 5){
          $win5 = $resultData3['match5']['teams'][0]['win'];
        }
        if($participantID5 >= 5){
          $win5 = $resultData3['match5']['teams'][1]['win'];
        }
        if($win5 == "Win"){
          $win5 = 1;
        }
        if($win5 == "Fail"){
          $win5 = 0;
        }
        
        if($participantID6 < 5){
          $win6 = $resultData3['match6']['teams'][0]['win'];
        }
        if($participantID6 >= 5){
          $win6 = $resultData3['match6']['teams'][1]['win'];
        }
        if($win6 == "Win"){
          $win6 = 1;
        }
        if($win6 == "Fail"){
          $win6 = 0;
        }
        
  
        $wins = $win1 + $win2 + $win3 + $win4 + $win5 + $win6;
        $losses = 6-$wins;
  
        $avgKills = $totalKills/6;
        $avgAssists = $totalAssists/6;
        $avgDeaths = $totalDeaths/6;
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
        $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
        $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
        $CS5 = $totalMinionsKilled5 + $neutralMinionsKilled5;
        $CS6 = $totalMinionsKilled6 + $neutralMinionsKilled6;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/6, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        <br>
        <?php
        echo("CS Game 2: $CS2");
        ?>
        <br>
        <?php
        echo("CS Game 3: $CS3");
        ?>
        <br>
        <?php
        echo("CS Game 4: $CS4");
        ?>
        <br>
        <?php
        echo("CS Game 5: $CS5");
        ?>
        <br>
        <?php
        echo("CS Game 6: $CS6");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }


      #if size is 5

      if($size == 5){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
        // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
        // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
        // print_r($resultData3['match5']['participantIdentities'][6]['player']['summonerName']);
        
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID5 = $resultData3['match5']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match5']['participantIdentities'][$x]['player']['summonerName'], $participantID5);
          }
        }
        
       
        $participantID1 = $participantID1-1;
        $participantID2 = $participantID2-1;
        $participantID3 = $participantID3-1;
        $participantID4 = $participantID4-1;
        $participantID5 = $participantID5-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        //  echo($participantID3);
        //  echo($participantID4);
        //  echo($participantID5);
       
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
        $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
        $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
        $kills5 = $resultData3['match5']['participants'][$participantID5]['stats']['kills'];
       
        $totalKills = $kills1 + $kills2 + $kills3 + $kills4 + $kills5;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
        $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
        $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
        $assists5 = $resultData3['match5']['participants'][$participantID5]['stats']['assists'];
        
        $totalAssists = $assists1 + $assists2 + $assists3 + $assists4 + $assists5;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
        $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
        $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
        $deaths5 = $resultData3['match5']['participants'][$participantID5]['stats']['deaths'];
        
        $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4 + $deaths5;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
        $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
        $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
        $doubleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['doubleKills'];
        
        $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4 + $doubleKills5;
  
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
        $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
        $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
        $tripleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['tripleKills'];
        
        $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4 + $tripleKills5;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
        $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
        $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
        $quadrupleKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['quadraKills'];
        
        $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4 + $quadrupleKills5;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
        $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
        $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
        $pentaKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['pentaKills'];
        
        $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4 + $pentaKills5;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
        $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
        $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
        $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
        $visionScore5 = $resultData3['match5']['participants'][$participantID5]['stats']['visionScore'];
       
        $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4 + $visionScore5;
        $avgVisionScore = round($totalvisionScore/5, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
        $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
        $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
        $totalMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['totalMinionsKilled'];
        
        $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4 + $totalMinionsKilled5;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled5 = $resultData3['match5']['participants'][$participantID5]['stats']['neutralMinionsKilled'];
        
        $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4 + $neutralMinionsKilled5;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
        $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
        $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
        $turretKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['turretKills'];
        
        $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4 + $turretKills5;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
        $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
        $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
        $inhibitorKills5 = $resultData3['match5']['participants'][$participantID5]['stats']['inhibitorKills'];
        
        $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4 + $inhibitorKills5;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        $gameDuration2 = $resultData3['match2']['gameDuration'];
        $mins2 = $gameDuration2/60;
        $gameDuration3 = $resultData3['match3']['gameDuration'];
        $mins3 = $gameDuration3/60;
        $gameDuration4 = $resultData3['match4']['gameDuration'];
        $mins4 = $gameDuration4/60;
        $gameDuration5 = $resultData3['match5']['gameDuration'];
        $mins5 = $gameDuration5/60;
        
        $totalMins = $mins1 + $mins2 + $mins3 + $mins4 + $mins5;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
        $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
        $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
        $largestKillingSpree5 = $resultData3['match5']['participants'][$participantID5]['stats']['largestKillingSpree'];
        
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        if($largestKillingSpree2 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree2;
        }
        if($largestKillingSpree3 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree3;
        }
        if($largestKillingSpree4 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree4;
        }
        if($largestKillingSpree5 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree5;
        }
        
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        if($participantID2 < 5){
          $win2 = $resultData3['match2']['teams'][0]['win'];
        }
        if($participantID2 >= 5){
          $win2 = $resultData3['match2']['teams'][1]['win'];
        }
        if($win2 == "Win"){
          $win2 = 1;
        }
        if($win2 == "Fail"){
          $win2 = 0;
        }
        
        if($participantID3 < 5){
          $win3 = $resultData3['match3']['teams'][0]['win'];
        }
        if($participantID3 >= 5){
          $win3 = $resultData3['match3']['teams'][1]['win'];
        }
        if($win3 == "Win"){
          $win3 = 1;
        }
        if($win3 == "Fail"){
          $win3 = 0;
        }
        
        if($participantID4 < 5){
          $win4 = $resultData3['match4']['teams'][0]['win'];
        }
        if($participantID4 >= 5){
          $win4 = $resultData3['match4']['teams'][1]['win'];
        }
        if($win4 == "Win"){
          $win4 = 1;
        }
        if($win4 == "Fail"){
          $win4 = 0;
        }
        
        if($participantID5 < 5){
          $win5 = $resultData3['match5']['teams'][0]['win'];
        }
        if($participantID5 >= 5){
          $win5 = $resultData3['match5']['teams'][1]['win'];
        }
        if($win5 == "Win"){
          $win5 = 1;
        }
        if($win5 == "Fail"){
          $win5 = 0;
        }
        
        
  
        $wins = $win1 + $win2 + $win3 + $win4 + $win5;
        $losses = 5-$wins;
  
        $avgKills = $totalKills/5;
        $avgAssists = $totalAssists/5;
        $avgDeaths = $totalDeaths/5;
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
        $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
        $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
        $CS5 = $totalMinionsKilled5 + $neutralMinionsKilled5;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/5, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        <br>
        <?php
        echo("CS Game 2: $CS2");
        ?>
        <br>
        <?php
        echo("CS Game 3: $CS3");
        ?>
        <br>
        <?php
        echo("CS Game 4: $CS4");
        ?>
        <br>
        <?php
        echo("CS Game 5: $CS5");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }


      #if size is 4

      if($size == 4){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
        // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
        // print_r($resultData3['match4']['participantIdentities'][2]['player']['summonerName']);
        
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID4 = $resultData3['match4']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match4']['participantIdentities'][$x]['player']['summonerName'], $participantID4);
          }
        }
       
        $participantID1 = $participantID1-1;
        $participantID2 = $participantID2-1;
        $participantID3 = $participantID3-1;
        $participantID4 = $participantID4-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        //  echo($participantID3);
        //  echo($participantID4);
      
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
        $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
        $kills4 = $resultData3['match4']['participants'][$participantID4]['stats']['kills'];
        
        $totalKills = $kills1 + $kills2 + $kills3 + $kills4;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
        $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
        $assists4 = $resultData3['match4']['participants'][$participantID4]['stats']['assists'];
        
        $totalAssists = $assists1 + $assists2 + $assists3 + $assists4;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
        $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
        $deaths4 = $resultData3['match4']['participants'][$participantID4]['stats']['deaths'];
        
        $totalDeaths = $deaths1 + $deaths2 + $deaths3 + $deaths4;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
        $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
        $doubleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['doubleKills'];
       
        $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3 + $doubleKills4;
  
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
        $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
        $tripleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['tripleKills'];
        
        $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3 + $tripleKills4;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
        $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
        $quadrupleKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['quadraKills'];
        
        $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3 + $quadrupleKills4;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
        $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
        $pentaKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['pentaKills'];
        
        $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3 + $pentaKills4;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
        $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
        $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
        $visionScore4 = $resultData3['match4']['participants'][$participantID4]['stats']['visionScore'];
        
        $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3 + $visionScore4;
        $avgVisionScore = round($totalvisionScore/4, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
        $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
        $totalMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['totalMinionsKilled'];
        
        $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3 + $totalMinionsKilled4;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled4 = $resultData3['match4']['participants'][$participantID4]['stats']['neutralMinionsKilled'];
        
        $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3 + $neutralMinionsKilled4;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
        $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
        $turretKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['turretKills'];
        
        $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3 + $turretKills4;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
        $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
        $inhibitorKills4 = $resultData3['match4']['participants'][$participantID4]['stats']['inhibitorKills'];
        
        $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3 + $inhibitorKills4;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        $gameDuration2 = $resultData3['match2']['gameDuration'];
        $mins2 = $gameDuration2/60;
        $gameDuration3 = $resultData3['match3']['gameDuration'];
        $mins3 = $gameDuration3/60;
        $gameDuration4 = $resultData3['match4']['gameDuration'];
        $mins4 = $gameDuration4/60;
        
        
        $totalMins = $mins1 + $mins2 + $mins3 + $mins4;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
        $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
        $largestKillingSpree4 = $resultData3['match4']['participants'][$participantID4]['stats']['largestKillingSpree'];
        
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        if($largestKillingSpree2 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree2;
        }
        if($largestKillingSpree3 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree3;
        }
        if($largestKillingSpree4 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree4;
        }
        
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        if($participantID2 < 5){
          $win2 = $resultData3['match2']['teams'][0]['win'];
        }
        if($participantID2 >= 5){
          $win2 = $resultData3['match2']['teams'][1]['win'];
        }
        if($win2 == "Win"){
          $win2 = 1;
        }
        if($win2 == "Fail"){
          $win2 = 0;
        }
        
        if($participantID3 < 5){
          $win3 = $resultData3['match3']['teams'][0]['win'];
        }
        if($participantID3 >= 5){
          $win3 = $resultData3['match3']['teams'][1]['win'];
        }
        if($win3 == "Win"){
          $win3 = 1;
        }
        if($win3 == "Fail"){
          $win3 = 0;
        }
        
        if($participantID4 < 5){
          $win4 = $resultData3['match4']['teams'][0]['win'];
        }
        if($participantID4 >= 5){
          $win4 = $resultData3['match4']['teams'][1]['win'];
        }
        if($win4 == "Win"){
          $win4 = 1;
        }
        if($win4 == "Fail"){
          $win4 = 0;
        }
       


        $wins = $win1 + $win2 + $win3 + $win4;
        $losses = 4-$wins;
  
        $avgKills = $totalKills/4;
        $avgAssists = $totalAssists/4;
        $avgDeaths = $totalDeaths/4;
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
        $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
        $CS4 = $totalMinionsKilled4 + $neutralMinionsKilled4;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/4, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        <br>
        <?php
        echo("CS Game 2: $CS2");
        ?>
        <br>
        <?php
        echo("CS Game 3: $CS3");
        ?>
        <br>
        <?php
        echo("CS Game 4: $CS4");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }
    

      #if size is 3

      if($size == 3){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
        // print_r($resultData3['match3']['participantIdentities'][6]['player']['summonerName']);
        
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID3 = $resultData3['match3']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match3']['participantIdentities'][$x]['player']['summonerName'], $participantID3);
          }
        }
        
        $participantID1 = $participantID1-1;
        $participantID2 = $participantID2-1;
        $participantID3 = $participantID3-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        //  echo($participantID3);
        
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
        $kills3 = $resultData3['match3']['participants'][$participantID3]['stats']['kills'];
        
        $totalKills = $kills1 + $kills2 + $kills3;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
        $assists3 = $resultData3['match3']['participants'][$participantID3]['stats']['assists'];
       
        $totalAssists = $assists1 + $assists2 + $assists3;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
        $deaths3 = $resultData3['match3']['participants'][$participantID3]['stats']['deaths'];
        
        $totalDeaths = $deaths1 + $deaths2 + $deaths3;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
        $doubleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['doubleKills'];
        
        $totaldoubleKills = $doubleKills1 + $doubleKills2 + $doubleKills3;
  
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
        $tripleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['tripleKills'];
        
        $totaltripleKills = $tripleKills1 + $tripleKills2 + $tripleKills3;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
        $quadrupleKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['quadraKills'];
        
        $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2 + $quadrupleKills3;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
        $pentaKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['pentaKills'];
        
        $totalpentaKills = $pentaKills1 + $pentaKills2 + $pentaKills3;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
        $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
        $visionScore3 = $resultData3['match3']['participants'][$participantID3]['stats']['visionScore'];
        
        $totalvisionScore = $visionScore1 + $visionScore2 + $visionScore3;
        $avgVisionScore = round($totalvisionScore/3, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
        $totalMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['totalMinionsKilled'];
        
        $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2 + $totalMinionsKilled3;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled3 = $resultData3['match3']['participants'][$participantID3]['stats']['neutralMinionsKilled'];
        
        $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2 + $neutralMinionsKilled3;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
        $turretKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['turretKills'];
        
        $totalturretKills = $turretKills1 + $turretKills2 + $turretKills3;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
        $inhibitorKills3 = $resultData3['match3']['participants'][$participantID3]['stats']['inhibitorKills'];
        
        $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2 + $inhibitorKills3;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        $gameDuration2 = $resultData3['match2']['gameDuration'];
        $mins2 = $gameDuration2/60;
        $gameDuration3 = $resultData3['match3']['gameDuration'];
        $mins3 = $gameDuration3/60;
        
        $totalMins = $mins1 + $mins2 + $mins3;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
        $largestKillingSpree3 = $resultData3['match3']['participants'][$participantID3]['stats']['largestKillingSpree'];
        
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        if($largestKillingSpree2 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree2;
        }
        if($largestKillingSpree3 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree3;
        }
        
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        if($participantID2 < 5){
          $win2 = $resultData3['match2']['teams'][0]['win'];
        }
        if($participantID2 >= 5){
          $win2 = $resultData3['match2']['teams'][1]['win'];
        }
        if($win2 == "Win"){
          $win2 = 1;
        }
        if($win2 == "Fail"){
          $win2 = 0;
        }
        
        if($participantID3 < 5){
          $win3 = $resultData3['match3']['teams'][0]['win'];
        }
        if($participantID3 >= 5){
          $win3 = $resultData3['match3']['teams'][1]['win'];
        }
        if($win3 == "Win"){
          $win3 = 1;
        }
        if($win3 == "Fail"){
          $win3 = 0;
        }
        


        $wins = $win1 + $win2 + $win3;
        $losses = 3-$wins;
  
        $avgKills = round($totalKills/3, 2);
        $avgAssists = round($totalAssists/3, 2);
        $avgDeaths = round($totalDeaths/3, 2);
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
        $CS3 = $totalMinionsKilled3 + $neutralMinionsKilled3;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/3, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        <br>
        <?php
        echo("CS Game 2: $CS2");
        ?>
        <br>
        <?php
        echo("CS Game 3: $CS3");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }


      #if size is 2

      if($size == 2){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        // print_r($resultData3['match2']['participantIdentities'][3]['player']['summonerName']);
        
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        for($x = 0; $x<10; $x++){
          if($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID2 = $resultData3['match2']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match2']['participantIdentities'][$x]['player']['summonerName'], $participantID2);
          }
        }
        
        
        $participantID1 = $participantID1-1;
        $participantID2 = $participantID2-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        $kills2 = $resultData3['match2']['participants'][$participantID2]['stats']['kills'];
        
        $totalKills = $kills1 + $kills2;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        $assists2 = $resultData3['match2']['participants'][$participantID2]['stats']['assists'];
        
        $totalAssists = $assists1 + $assists2;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        $deaths2 = $resultData3['match2']['participants'][$participantID2]['stats']['deaths'];
        
        $totalDeaths = $deaths1 + $deaths2;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        $doubleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['doubleKills'];
        
        $totaldoubleKills = $doubleKills1 + $doubleKills2;
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        $tripleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['tripleKills'];
        
        $totaltripleKills = $tripleKills1 + $tripleKills2;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        $quadrupleKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['quadraKills'];
        
        $totalquadrupleKills = $quadrupleKills1 + $quadrupleKills2;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        $pentaKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['pentaKills'];
        
        $totalpentaKills = $pentaKills1 + $pentaKills2;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
        $visionScore2 = $resultData3['match2']['participants'][$participantID2]['stats']['visionScore'];
        
        $totalvisionScore = $visionScore1 + $visionScore2;
        $avgVisionScore = round($totalvisionScore/2, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        $totalMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['totalMinionsKilled'];
        
        $totaltotalMinionsKilled = $totalMinionsKilled1 + $totalMinionsKilled2;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
        $neutralMinionsKilled2 = $resultData3['match2']['participants'][$participantID2]['stats']['neutralMinionsKilled'];
         
        $totalneutralMinionsKilled = $neutralMinionsKilled1 + $neutralMinionsKilled2;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        $turretKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['turretKills'];
        
        $totalturretKills = $turretKills1 + $turretKills2;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        $inhibitorKills2 = $resultData3['match2']['participants'][$participantID2]['stats']['inhibitorKills'];
        
        $totalinhibitorKills = $inhibitorKills1 + $inhibitorKills2;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        $gameDuration2 = $resultData3['match2']['gameDuration'];
        $mins2 = $gameDuration2/60;
        
        $totalMins = $mins1 + $mins2;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        $largestKillingSpree2 = $resultData3['match2']['participants'][$participantID2]['stats']['largestKillingSpree'];
        
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        if($largestKillingSpree2 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree2;
        }
        
        
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        if($participantID2 < 5){
          $win2 = $resultData3['match2']['teams'][0]['win'];
        }
        if($participantID2 >= 5){
          $win2 = $resultData3['match2']['teams'][1]['win'];
        }
        if($win2 == "Win"){
          $win2 = 1;
        }
        if($win2 == "Fail"){
          $win2 = 0;
        }
        
        $wins = $win1 + $win2;
        $losses = 2-$wins;
  
        $avgKills = $totalKills/2;
        $avgAssists = $totalAssists/2;
        $avgDeaths = $totalDeaths/2;
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        $CS2 = $totalMinionsKilled2 + $neutralMinionsKilled2;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/2, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        <br>
        <?php
        echo("CS Game 2: $CS2");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }


      #if size is 1

      if($size == 1){
        #print_r($resultData3);
        // print_r($resultData3['match1']['participantIdentities'][8]['player']['summonerName']);
        
        #print_r($_SESSION['summonerName']);
        for($x = 0; $x<10; $x++){
          if($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'] == $_SESSION['summonerName']){
            $participantID1 = $resultData3['match1']['participantIdentities'][$x]['participantId'];
            #print_r($resultData3['match1']['participantIdentities'][$x]['player']['summonerName'], $participantID1);
          }
        }
        
        $participantID1 = $participantID1-1;
        
        //  echo($participantID1);
        //  echo($participantID2);
        
        #print($participantID);
        $kills = 0;
        $kills1 = $resultData3['match1']['participants'][$participantID1]['stats']['kills'];
        
        $totalKills = $kills1;
  
        $assists1 = $resultData3['match1']['participants'][$participantID1]['stats']['assists'];
        
        $totalAssists = $assists1;
  
        $deaths1 = $resultData3['match1']['participants'][$participantID1]['stats']['deaths'];
        
        $totalDeaths = $deaths1;
  
        $doubleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['doubleKills'];
        
        $totaldoubleKills = $doubleKills1;
  
        $tripleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['tripleKills'];
        
        $totaltripleKills = $tripleKills1;
  
        $quadrupleKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['quadraKills'];
        
        $totalquadrupleKills = $quadrupleKills1;
  
        $pentaKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['pentaKills'];
        
        $totalpentaKills = $pentaKills1;
  
        $visionScore1 = $resultData3['match1']['participants'][$participantID1]['stats']['visionScore'];
       
        $totalvisionScore = $visionScore1;
        $avgVisionScore = round($totalvisionScore/1, 2);
  
  
        $totalMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['totalMinionsKilled'];
        
        $totaltotalMinionsKilled = $totalMinionsKilled1;
  
        $neutralMinionsKilled1 = $resultData3['match1']['participants'][$participantID1]['stats']['neutralMinionsKilled'];
         
        $totalneutralMinionsKilled = $neutralMinionsKilled1;
  
        $turretKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['turretKills'];
        
        $totalturretKills = $turretKills1;
  
        $inhibitorKills1 = $resultData3['match1']['participants'][$participantID1]['stats']['inhibitorKills'];
        
        $totalinhibitorKills = $inhibitorKills1;
  
        $gameDuration1 = $resultData3['match1']['gameDuration'];
        $mins1 = $gameDuration1/60;
        
        
        $totalMins = $mins1;
        
        
        $largestKillingSpree1 = $resultData3['match1']['participants'][$participantID1]['stats']['largestKillingSpree'];
        
        $largestKillingSpree = 0;
        if($largestKillingSpree1 > $largestKillingSpree){
          $largestKillingSpree = $largestKillingSpree1;
        }
        
    
        if($participantID1 < 5){
          $win1 = $resultData3['match1']['teams'][0]['win'];
        }
        if($participantID1 >= 5){
          $win1 = $resultData3['match1']['teams'][1]['win'];
          
        }
        if($win1 == "Win"){
          $win1 = 1;
        }
        if($win1 == "Fail"){
          $win1 = 0;
        }
        
  
        $wins = $win1;
        $losses = 1-$wins;
  
        $avgKills = $totalKills/1;
        $avgAssists = $totalAssists/1;
        $avgDeaths = $totalDeaths/1;
        $avgKDA = ($avgKills+$avgAssists)/$avgDeaths;
        $avgKDA = round($avgKDA, 2);
        $totalCS = $totaltotalMinionsKilled + $totalneutralMinionsKilled;
        $CS1 = $totalMinionsKilled1 + $neutralMinionsKilled1;
        
        $avgCSperMin = round($totalCS/$totalMins, 2);
        $avgCSperGame = round($totalCS/1, 2);
        ?>
        <div class="helper">
          <div class="row">
            <div class="col-md-6">
        <br>
        <?php
        echo("Total Kills/Deaths/Assists: $totalKills/$totalDeaths/$totalAssists");
        ?>
        <br>
        <?php
        echo("Average Kills/Deaths/Assists Per Game: $avgKills/$avgDeaths/$avgAssists");
        ?>
        <br>
        <?php
        echo("Average K/D/A: $avgKDA:1");
        ?>
        <br>
        <?php
        echo("Total CS: $totalCS");
        ?>
        <br>
        <?php
        echo("CS Game 1: $CS1");
        ?>
        </div>
        <div class="col-md-6">
          <br>
        <?php
        echo("Wins: $wins");
        ?>
        <br>
        <?php
        echo("Losses: $losses");
        ?>
        <br>
        <?php
        echo("Double Kills: $totaldoubleKills");
        ?>
        <br>
        <?php
        echo("Triple Kills: $totaltripleKills");
        ?>
        <br>
        <?php
        echo("Quadra Kills: $totalquadrupleKills");
        ?>
        <br>
        <?php
        echo("Penta Kills: $totalpentaKills");
        ?>
        <br>
        <?php
        echo("Total Turret Kills: $totalturretKills");
        ?>
        <br>
        <?php
        echo("Total Inhibitor Kills: $totalinhibitorKills");
        ?>
        <br>
        <?php
        echo("Average Vision Score: $avgVisionScore");
        ?>
        <br>
        <?php
        echo("Largest Killing Spree: $largestKillingSpree");
        ?>
        <br>
        <?php
        echo("Average CS/Min: $avgCSperMin");
        ?>
        <br>
        <?php
        echo("Average CS/Game: $avgCSperGame");
        ?>
        </div>
      </div>
      </div>
        <?php
      }


      #if size is 0
      if($size == 0){
        ?>
        <h3> NO GAMES HAVE BEEN PLAYED WITH THIS CHAMPION</h3>
        <?php
      }
    

}
?>