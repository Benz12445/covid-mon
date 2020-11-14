<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CovidApi;
use App\Continent;
use App\Country;

class WebpageController extends Controller
{
    //

    public function index($country = 'global')
    { 
      
        $date_to = $_GET['date_to'] ?? Date('Y-m-d', strtotime('now'));
        $week_diff = strtotime('now') - strtotime('-7 day');


        $calculate_date_from_time_stamp = strtotime($date_to) - $week_diff;

        $parse_date_from = Date('Y-m-d',$calculate_date_from_time_stamp);
        $date_from = $_GET['date_from'] ?? $parse_date_from;

        $api = new CovidApi($country,$date_from,$date_to);
        $str_res = $api->getDataByDate();
        $data = json_decode($str_res);
        $parse_country = ucfirst($country);
        
        if($country === 'global')
        {
            $total_case = number_format($data->total->today_confirmed);
            $new_case = number_format($data->total->today_new_confirmed);
            $recovery = number_format($data->total->today_new_recovered);
            $death = number_format($data->total->today_deaths);

            
        }else{
            $total_case = number_format($data->dates->$date_to->countries->$parse_country->today_confirmed);
            $new_case = number_format($data->dates->$date_to->countries->$parse_country->today_new_confirmed);
            $recovery = number_format($data->dates->$date_to->countries->$parse_country->today_new_recovered);
            $death = number_format($data->dates->$date_to->countries->$parse_country->today_deaths);
           
        }
    

      
        $continents = Continent::with('country')->get();
     

       return view('main',["total_case"=> $total_case,"new_case"=>$new_case,"recovery"=>$recovery,"death"=>$death,"country"=>$parse_country,"continents"=> $continents,"table_data"=>$data]);
    }



}
