     <?php
     session_start();
     if (isset($_SESSION['Username'])) {

        $pageTitle = 'Dashboard';

     	include 'init.php';
     	
          echo "Welcom";

     	include $tpl . 'footer.php';
     } else {
     	header('Location: index.php');
     	exit();
     }