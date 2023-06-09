<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Ticket de cinéma</title>
</head>

<body>
    <?php

    include_once __DIR__ . "\..\Models\TicketCinema.php";

    use Models\TicketCinema as Ticket;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newTicket = new Ticket(
            $_POST["date"],
            $_POST["place"],
            $_POST["tarif"],
            $_POST["film"],
            $_POST["horaire"]
        );

        $newTicket->displayTicket();
    }
    ?>
</body>

</html>