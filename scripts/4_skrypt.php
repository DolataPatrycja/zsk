<?php
  //echo '<pre>';
  //echo $_POST; nie można wyświetlać tablicy za pomocą echo
  //print_r($_POST); //tak wyświetla się tablicę
  //echo '</pre>';

  if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {
    switch ($_POST['geometricFigure']) {
      case 'kwadrat':
        header('location: ./square.php');
        break;
      case 'prostokat':
        header('location: ./rectangle.php');
        break;

    }
  }
  else {
    ?>
     <script>
      history.back();
     </script>
   <?php
 }
  ?>
