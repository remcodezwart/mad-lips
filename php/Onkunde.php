<!DOCTYPE html>

<html>
<head>
  <title>Onkunde</title>
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
	  <form method="post" action="onkunde-storie.php">
		<p>
		  <label>Wat zou je graag willen kunnen?</label>
		  <input type="text" name="do" />
		</p>
		
		<p>
		  <label>Met welke persoon kun je goed opschieten?</label>
		  <input type="text" name="Person" />
		</p>
		
		<p>
		  <label>Wat is je favoriete getal?</label>
		  <input type="text" name="number" />
		</p>
		
		<p>
		  <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
		  <input type="text" name="vacation" />
		</p>
		
		<p>
		  <label>Wat is je beste persoonlijke eigenschap?</label>
		  <input type="text" name="good-personal" />
		</p>
		
		<p>
		  <label>Wat is je slechtste persoonlijke eigenschap?</label>
		  <input type="text" name="bad-personal" />
		</p>
		
		<p>
		  <label>Wat is het ergste dat je kan overkomen?</label>
		  <input type="text" name="WorstThing" />
		</p>
		
		
		
		<p>
		  <label>&nbsp;</label>
		  <input type="submit" value="Versturen" />
		</p>
	  </form>
  </div>
  
</body>
</html>