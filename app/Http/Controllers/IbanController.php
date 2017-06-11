<?php

namespace App\Http\Controllers;

use App\Iban;
use App\Services\BOC;
use Illuminate\Http\Request;

class IbanController extends Controller
{

    /**
     * @var BOC
     */
    private $boc;

    public function __construct(BOC $boc)
    {
        $this->middleware('auth');
        $this->boc = $boc;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $boc_ibans = $this->boc->getAccounts();

        $ibans = $request->user()->ibans;

        return view('pages.ibans.index', [
            'published_ibans'   => $ibans,
            'unpublished_ibans' => $boc_ibans
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create the Batch of accounts

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Iban $iban
     * @return \Illuminate\Http\Response
     */
    public function show(Iban $iban)
    {
        $result = [];
        if ($iban) {
            $u = $iban->user();
            $result = [
                'iban' => $iban->getAttributeValue('iban_number'),
                'bic'  => $iban->getAttributeValue('bank_bic'),
                'user' => $iban->user,
            ];
        }

        return view('pages.ibans.show', ['result' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Iban $iban
     * @return \Illuminate\Http\Response
     */
    public function edit(Iban $iban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Iban $iban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iban $iban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Iban $iban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iban $iban)
    {
        //
    }

    public function get(Request $request, $iban)
    {

    }

    public function getUserIban(Request $request, $iban)
    {

    }
}
