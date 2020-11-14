<?php

namespace App;

use GuzzleHttp;
use DOMDocument;


class CovidApi{

    private $uri,$cl;
    public $date_begin,$date_end;

    function __construct($country = 'global',$date_from = null,$date_to)
    {

        $this->country = strtolower($country) ?? 'global';
        $this->date_begin = $date_from;
        $this->date_end = $date_to;

        // Example. for Api Calling with country;
        // https://api.covid19tracking.narrativa.com/api/country/thailand?date_from=2020-10-01&date_to=2020-10-15

        // Example. for Api Calling with all countries;
        // https://api.covid19tracking.narrativa.com/api?date_from=2020-10-01&date_to=2020-10-15

        if(strtolower($country) == 'global')
        {
          
            $this->uri = "https://api.covid19tracking.narrativa.com/api?date_from=".$this->date_begin."&date_to=".$this->date_end;
            
        }else{
            $this->uri = "https://api.covid19tracking.narrativa.com/api/country/".$country."?date_from=".$this->date_begin."&date_to=".$this->date_end;
        }
        
        $this->cl = new \GuzzleHttp\Client();

    }


    public function getDataByDate()
        {        
            $rs = $this->cl->request('GET',$this->uri);
            $body =  $rs->getBody();
        
            $str_html = (string) $body;
            
            return $str_html;
        }

    public function getDataByDateRange()
    {
      
        $rs = $this->cl->request('GET',$this->$uri);

        $body = $rs->getBody();
        $str_body = (string) $body;


        return $str_body;


        
    }

    public function setDateEnd($date_e)
    {
        $this->date_end = $date_e;
    }
}

?>