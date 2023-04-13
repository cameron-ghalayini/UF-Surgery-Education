<?php
$first_name = $_POST["first-name"];
$last_name = $_POST["last-name"];
$item_name = $_POST["item-name"];
$dates = $_POST["dates"];

$file = fopen("conference-attendance.csv","a");
fputcsv($file, array($first_name,$last_name,$item_name,$dates));
fclose($file);
?>
