<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CovidApi;

class ApiController extends Controller
{
    //

    public function fetchDataFromAPIByDate($date,$country)
    {
        $api = new CovidApi();
        $str_res = $api->fetchDataFromAPIByDate($date,$country);

        return $str_res;
    }

   

    
}
