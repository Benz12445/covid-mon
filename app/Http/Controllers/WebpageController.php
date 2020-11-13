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
      
        $date_begin = $_GET['date_from'] ?? Date('Y-m-d', strtotime('now'));
        $date_end = $_GET['date_to'] ?? NULL;

        $api = new CovidApi($country,$date_begin,$date_end);

        $str_res = $api->getDataByDate();
        $data = json_decode($str_res);
        $parse_country = ucfirst($country);
        

        if($country !== 'global')
        {
            $total_case = $data->dates->$date_begin->countries->$parse_country->today_confirmed;
            $new_case = $data->dates->$date_begin->countries->$parse_country->today_new_confirmed;
            $recovery = $data->dates->$date_begin->countries->$parse_country->today_new_recovered;
            $death = $data->dates->$date_begin->countries->$parse_country->today_deaths;
        }else{
            $total_case = 1;
            $new_case = 1;
            $recovery = 1;
            $death = 1;

            $total_case = number_format($data->total->today_confirmed);
            $new_case = number_format($data->total->today_new_confirmed);
            $recovery = number_format($data->total->today_new_recovered);
            $death = number_format($data->total->today_deaths);
        }
        

        // set date end after fetch single date data
        // then fetch again for daterange data
        $api->setDateEnd($date_end);
        $table_data = $api->getDataByDate();


      
        $continents = Continent::with('country')->get();
     

       return view('main',["total_case"=> $total_case,"new_case"=>$new_case,"recovery"=>$recovery,"death"=>$death,"country"=>$parse_country,"continents"=> $continents,"table_data"=>(Object) json_decode($table_data)]);
    }



}
