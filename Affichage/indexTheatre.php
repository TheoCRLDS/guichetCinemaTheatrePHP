<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Guichet du cinéma et théatre</title>
</head>

<body>
    <h1>Menu</h1>

    <menu>
        <li><a href="/PHP_Vanilla/guichetCinemaTheatre/Affichage/indexCinema.php">🎥 Ticket de cinéma 🎥</a></li>
    </menu>

    <h1>Générateur de ticket</h1>
    <form action="/PHP_Vanilla/guichetCinemaTheatre/Affichage/ticketTheatre.php" method="POST">
        <input type="date" name="date" placeholder="Date" required="required">
        <input type="text" name="place" placeholder="Place choisie" required="required">
        <select name="tarif" required="required">
            <option value="placeholder">Choisissez un tarif</option>
            <option value="enfant">Tarif enfant</option>
            <option value="adulte">Tarif adulte</option>
        </select>
        <select name="piece" required="required">
            <option value="placeholder">Choisissez une piece</option>
            <option value="Fourberies de Scapin">Les fourberies de Scapin</option>
            <option value="Romeo et Juliette">Roméo et Juliette</option>
            <option value="Antigone">Antigone</option>
        </select>
        <select name="heureDebut" required="required">
            <option value="placeholder">Choisissez un horaire</option>
            <option value="9:00">9:00</option>
            <option value="11:00">11:00</option>
            <option value="14:00">14:00</option>
            <option value="16:00">16:00</option>
        </select>
        <input type="submit" value="Générer">
    </form>
</body>

</html>