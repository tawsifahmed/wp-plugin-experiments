<?php

/*
* Plugin Name: PTU Autoload Plugin
* Description: Going through auto-loading feature
* Version: Demo
* Author: Tawsif Ahmed Riyad

*/

namespace PTUAutoLoadPlugin;

require_once 'vendor/autoload.php';

class PTU_AutoLoad_Plugin {
  public function __construct (){
    new Src\Hi("Ahmed"); 
    new Inc\World("Bangladesh");
  }
}

new PTU_AutoLoad_Plugin;