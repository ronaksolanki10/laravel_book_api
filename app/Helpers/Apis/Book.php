<?php

namespace App\Helpers\Apis;

use App\Helpers\Api;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Book implements Api
{
    private $baseUrl = 'https://fakerapi.it/api/';
    private $version = 'v1/';
    
    public function get($endpoint, $params = []):Response
    {
        return Http::get($this->baseUrl.$this->version.$endpoint.'?'.http_build_query($params));
    }
}