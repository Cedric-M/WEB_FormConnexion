<?php
  require_once 'config.php';

  echo <<<HTML
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <body>
    <div class="container-fluid">
HTML;

  // $page1 = 'produit';
  // if(isset($_GET['page']) && !empty($_GET['page'])){
  //   $page = $_GET['page'];
  // }
$page2 = 'entrepot';
  if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = $_GET['page'];
  }

 // switch($page1){  //exemple d'une page, y ajouter les catégories, les stocks et les différentes vues
 //    case 'produit':
 //    include 'view_produit.php';
 //      break;
 //  }
  switch($page2){  //exemple d'une page, y ajouter les catégories, les stocks et les différentes vues


      case 'entrepot':
    include 'view_entrepot.php';
       break;
  }

  echo <<<HTML
    </div>
  </body>
</html>
HTML;
?>