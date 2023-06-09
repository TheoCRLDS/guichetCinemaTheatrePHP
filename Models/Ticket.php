<?php

namespace Models;

include_once __DIR__ . "\..\Interfaces\ITicket.php";

use Interface\ITicket;

abstract class Ticket implements ITicket
{
    protected string $id;
    protected $date;
    protected string $place;
    protected string $tarif;
    protected float $prix;

    public function __construct($date, $place, $tarif)
    {
        $this->date = $date;
        $this->place = $place;
        $this->tarif = $tarif;
    }

    public function setID()
    {
        return $this->id = date('Y-m') . " - " . rand(0, 9) . " - " . rand(0, 9);
    }

    public function setPrix()
    {
        if ($this->tarif == "adulte") {
            return $this->prix = 6.99;
        } else {
            return $this->prix = 3.99;
        }
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getPlace()
    {
        return $this->place;
    }

    public function getTarif()
    {
        return $this->tarif;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function displayTicket()
    {
        echo "<p> 🆔 : " . $this->setID() . "</p>";
        echo "<p> 📅 : " . $this->getDate() . "</p>";
        echo "<p> 🪑 : " . $this->getPlace() . "</p>";
        echo "<p> 💶 : " . $this->setPrix() . " €</p>";
    }
}
