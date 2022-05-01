<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp</title>
	<link rel="stylesheet" href="SignUp.css"> 
</head>
<body>
	<header>
		<div class="menuToggle" onclick="toggleMenu();"></div>
	  <a href="#" class="logo"><span>R</span>estaurant</a>
		<ul class="nav">
		 <li><a href="resto.html#Acceuil" onclick="toggleMenu();">Acceuil</a></li>
		 <li><a href="resto.html#Apropos" onclick="toggleMenu();">A propos</a></li>
		 <li><a href="resto.html#menu" onclick="toggleMenu();">Menu</a></li>
		 <li><a href="resto.html#expert" onclick="toggleMenu();">Expert</a></li>
		 <li><a href="resto.html#temoignage" onclick="toggleMenu();">Temoignage</a></li>
		  <li><a href="resto.html#contact" onclick="toggleMenu();">Contact</a></li>
		</ul>
</header>
<form action="signuphp.php" method="post">
<div class="row">
<div class="row1">
<div class="row2">
	<?php if(isset($_GET['error'])){  ?>
           	<p class="error"><?php echo $_GET['error'];?> </p>
        <?php }?> 

   <?php if(isset($_GET['success'])){  ?>
           <p class="success"><?php echo $_GET['success'];?> </p>
         <?php }?>
  <?php 
           if(isset($_GET['name'])){  ?>
        <input type="text" name="name" placeholder="name" value="<?php echo $_GET['name'];?>"> </br>
        <?php }else {?>
        <input type="text" name="name" placeholder="name"> </br>
  <?php   } ?>
</div>
<div class="row2">
 <?php 
           if(isset($_GET['email'])){  ?>
        <input type="email" name="email" placeholder="Email@gmail.com" value="<?php echo $_GET['email'];?>"> </br>
        <?php }else {?>
        <input type="email" name="email" placeholder="Email@gmail.com"> </br>
        <?php   } ?>
</div>
<div class="row2">
<input type="password" name="password" id="password" placeholder="password">
</div>
<div class="row2">
<input type="password" name="re_password" id="re-password" placeholder="re-password">
</div>
<div class="row2">
<input type="submit" value="SignUp">
</div>
<div class="row2">
  <a href="SignIn.php" class="creer">Se connecter</a>
</div>
</div>
</div>
</form>
<script type="text/javascript">
		window.addEventListener('scroll',function(){
          const header=document.querySelector('header');
          header.classList.toggle("sticky",window.scrollY > 0);
 	});
	function toggleMenu(){
		const menuToggle = document.querySelector('.menuToggle');
		const nav = document.querySelector('.nav');
		menuToggle.classList.toggle('active');
		nav.classList.toggle('active');
	}
</script>
</body>
</html>