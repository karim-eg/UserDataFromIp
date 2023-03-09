<?php

// call get_data class
require "get_data.php";
$getData = new get_data();

// print user data in json format.
echo '{"ip": "'.$getData->get_ip().'", "country": "'.$getData->get_country().'", "timezone": "'.$getData->get_timezone().'", "continent": "'.$getData->get_continent().'", "currency": "'.$getData->get_currency().'"}';
