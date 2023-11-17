<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="container">
   
        <h2>Anmeldung</h2>
        <label for="vorname">Vorname:</label>
        <input type="text" name="vorname" id="vorname" placeholder="Vorname" class="full-width"><br>
        <label for="nachname">Nachname:</label>
        <input type="text" name="nachname" id="nachname" placeholder="Nachname" class="full-width"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email" class="full-width"><br>
        <label for="lehrgang">Lehrgang:</label>
    
        <select name="lehrgang" id="lehrgang" class="full-width">
            <option value="Lehrgang">Lehrgang</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select><br><br>

        <input type="radio" name="geschlecht" id="firmenkunde" value="firmenkunde" />
        <label for="firmenkunde"><i>Firmenkunde</i></label><br />
        <input type="radio" name="kundenklasse" id="einzelperson" value="einzelperson" />
        <label for="einzelperson"><i>Einzelperson</i></label><br />
        <input type="radio" name="kundenklasse" id="partner" value="partner" />
        <label for="partner"><i>Partner</i></label><br />
        <input type="radio" name="kundenklasse" id="bljs" value="bljs" />
        <label for="bljs"><i>Betriebslehrjahrstelle</i></label><br>
        <input type="submit" value="Senden" class="full-width green-bg">

    </div>
</body>

</html>

<!--<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team und Rollen</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
<div class="container">
    <h2>Anmeldung</h2>
    <label for="vorname"></label><br>
    <input type="vorname" name="vorname" id="vorname" placeholder=Vorname><br>
     <label for="nachname"></label><br>
     <input type="nachname" name="nachname" id="nachname" placeholder=Nachname><br> 
     <label for="email"></label><br>
    <input type="email" name="email" id="email" placeholder=Email><br>

    <label for="lehrgang"></label> <br>
    <select name="lehrgang" id="lehrgang">
        <option value="Lehrgang">Lehrgang</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option> 
    </select> <br> <br>


<input type="radio" name="geschlecht" id="firmenkunde" value="firmenkunde" />
      <label for="firmenkunde"><i>Firmenkunde</i></label><br />
      <input type="radio" name="kundenklasse" id="einzelperson" value="einzelperson" />
      <label for="einzelperson"><i>Einzelperson</i></label><br />
      <input type="radio" name="kundenklasse" id="partner" value="partner" />
      <label for="partner"><i>Partner</i></label><br />
      <input type="radio" name="kundenklasse" id="bljs" value="bljs" />
      <label for="bljs"><i>Betriebslehrjahrstelle</i></label><br>

      <input type="submit" value="Senden">
</div>
        
    </form>
</body>
</html>
-->
