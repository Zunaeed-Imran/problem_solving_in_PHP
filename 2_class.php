<?php
// question: make a class with child and redirect with parent.

class ClassName{
  public $name;

  public function __construct($name)
  {
    $this-> name = $name;
  }
}

class classChild extends ClassName{
  public function message(){
    echo "Hello {$this->name}";
  }
}

$show = new classChild("imran");
$show->message();

?>