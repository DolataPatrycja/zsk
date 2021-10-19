<?php
//date()
  echo "dzień-miesiąc-rok: " . date('d-m-Y') . 'r.<br>';
  echo date('m-d-y') . 'r.<br>';
  echo date('d-M-y') . 'r.<br>'; //19-Oct-21r.
  echo date('d-F-y') . 'r.<br>'; //19-October-21r.

  echo strftime('%d %B %Y') . 'r.<br>';

  setlocale(LC_TIME, 'pl'); //nazwa miesiąca będzie teraz po polsku
  echo strftime('%d %B %Y') . 'r.<br>';

  echo date('G:i:s') . '<br>';
 ?>

 <script>
   setTimeout(function() {
     window.location.reload();
   }, 1000);
 </script>

<?php
echo date('H:i:s') . '<br>';
echo date('H:i:sa') . '<hr>'; //będzie am albo pm

//getdate()
$date = getdate();
echo "<pre>";
  print_r($date);
echo "</pre>";

echo $date['wday'] . '<br>';
echo $date['yday'] . '<hr>';

//rok przestępny
echo date('L'); //0 oznacza, że rok nie jest przestępny

//mktime()
$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
echo $today . '<br>'; //

//data od 1 stycznia 1970
$year = $today/(60*60*24*365);
echo (int)$year, '<br>';

//poprzedni rok
$lastMonth = mktime(0, 0, 0, date('m'), date('d'), date('Y')-1);
echo $lastMonth, '<br>';
$year = $lastMonth/(60*60*24*365);
echo (int)$year, '<br>';
 ?>
