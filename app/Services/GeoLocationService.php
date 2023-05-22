<?php

namespace App\Services;

use GeoIp2\Database\Reader;

class GeoLocationService
{
    protected $reader;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function getLocation($ipAddress):array
    {
        if($ipAddress == '127.0.0.1')
            return ['city' =>'Baku'];


        $record = $this->reader->city($ipAddress);

        $location = [
            'city' => $record->city->name,
        ];

        return $location;
    }
}
