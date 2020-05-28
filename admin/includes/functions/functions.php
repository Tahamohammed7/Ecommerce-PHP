<?php 

     /*
     ** Title Function That Echo The Page Title In Case The Page
     ** Has The Variable $pageTitle And Echo Defult Title For Other Pages
     */

    function getTitle() {

      global $pageTitle;

      if (isset($pageTitle)) {

      	  echo $pageTitle;

      } else {

         echo "Defult";
      }
    }

     /*
     ** Home Redirect Function [ This Function Accept Parameters ]
     ** $theMsg = Echo The Message 
     ** $url = The Link You Want To Redirect To
     ** $seconds = Seconds Before Redirecting
     */

    function redirectHome($theMsg, $url = null, $seconds = 3) {

       if ($url === null) {
       	
       	  $url = 'index.php';

       	  $link = 'Homepage';

       } else {

       	 if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {
       	 	
              $url = $_SERVER['HTTP_REFERER'];

              $link = 'Previous Page';
       	 
       	 } else {

       	 	$url = 'index.php';

       	 	$link = 'Homepage';
       	 } 

       	 
       }
      
       echo $theMsg;

       echo "<div class='alert alert-info'>You Will Be Redirected To $link After $seconds seconds.</div>";

       header("refresh:$seconds;url=index.php");

       exit();

    }


     /*
     ** Check Items Function 
     ** Function To Check Item In Database [ Function Accept Parameters ]
     ** $select = The Item To Select [ Example: user, item, category ]
     ** $from = The Table To Select From [ Example: users, items, categories ]
     ** $value = The Value Of Select [ Example: Taha, Box, Electronics]
     */

     function checkItem($select, $from, $value) {

     	global $con;

     	$statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

     	$statement->execute(array($value));

     	$count = $statement->rowCount();

     	return $count;
     }
