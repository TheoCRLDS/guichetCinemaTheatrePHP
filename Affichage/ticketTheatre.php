<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Ticket de théatre</title>
</head>

<body>
    <?php

    include_once __DIR__ . "\..\Models\TicketTheatre.php";

    use Models\TicketTheatre as Ticket;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newTicket = new Ticket(
            $_POST["date"],
            $_POST["place"],
            $_POST["tarif"],
            $_POST["piece"],
            $_POST["heureDebut"],
        );

        $newTicket->displayTicket();
    }
    ?>
</body>

</html>