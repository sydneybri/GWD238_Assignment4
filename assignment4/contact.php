<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','sydney.bri.carter@gmail.com');
	define('MESSAGE_SUBJECT','Terrafirminator Contact');
	define('REPLY_TO', 'sydney.bri.carter@gmail.com');
	define('FROM_ADDRESS', 'sydney.bri.carter@gmail.com');
	define('REDIRECT_URL', 'http://www.sydneybri.aisites.com/gwd238/assignment/assignment4/index.php');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Terrafirminator Contact Form</title>
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<link rel= "stylesheet" type= "text/css" href= "css/main.css">

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>

	<?php include("includes/nav.php"); ?>
    
	<div id="wrap">
    
    	<?php include("includes/header.php"); ?>
            <h2>Contact Us</h2>
        
        <form id="commentForm" action="<?php echo $_SERVER["../gwd238/assignments/assignment4/PHP_SELF"]; ?>" method="post">
            <fieldset>
                    <p>
                        <label for="name">NAME:</label>
                        <input type="text" name="name" placeholder="Gnomeo/Juliet" />
                    </p>
                    
                    <p>
                        <label for="email">EMAIL:</label>
                        <input type="email" name="email" placeholder="example@gmail.com" />
                    </p>
                    
                    <p>
                        <label for="message">MESSAGE:</label>
                        <textarea name="message" rows="8" cols="45">
                        </textarea>
                    </p>
                    
                    <p>
                        <input class="butt" type="submit" name="submitted" value="SEND" />
                    </p>
            
            </fieldset>
            
            <p><em>2b Verona Drive, Atlanta GA - 443.334.4455 - love@terrafirminator.org</em></p>
            
         </form>
     
     <img class="gnome" src="img/tybalt_head.png" alt="Tybalt Headshot" />
     
     </div>

	<?php include("includes/footer.php"); ?>
     
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="js/main.js"></script>

</body>
</html>
