<?php
include ('config.php');
include ('autoloader.php');

$ua = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36';

$ch = curl_init('https://www.google.com.ua/search?ei=Q-IfW6r7PIWKsAG-5qzoAg&q=php&oq=php&gs_l=psy-ab.3..35i39k1l2j0i67k1j0i131i67k1j0j0i67k1j0l4.6085.6370.0.6530.3.3.0.0.0.0.167.296.0j2.2.0....0...1c.1.64.psy-ab..1.2.295...0i131k1.0.Qh1wsPjU4Js');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);



$html = curl_exec($ch);
curl_close($ch);
print($html);

require_once TEMPLATES.TEMPLATE;
?>