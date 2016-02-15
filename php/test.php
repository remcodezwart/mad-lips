<!DOCTYPE html>

<html>
<head>
  <title>Mad lips</title>
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
			<p> <?php if(isset ($_POST['country'])) { 
			    echo "Er heerst paniek in het koninkrijk" ; echo $_POST['country'];
				echo "Koning" ; echo $_POST['Most-Important-Person'] ; echo "is ten einde raad en als koning";
				echo $_POST['Most-Important-Person'] ; echo "ten einde raad is, dan roept hij zijn ten-einde-raadsheer";
				echo $_POST['spijbelen'];
				echo $_POST['pet'] ; echo "Het is een ramp! Het is een schande!";
				echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?";
				echo "Mijn" ; echo $_POST['pet'] ; echo" is verdwenen! Zo maar, zonder waarschuwing.";
				echo "En ik had net" ; echo $_POST['toyes'] ; echo "voor hem gekocht!";
				echo "Majesteit, uw" ; echo $_POST['pet'] ; echo "komt vast vanzelf weer terug?";
				echo "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd" ;
				echo $_POST['bored'] ; echo "leren?";
				echo "Maar Sire, daar kunt u toch uw" ; echo $_POST['buying'] ; echo "voor gebruiken.";
				echo $_POST['spijbelen'] ; echo"je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.";
				echo $_POST['Most-Important-Person'] ; echo", Sire.";
			}
			?>
			</p>
		</div>
	</div>
</body>
</html>