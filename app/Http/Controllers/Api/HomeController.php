<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Resources\WeatherResource;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\GeoLocationService;
use App\Services\OpenWeatherService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(protected  UserRepositoryInterface $userRepository, protected OpenWeatherService $openWeatherService, protected GeoLocationService $geoLocationService) {
    }


    public function index():array {

        $authUser = $this->userRepository->getById(auth()->id());
        $weather = $this->openWeatherService->getWeatherCondition()['main'] ?? NULL;

        return  [
                "user" => new UserResource($authUser),
                "main" => new WeatherResource($weather)
        ];
    }
}
