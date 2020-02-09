<?php 

class Book
{
  private $numPages;
  public $author;

  public function getNumPages()
  {
    return  $this->numPages;
  }

  public function setNumPages ($numPages)
  {
    $this->numPages = $numPages;
  }

  public function __construct($numPages, $author){
      $this->numPages = $numPages;
      $this->author = $author;
  }
}