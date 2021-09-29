<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>About me</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="flexable_container">
		<center><div class="header_menu">
			<?php include 'menu.inc.php'?>
		</div></center>
			<center><?php include 'pic.inc.php'?> </center>
		<div>
          	<center><h1>  <?php  echo $p  ?> </h1></center>
          	<ul id="about_me">
          		<li>My name is <?php echo $name . ' ' . $surname . '<br>'?></li>
          		<li>I live in <?php echo $city;?></li>
          		<li>I am <?php echo $age?></li>
          	</ul>
        </div>
        <center><div id="my_knowage">
            <?php include 'knowage.inc.php'; ?><br>              
            <?php
                echo $res;
            ?> 
        </div></center>
        <center><div id="my_contacts">
        	<p class="contacts_text">My gmail:  
        		<a href="https://mail.google.com/mail/u/0/?hl=ru#inbox" target="new_page" class="contacts_link"> truplehest1234@gmail.com</a></p>
        </div></center>
	</div>
	<!--Я не очень понимаю зачем нужен flex container-->
</body>
</html>
