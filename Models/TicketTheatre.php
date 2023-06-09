<?php

namespace Models;

require_once __DIR__ . "/Ticket.php";

class TicketTheatre extends Ticket
{
    protected string $piece;
    protected string $heureDebut;
    protected string $heureEntracte;

    public function __construct($date, $place, $tarif, $piece, $heureDebut)
    {
        parent::__construct($date, $place, $tarif);
        $this->piece = $piece;
        $this->heureDebut = $heureDebut;
    }

    public function getPiece()
    {
        return $this->piece;
    }

    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    public function setHeureEntracte()
    {
        switch ($this->heureDebut) {
            case '9:00':
                return $this->heureEntracte = "10:00";
            case '11:00':
                return $this->heureEntracte = "12:00";
            case '14:00':
                return $this->heureEntracte = "15:00";
            case '16:00':
                return $this->heureEntracte = "16:00";
            default:
                return "Horaire non défini";
        }
    }

    public function displayTicket()
    {
        echo "<div class='ticket'>";
        echo "<h2>" . $this->getPiece() . "</h2>";
        echo "<p> ⏲ : " . $this->getHeureDebut() . "</p>";
        echo "<p> ⏸ : " . $this->setHeureEntracte() . "</p>";
        parent::displayTicket();
        echo "</div>";
    }
}
