<?php

namespace App\Http\Controllers;
use App\Carrier;
use App\Airport;
use App\Month;
use App\Weekday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator',[
         //   'category' => $category,
        ]);
    }

    public function calculate(Request $request){
        var_dump($request->input());

        $carrierCode = Carrier::find($request->input('carrier'))->code;
        $originCode = Airport::find($request->input('origin'))->code;
        $destinationCode = Airport::find($request->input('destination'))->code;

        $routeGroup = DB::table('routs')->
            where('origin_code', $originCode)->
            where('destination_code', $destinationCode)->
            value('route_group');

        $date = Carbon::createFromFormat('Y-m-d', $request->input('date'));
        $month = $date->month;
        $monthCode = Month::find($month)->code;

        $day = $date->dayOfWeek;
        $weekDayCode = Weekday::find($day)->code;

        // Pricing group monthCode*90+routeGroup*6+carrierCode*2+weekDayCode-98
        $pricingGroup = $monthCode*90+$routeGroup*6+$carrierCode*2+$weekDayCode-98;

        return response()->json(['cc' => $pricingGroup], 201);
    }

}
