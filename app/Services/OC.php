<?php

namespace App\Services;

class OC
{

    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function getCompany($country, $key)
    {
        $endpoint = 'https://api.opencorporates.com/companies/' . $country . '/' . $key ;

        $response = $this->client->get($endpoint);

        return json_decode((string) $response->getBody(),true);
    }
}