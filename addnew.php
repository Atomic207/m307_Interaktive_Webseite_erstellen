<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neuer LB hinzufügen</title>
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="container">

        <h2>Anmeldung</h2>
        <form action="index-save.php" method="post">
            <label for="vorname">Vorname:</label>
            <input type="text" name="vorname" id="vorname" placeholder="Vorname" class="full-width"><br>
            <label for="nachname">Nachname:</label>
            <input type="text" name="nachname" id="nachname" placeholder="Nachname" class="full-width"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" class="full-width"><br>
            <label for="lehrgang">Lehrgang:</label>

            <select name="lehrgang" id="lehrgang" class="full-width">
                <option value="Lehrgang">-</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>



            <input type="submit" value="Senden" class="full-width green-bg">
        </form>
    </div>

</body>

</html>