<?php
require '../vendor/autoload.php';
require '../config/dev.php';

$router = new \App\config\Router();
$router->run();

//try{
  //  if(isset($_GET['route']))
//{
//      if($_GET['route'] === 'article'){
//          require '../templates/single.php';
//      }
//      else{
//          echo 'page inconnue';
//      }
//  }
//  else{
//      require '../templates/home.php';
//  }
//}
//catch (Exception $e)
//{
//  echo 'Erreur';
//}
