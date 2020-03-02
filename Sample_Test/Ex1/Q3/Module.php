<?php

class Module
{
    private $title;
    private $credits = 5;
    private $year = 1;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setCredits($credits){
        $this->credits = $credits;
    }

    public function getCredits(){
        return $this->credits;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }

    public function __toString(){
        return "$this->title, $this->credits, $this->year";
    }
    
}