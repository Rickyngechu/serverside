<?php

class Router{
    public static function handle($method = 'GET', $path = '/',$filename = ''){
      $currentMethod = $_SERVER['REQUEST_METHOD'];
      $currentUri = $_SERVER['REQUEST_URI'];
      if($currentMethod != $method){
        return false;
      }
      $root = '/server';
      $pattern = '#^' .$root.$path. '$#siD';
      if(preg_match($pattern,$currentUri)){
        require_once $filename;
        exit();
      }else{
        return false;
      }
    }
}

// Youtube link
// https://youtu.be/VEcXwF4BCX4?si=tkUmxT-IwCUREhVG