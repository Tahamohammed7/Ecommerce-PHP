<?php 
    function lang($phrase) {
        static $lang = array(

            // Dashboard Page
            
           'Home_Admin'   => 'Home',
           'Categories'   => 'Categories',
           'Items'        => 'Items',
           'Members'      => 'Members',
           'Statistics'   => 'Statistics',
           'Logs'         => 'Logs',
        );

        return $lang[$phrase];
    }
   
