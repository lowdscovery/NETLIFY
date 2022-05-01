<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="SignIn.css">
	<title>SignIn</title>
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
	 <li><a href="resto.html#temoignage" onclick="toggleMenu();">Tegmoignage</a></li>
	 <li><a href="resto.html#contact" onclick="toggleMenu();">Contact</a></li>
	</ul>
</header>
<form action="login.php" method="post">
<div class="row">
	<div class="row1">
	<div class="row2">
		<input type="email" name="email" placeholder="Email">
	</div>
	<div class="row2">
		<input type="password" name="password" placeholder="password">
	</div>
	<div class="row2">
	<input type="submit" value="SignIn">
	</div>
	<div class="row2">
	<a href="SignUp.php" class="creer">Creer un compte</a>
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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>