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
    <link rel="stylesheet" href="styles/homescreen.css"/>
    
    <!-- MAKING A NAV BAR -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Home</a>
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

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      Summoner Name:
      <input type="text" name="summonerName">
      Region:
      <input type="text" name="region">
      APIKey:
      <input type="text" name="apiKey">
      <!--input type="button" value="Go" onclick="goPython()" -->
      <input type="submit" name="submit" value="Go" class="btn btn-light" >
    </form>

    

<?php
  if(isset($_POST['submit'])){
	
    switch($_POST['submit']){
      case 'Go': helper(); break;
    }
  }
?>
  
  
  <?php
  function helper(){
    $summonerName = $_POST['summonerName'];
    $region = $_POST['region'];
    $APIKey = $_POST['apiKey'];

    #SEND DATA TO PYTHON
    $data = array($summonerName, $region, $APIKey);

    #DO THE COMMAND LINE TO RUN PYTHON
    $result = shell_exec('/Library/Frameworks/Python.framework/Versions/3.7/bin/python3 /Applications/XAMPP/xamppfiles/htdocs/LoLTracker/APIGrabber.py ' . escapeshellarg(json_encode($data)));
    
    #GET THE RESULT OF PYTHON AS A NESTED ARRAY
    $resultData = (array) json_decode($result, TRUE);
    
    $_SESSION['resultData'] = $resultData;
    $_SESSION['summonerName'] = $summonerName;
    $_SESSION['region'] = $region;
    $_SESSION['apiKey'] = $APIKey;

?>

<div class="results">
      <label>Summoner Name:</label>
      <?php echo $_SESSION['summonerName'] ?> <br>
      <label>Region:</label>
      <?php echo $_SESSION['region'] ?> <br>
      <label>API Key:</label>
      <?php echo $_SESSION['apiKey'] ?> <br>
</div>


<?php
 
    #GRAB VARIABLES FOR PHP USE
    $tier = $resultData['RankedData'][0]['tier'];
    $leaguePoints = $resultData['RankedData'][0]['leaguePoints'];

    #change the 0 in the middle to be a different champion
    $ChampionId = $resultData['ChampionMastery'][0]['championId'];

    print_r("Ranked Tier: $tier ");

    print_r($resultData['RankedData'][0]["rank"]);
?>
    <br>
<?php
    print_r("League Points: $leaguePoints");
?>
    <br>
<?php
  
    #echo($summonerName);
    #echo($region);
    #echo($APIKey);
  }
      
      
    
?>
  
  </body>
</html>
