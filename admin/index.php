<?php
  // Admin page saves the data to a csv file which you can view in Excel
    if (isset($_POST['date'])) {
      require "../backend.php";
    if ($_RSV->save(
        $_POST['date'], $_POST['time'], $_POST['name'], $_POST['tel'])) {
        echo "<div class='ok'>Reservering opgeslagen.</div>";
    } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }

    require "../backend.php";
    $all = $_RSV->getDay();

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=reservations.csv');
    if (count($all)==0) { echo "No reservations"; }
    else {
      foreach ($all[0] as $k=>$v) { echo "$k,"; }
      echo "\r\n";
      
      foreach ($all as $r) { 
        foreach ($r as $k=>$v) { echo "$v,"; }
        echo "\r\n";
      }
    }
?>

