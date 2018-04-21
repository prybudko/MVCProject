<?php

class Weather
{
    private static $coordinates;
    private static $error;

    public static function getConnect($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $body = curl_exec($ch);
        curl_close($ch);
        return $body;
    }

    public static function getLocation($city)
    {
        $city = strtolower($city);
        $city = ucfirst($city);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$city&key=AIzaSyBgtQpFW5dXuOdba1BgAu5CoFbHWd_v0lk";
        $location = self::getConnect($url);
        $json = json_decode($location, true);
        if ($json['status'] != 'ZERO_RESULTS') {
            self::$coordinates = $json['results']['0']['geometry']['location'];
        } else {
            self::$error = true;
        }
    }

    public static function getListWeather($city = "Kyiv")
    {
        self::getLocation($city);
        if (self::$error != true) {
            $latitude = self::$coordinates['lat'];
            $longitude = self::$coordinates['lng'];
            $unit = "?units=si";
            $url = "https://api.darksky.net/forecast/8313fe1a010e2bd96961a0b746b5a18c/$latitude,$longitude" . $unit;
            $jsonWeather = json_decode(self::getConnect($url), true);
            $arrayWeather = $jsonWeather['currently'];
            $arrayWeather['timezone'] = $jsonWeather['timezone'];
            return $arrayWeather;
        } else {
            $arrayWeather['error'] = 'Sorry, there is no data for your request.';
            return $arrayWeather;
        }
    }

}