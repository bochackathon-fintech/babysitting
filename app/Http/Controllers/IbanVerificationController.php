<?php

namespace App\Http\Controllers;

use App\Iban;
use App\Services\BOC;
use App\Services\OC;
use App\Services\SEPA;
use Illuminate\Http\Request;

class IbanVerificationController extends Controller
{

    /**
     * @var BOC
     */
    private $boc;

    public function __construct(BOC $boc)
    {

        $this->boc = $boc;
    }

    /**
     * Get The Public Iban of a user
     * @param Request $request
     * @param $iban
     */
    public function get(Request $request, $iban)
    {
        // Show the IBAN and account/details
    }

    /**
     * Verifies an iban on http://sepatools.eu
     *
     * @param Request $request
     * @param SEPA $sepa
     * @param $iban
     * @return mixed
     */
    public function verify(Request $request, SEPA $sepa, $iban)
    {
        return $sepa->verify($iban);
    }

    public function publish(Request $request, $ib)
    {

        $ibans = $this->boc->getAccounts();
        $ibs = $ibans->keyBy('iban_number');

        $found_iban = $ibs->get($ib);

        if ($found_iban) {

            $request->user()->ibans()->save(new Iban([
                'bank_bic'       => $found_iban['bic_number'],
                'account_number' => $found_iban['account_number'],
                'iban_number'    => $found_iban['iban_number'],
                'label'          => $found_iban['label'],
                'display'        => $found_iban['label']
            ]));
        }

        return redirect('/ibans');

    }

    public function company(Request $request, OC $oc, $country, $key)
    {
        $result =  $oc->getCompany($country,$key);

        return view('pages.client.company',['results' => $result]);
    }
}
