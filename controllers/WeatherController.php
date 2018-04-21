<?php
include_once ROOT . '/models/Weather.php';

class WeatherController
{

    public function actionList()
    {
        $defaultWeather = Weather::getListWeather();
        require_once ROOT . '/views/weather/listDefaultWeather/index.php';
        return true;
    }

    public function actionWeather($city)
    {
        $weather = Weather::getListWeather($city);
        require_once ROOT . '/views/weather/listWeather/index.php';
        return true;
    }

}