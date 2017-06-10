<?php

namespace App\Services;

class SEPA
{
    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function verify($iban){
        $endpoint = 'http://sepatools.eu/';
    }
}