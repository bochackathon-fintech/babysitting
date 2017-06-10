<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IbanVerificationController extends Controller
{

    /**
     * Get The Public Iban of a user
     * @param Request $request
     * @param $iban
     */
    public function get(Request $request, $iban){
        // Show the IBAN and account/details
    }

    /**
     * Verifies an iban on http://sepatools.eu
     *
     * @param Request $request
     * @param $iban
     */
    public function verify(Request $request, $iban){

    }
}
