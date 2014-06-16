<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Terrafirminator Galleries</title>

<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<link rel= "stylesheet" type= "text/css" href= "css/main.css">

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>

	<?php include("includes/nav.php"); ?>

	<div id="wrap">
    
    	<?php include("includes/header.php"); ?>
        <h2>Mower Racing Gallery</h2>
        
        <div id="albums">
        <a class="status" href="#album1">Races</a>
        <a href="#album2">Racers</a>
        <a href="#album3">Race Fans</a>
    	</div>
        
        <img id="pic" src="img/mower_race1.jpg" alt="Gallery image currently selected." />
        
        <p id="caption"> Mower races can be intense with the occasional risky maneuvers. </p>

        <div id="main">
        	<div id="album1">
            <a class="status" href ="img/mower_race1.jpg" title="Mower races can be intense with the occasional risky maneuvers.">Races One</a>
            <a href ="img/mower_race2.jpg" title="Racers usually display razor-sharp focus when at the start line.">Races Two</a>
            <a href ="img/mower_race3.jpg" title="Difficult courses can make racers grimace.">Races Three</a>
            <a href ="img/mower_race4.jpg" title="Having a machine with speed is crucial if you want to be a champion.">Races Four</a>
            <a href ="img/landscape.jpg" title="Tracks can resemble manicured lawns with landscaping and water features are challenging obstacles.">Races Five</a>
            </div>
            
            <div id="album2">
        	<a href="img/turfguy_racer.jpg" title="Tybalt, a seasoned racer, is known as a real turf guy.">Racers One</a>
            <a href="img/pintsize_racer.jpg" title="Benny, a pint-sized guy, is the coach and head mechanic for popular racer, Gnomeo.">Racers Two</a>
            <a href="img/gnomeo.jpg" title="Gnomeo, lead racer for team Sky Blue, is always the crowd favorite and ladies' love.">Racers Three</a>
            <a href="img/benny.jpg" title="Benny, Gnomeo's right-hand man, is a valuable asset to team Sky Blue.">Racers Four</a>
            <a href="img/tybalt.jpg" title="Tybalt, lead racer for team Rose Red, is a track terror, especially for his nemesis, Gnomeo.">Racers Five</a>
        	</div>
        
        	<div id="album3">
        	<a href="img/audience.jpg" title="Mower races bring together lawn ornaments of all shapes, sizes and species.">Race Fans One</a>
            <a href="img/audience2.jpg" title="Team Sky Blue fans form a unified front.">Race Fans Two</a>
            <a href="img/audience3.jpg" title="Team Red Rose fans can be rowdy and wild.">Race Fans Three</a>
        	</div>
            
        </div>
    
    <img class="gnome" src="img/tybalt_head.png" alt="Tybalt Headshot" />
        
    </div>
    
    <?php include("includes/footer.php"); ?>
    

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="js/main.js"></script>

</body>
</html>
