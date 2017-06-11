<?php

namespace App\Services;

class SEPA
{

    protected $client;

    private $endpoint;

    private $username;

    private $password;

    public function __construct()
    {
        $this->username = env('SEPA_USERNAME');
        $this->password = env('SEPA_PASSWORD');
        $this->endpoint = env('SEPA_ENDPOINT');

        $this->client = new \GuzzleHttp\Client([
            'auth' => [$this->username, $this->password]
        ]);
    }

    public function verify($iban)
    {
        $endpoint = $this->endpoint . 'validate_iban/' . $iban;

        $response = $this->client->get($endpoint);

        return json_decode((string) $response->getBody(), JSON_PRETTY_PRINT);
    }

    public function getQrCode(){

    }
}