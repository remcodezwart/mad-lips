<!DOCTYPE html>

<html>
<head>
  <title>onkunde</title>
  <link href="../css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>Mad Lips</h1>
  <div class="header">
	  <ul>
		<li><a href="mad-lips.php">Er heerst paniek</a></li>
		<li><a href="Onkunde.php">Onkunde</a></li>
	  </ul>
  </div>
	<div class="content">
		<div class="text">
			<p> 
				<?php if(isset ($_POST["name"])) { 
				echo "Er zijn veel mensen die niet kunnen";
				echo $_POST['do'] ;
				echo "Neem nou";
				echo $_POST['Person'];
				echo"Zelfs met de hulp van een" ; echo $_POST['vacation'];
				echo"of zelfs";
				echo $_POST['number']  ; echo"kan";
				echo $_POST['Person'] ;
				echo "niet" ;
				echo $_POST['do'] ;
				echo "Dat heeft niet te maken met een gebrek aan" ;
				echo $_POST['good-personal'] ; echo"maar met een te veel aan";
				echo $_POST['bad-personal'] ;
				echo "Te veel" ;
				echo $_POST['bad-personal'];
				echo "leidt tot" ;
				echo $_POST['WorstThing'] ; echo "en dat is niet goed als je wilt"; 
				echo $_POST['do'];
				echo "Helaas voor" ;  echo $_POST['Person'] ;
				}
				?>
			</p>
		</div>
	</div>
</body>
</html>