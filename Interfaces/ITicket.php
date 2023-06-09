<?php

namespace Interface;

interface ITicket
{
    public function getDate();

    public function getPlace();

    public function getTarif();

    public function setID();

    public function setPrix();

    public function displayTicket();
}
