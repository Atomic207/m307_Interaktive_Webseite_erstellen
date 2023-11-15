<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form DB</title>
</head>
<body>
    <h2>Anmeldung</h2>
    <label for="vorname"></label><br>
    <input type="vorname" name="vorname" id="vorname" placeholder=Vorname><br>
     <label for="nachname"></label><br>
     <input type="nachname" name="nachname" id="nachname" placeholder=Nachname><br>   
    <label for="lehrgang">Lehrgang:</label>
    <select name="lehrgang" id="lehrgang">
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
    </select>
    
        <input type="submit" value="Senden">
    </form>
</body>
</html>