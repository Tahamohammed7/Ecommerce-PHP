<?php 

   include 'connect.php';
 
   $tpl = 'includes/templates/'; //Template Directory
   $lang  = 'includes/languages/'; //Languages Directory
   $func  = 'includes/functions/'; //Functions Directory
   $css = 'layout/css/'; //Css Directory
   $js  = 'layout/js/'; //Js Directory
   $lang  = 'includes/languages/'; //Languages Directory


  // Include The Important Files 

   include $func . 'functions.php';
   include $lang . 'en.php';
   include $tpl . 'header.php';

   // Include Navbar On All Pages Expect The One With $noNavbar Vairable
   if (!isset($noNavbar)) {
   	include $tpl . 'navbar.php';
   }
   
     