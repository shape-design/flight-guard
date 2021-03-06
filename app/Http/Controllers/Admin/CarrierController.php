<?php

namespace App\Http\Controllers\Admin;

use App\Carrier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Csv\Reader;
use League\Csv\Statement;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Carrier  $carrier
     * @return \Illuminate\Http\Response
     */
    public function show(Carrier $carrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrier  $carrier
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrier $carrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrier  $carrier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrier $carrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrier  $carrier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrier $carrier)
    {
        //
    }

    /**
     * import Data
     *
     */
    public function import(){
        echo 'Carrier';
        $csv = Reader::createFromPath('files/carrier.csv', 'r');
        $csv->setHeaderOffset(0);
        Carrier::truncate();
        foreach ($csv as $index => $row) {
            Carrier::create([
                'id' => $row['Carrier'],
                'code' => $row['Carrier code']
            ]);
            //  var_dump($index);
            var_dump($row);
        }
    }
}
