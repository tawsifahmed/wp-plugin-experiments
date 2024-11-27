<?php

namespace PTUAutoLoadPlugin\Src;


class World {

  public $name;    
  public function __construct($name){
    $this->name = $name;
    add_action('init', [$this, 'hi']);
    
  }

  public function hi (){
    printf("<p>%s</p>", "Hi, I am {$this->name}");
  }
};