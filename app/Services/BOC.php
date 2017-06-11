<?php

namespace App\Services;

use App\UTrust;

class BOC
{

    private $subscription_key = 'b7b441bb960842cea0a78b6a3b656800';

    private $bank_key = 'bda8eb884efcef7082792d45';

    private $bank_endpoint = 'http://api.bocapi.net/v1/api';

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'headers' => [
                'Ocp-Apim-Subscription-Key' => $this->subscription_key
            ]
        ]);
    }

    public function getAccounts()
    {
        http://api.bocapi.net/v1/api/banks/bda8eb884efcef7082792d45/accounts
        $endpoint = $this->bank_endpoint . '/banks/' . $this->bank_key . '/accounts';
        $response = $this->client->get($endpoint);

        $accounts = json_decode((string) $response->getBody(), JSON_PRETTY_PRINT);

        $results = [];
        foreach ($accounts['accounts'] as $index => $account) {
            $acc = [
                'label'      => $account['label'],
                'bank_id'    => $account['bank_id'],
                'view_id'    => $account['views_available'][0]['id'],
                'account_id' => $account['id'],
            ];
            $accInfo = $this->getAccount($acc);
            $results[] = [
                'label'            => $accInfo['label'],
                'account_number'   => $accInfo['number'],
                'iban_number'      => $accInfo['IBAN'],
                'bank_id'          => $accInfo['bank_id'],
                'bic_number'       => UTrust::getBanks()[0]['bic'],
                'balance_amount'   => $accInfo['balance']['amount'],
                'balance_currency' => $accInfo['balance']['currency'],
            ];
        }

        return collect($results);
    }

    public function getAccount(array $info)
    {
        http://api.bocapi.net/v1/api/banks/{BANK_ID}/accounts/{ACCOUNT_ID}/{VIEW_ID}/account
        $endpoint = $this->bank_endpoint . "/banks/{$this->bank_key}/accounts/{$info['account_id']}/{$info['view_id']}/account";
        $response = $this->client->get($endpoint, [
            'headers' => [
                'Ocp-Apim-Subscription-Key' => $this->subscription_key,
                'Auth-Provider-Name'        => request()->user()->auth_provider,
                'Auth-ID'                   => request()->user()->auth_id,
            ]
        ]);

        return json_decode((string) $response->getBody(), JSON_PRETTY_PRINT);

    }

    public function getBanks()
    {

    }
}