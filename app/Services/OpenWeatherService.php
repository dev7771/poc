<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class OpenWeatherService
{

    public function __construct(protected GeoLocationService $geoLocationService)
    {
    }

    public  function  getWeatherCondition():array {

         $city = $this->geoLocationService->getLocation(request()->ip())['city'];

         $weather = Cache::remember('weather_'.$city, 60, function () use ($city){
             $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . env('OPEN_WEATHER_API_KEY'));
             return  $response->json();
         });

         return $weather;
    }
}
