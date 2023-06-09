<?php

namespace Models;

require_once __DIR__ . "/Ticket.php";

class TicketCinema extends Ticket
{
    protected string $film;
    protected string $salle;
    protected int $age;
    protected string $horaire;

    public function __construct($date, $place, $tarif, $film, $horaire)
    {
        parent::__construct($date, $place, $tarif);
        $this->film = $film;
        $this->horaire = $horaire;
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function setAge()
    {
        switch ($this->film) {
            case 'John Wick':
                return $this->age = 16;
            case 'Peter Pan':
                return $this->age = 7;
            case 'Asterix':
                return $this->age = 7;
            default:
                return "Film non reconnu, impossible d'attribuer une classification";
        }
    }

    public function getHoraire()
    {
        return $this->horaire;
    }

    public function setSalle()
    {
        switch ($this->film) {
            case 'John Wick':
                return $this->salle = "Salle 1";
            case 'Peter Pan':
                return $this->salle = "Salle 2";
            case 'Asterix':
                return $this->salle = "Salle 3";
            default:
                return "Film non reconnu";
        }
    }

    public function displayTicket()
    {
        echo "<div class='ticket'>";
        echo "<h2>" . $this->getFilm() . "</h2>";
        echo "<p> 💺 : " . $this->setSalle() . "</p>";
        echo "<p> Classification : + " . $this->setAge() . " ans</p>";
        echo "<p> ⌚ : " . $this->getHoraire() . "</p>";
        parent::displayTicket();
        echo "</div>";
    }
}
