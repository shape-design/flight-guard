<?php

namespace App\Http\Controllers\Admin;

//use App\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use League\Csv\Reader;
use League\Csv\Statement;

class ImportController extends Controller
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
     * import Data
     *
     */
    public function routeImport(){
        echo 'Import';
        $csv = Reader::createFromPath('files/route.csv', 'r');
        DB::table('routs')->truncate();
        $csv->setHeaderOffset(0);
        foreach ($csv as $row) {
            $origin_code = $row['Origin code'];
            foreach($row as $destination_code => $value){
                if($destination_code != 'Origin code'){
                    echo '<br>origin code: ' . $origin_code . ',destination ' . $destination_code. ', value ' . $value . '<br>';
                      DB::table('routs')->insert([
                        'origin_code' => $origin_code,
                        'destination_code' => $destination_code,
                        'route_group' => $value,
                        ]);
                }
            }
        }
    }

    public function variableCostImport(){
        echo 'Import';
        $csv = Reader::createFromPath('files/variable_cost.csv', 'r');
        DB::table('variable_costs')->truncate();
        $csv->setHeaderOffset(0);
        foreach ($csv as $row) {
            $pricing_group = $row['Pricing group'];
            foreach($row as $date => $value){
                if($date != 'Pricing group'){
                    $date_arr = explode('/', $date);
                    $new_date = $date_arr[2] . '-' . $date_arr[0] . '-' . $date_arr[1];

                    echo '<br>pricing_group: ' . $pricing_group . ',date ' . $date. ', value ' . $value . '<br>';
                    DB::table('variable_costs')->insert([
                        'pricing_group' => $pricing_group,
                        'date' => $new_date,
                        'value' => str_replace(",", ".", $value)
                    ]);
                }
            }
        }
    }
}
