<?php

class get_data {

    public $userip, $country, $countryCode, $continentName, $currency, $timezone;

    function __construct() {

        // get user IP from user agent, if you don't have the user ip.
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $this->userip = filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP);
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->userip = filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP);
        } else if (!empty($_SERVER['REMOTE_ADDR'])) {
            $this->userip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
        } else { $this->userip = NULL; }

        // get data from IP
        $response = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $this->userip));

        $this->country = $response->geoplugin_countryName; // get country name
        $this->countryCode = $response->geoplugin_continentCode; // get country code
        $this->continentName = $response->geoplugin_continentName; // get continent name
        $this->currency = $response->geoplugin_currencySymbol; // get currency
        $this->timezone = $response->geoplugin_timezone;   // get city & timezone

    }

    // Getters:

    function get_ip() {
        return $this->userip;
    }

    function get_country() {
        return $this->country;
    }

    function get_continent() {
        return $this->continentName;
    }

    function get_currency() {
        return $this->currency;
    }

    function get_timezone() {
        return $this->timezone;
    }

}