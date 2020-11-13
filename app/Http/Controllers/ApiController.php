<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CovidApi;

class ApiController extends Controller
{
    //

    public function fetchDataFromAPIByDate($country = null)
    {
        $api = new CovidApi();
        $date_begin = isset($_GET['date_from']) ? $_GET['date_from'] : abort(404);
        $date_end = isset($_GET['date_to']) ? $_GET['date_to'] : null;

        $str_res = $api->getDataByDate($country,$date_begin,$date_end);

        return $str_res;
    }

    // public function fetchDataFromAPIByDateRange($country, $date_begin, $date_end)
    // {
    //     $api = new CovidApi();
    //     $str_res = $api->getDataByDate($country,$date_begin,$date_end);

    //     return response($str_res)->header('Content-type','application-json');
    // }

   

    
}
