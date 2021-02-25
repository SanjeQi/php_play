<?php

$city =$_GET["city"];

//Remove spaces from City Name
$city= str_replace(" ","",$city);


$siteData = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

// echo $siteData

preg_match('/<span class="phrase">(.*?)</i', $siteData, $matches);

print_r($matches[1]);

// echo $matches[1];
