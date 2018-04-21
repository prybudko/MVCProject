<?php

class Weather
{
    private static $coordinates;

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

    public static function getLocation($city = "Paris")
    {
        $city = strtolower($city);
        $city = ucfirst($city);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$city&key=AIzaSyBgtQpFW5dXuOdba1BgAu5CoFbHWd_v0lk";
        $location = self::getConnect($url);
        $json = json_decode($location, true);
        self::$coordinates = $json['results']['0']['geometry']['location'];
    }

    public static function getListWeather($city = "Paris")
    {
        self::getLocation($city);
        $latitude = self::$coordinates['lat'];
        $longitude = self::$coordinates['lng'];
        $exclude = "?exclude=minutely,hourly,daily,alerts,flags";
        $unit = "?units=si";
        $url = "https://api.darksky.net/forecast/8313fe1a010e2bd96961a0b746b5a18c/$latitude,$longitude" . $exclude . $unit;
        $jsonWeather = json_decode(self::getConnect($url), true);
        $arrayWeather = $jsonWeather['currently'];
        $arrayWeather['timezone'] = $jsonWeather['timezone'];
        return $arrayWeather;
    }

}