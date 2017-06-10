<?php

namespace App\Http\Controllers;

use App\Iban;
use App\Services\BOC;
use Illuminate\Http\Request;

class IbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boc = new BOC();
        return $boc->getAccounts();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Iban  $iban
     * @return \Illuminate\Http\Response
     */
    public function show(Iban $iban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Iban  $iban
     * @return \Illuminate\Http\Response
     */
    public function edit(Iban $iban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Iban  $iban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iban $iban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Iban  $iban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iban $iban)
    {
        //
    }
}
