<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<div id="frame">
	<form method="POST" action="AccesDB.php">
	Felhasználonév <input name="Username"type="text"></input><br>
	Email <input name="Email" type="text" autocomplete="off"></input><br>
	jelszo <input name="Password" type="password"></input><br>
	jelszo ujra <input name="Passwordagain"type="password"></input><br>
	<label>Nem:</label>
	 <input type="radio" name="Nem" value="male" checked>Férfi</input>
	 <input type="radio" name="Nem" value="female" checked>Nö</input><br>
	 <select name="select">
		<option value="Tanár">Tanár</option>
		<option value="Épités">Épités</option>
		<option value="Orvos">Orvos</option>
		<option value="Ügyvéd">Ügyvéd</option>
		<option value="Rendör">Rendör</option>
		<option value="Tüzolto">Tüzolto</option>
		<option value="lofasz">lofasz</option>
	</select><br>
	<label>Érdeklödési körök</label><br>
	<input type="checkbox" name="checkbox[]" value="Seta">Séta</input><br>
	<input type="checkbox" name="checkbox[]" value="Uszas">Uszás</input><br>
	<input type="checkbox" name="checkbox[]" value="Foci">Foci</input><br>
	<input type="checkbox" name="checkbox[]" value="Alvás">Alvás</input><br>
	<input type="checkbox" name="checkbox[]" value="Meghalni">Meghalni</input><br>
	<input type="checkbox" name="checkbox[]" value="Kiugrani a vonat elé">Kiugrani a vonat elé</input><br>
	<input type="checkbox" name="checkbox[]" value="Vásárlás">Vásárlás</input><br>
	<input type="checkbox" name="checkbox[]" value="Tanulás">Tanulás</input><br>
	<button type="submit">küldés</button>
	<button type="reset">Reset</button>
	</div>
	</form>
	</body>
	
</html>