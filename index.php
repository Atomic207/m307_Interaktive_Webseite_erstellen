<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team und Rollen</title>
</head>
<body>
<div>
    <h2>Anmeldung</h2>
    <label for="vorname"></label><br>
    <input type="vorname" name="vorname" id="vorname" placeholder=Vorname><br>
     <label for="nachname"></label><br>
     <input type="nachname" name="nachname" id="nachname" placeholder=Nachname><br> 
     <label for="email"></label><br>
    <input type="email" name="email" id="email" placeholder=Email><br>
</div>
<div>
    <label for="lehrgang"></label> <br>
    <select name="lehrgang" id="lehrgang">
        <option value="Lehrgang">Lehrgang</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option> 
    </select> <br> <br>

</div>

<div>
<input type="checkbox" class="radio" value="1" name="geschlecht" />Männlich</label> <br>
  <label>
    <input type="checkbox" class="radio" value="1" name="geschlecht" />Weiblich</label> <br>
  <label>
    <input type="checkbox" class="radio" value="1" name="geschlecht" />Divers</label> <br>
</div>
        <input type="submit" value="Senden">
    </form>
</body>
</html>