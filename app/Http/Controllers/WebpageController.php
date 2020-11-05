<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CovidApi;

class WebpageController extends Controller
{
    //

    public function index($country)
    { 
        $date = $_GET['date'] ?? Date('Y-m-d', strtotime('now'));
        $api = new CovidApi();
        $str_res = $api->fetchDataFromAPIByDate($date,$country);
        $data = json_decode($str_res);
        $parse_country = ucfirst($country);

        $total_case = $data->dates->$date->countries->$parse_country->today_confirmed;
        $new_case = $data->dates->$date->countries->$parse_country->today_new_confirmed;
        $recovery = $data->dates->$date->countries->$parse_country->today_new_recovered;
        $death = $data->dates->$date->countries->$parse_country->today_deaths;

       return view('main',["total_case"=> $total_case,"new_case"=>$new_case,"recovery"=>$recovery,"death"=>$death]);
    }
}
