<?php

namespace App;

use GuzzleHttp;
use DOMDocument;


class CovidApi{

    public function fetchDataFromAPIByDate($date,$country)
        {
            $date = $date ?? Date('Y-m-d',strotime('now'));
            $country = $country ?? 'thailand';

            $cl = new \GuzzleHttp\Client();
            $rs = $cl->request('GET','https://api.covid19tracking.narrativa.com/api/'.$date.'/country/'.$country,['Content-type' => 'application/json']);
       
            $body =  $rs->getBody();
            
            $str_html = (string) $body;
            
            return $str_html;

        }
}

?>