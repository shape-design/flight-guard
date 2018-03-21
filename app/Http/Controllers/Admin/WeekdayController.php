<?php

namespace App\Http\Controllers\Admin;

use App\Weekday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Csv\Reader;
use League\Csv\Statement;

class WeekdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function show(Weekday $weekday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function edit(Weekday $weekday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weekday $weekday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weekday $weekday)
    {
        //
    }

    /**
     * import Data
     *
     */
    public function import(){
        echo 'weekday';
        $csv = Reader::createFromPath('files/weekday.csv', 'r');
        $csv->setHeaderOffset(0);
        Weekday::truncate();
        foreach ($csv as $index => $row) {
            Weekday::create([
                'id' => $row['Weekday'],
                'code' => $row['Weekday code'],
                'name' => $row['']
            ]);
            //  var_dump($index);
            var_dump($row);
        }
    }
}
