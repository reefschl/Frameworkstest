<?php
function besucher($record) {
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "test";
  $db_table = "webcounter";
  $counter_page = "access_page";
  $counter_field = "access_counter";

  $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host oder Datenbank nicht erreichbar");

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1";
  mysqli_query($db, $sql_call) or die("Fehler beim Einfügen");

$sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
$sql_result = mysqli_query($db, $sql_call) or die("SQL-Anfrage fehlgeschlagen");
$row = mysqli_fetch_assoc($sql_result);
$x = $row[$counter_field];

mysqli_close($db);
return $x;
  }
?>
