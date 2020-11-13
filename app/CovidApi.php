<?php

namespace App;

use GuzzleHttp;
use DOMDocument;


class CovidApi{

    private $uri,$cl;
    public $date_begin,$date_end;

    function __construct($country = 'global',$date_begin,$date_end = null)
    {

        $this->country = strtolower($country) ?? 'global';
        $this->date_begin = $date_begin ?? Date('Y-m-d',strtotime('now'));
        $this->date_end = $date_end ?? null;

        // Example. for Api Calling with country;
        // https://api.covid19tracking.narrativa.com/api/country/thailand?date_from=2020-10-01&date_to=2020-10-15

        // Example. for Api Calling with all countries;
        // https://api.covid19tracking.narrativa.com/api?date_from=2020-10-01&date_to=2020-10-15

        if(strtolower($country) == 'global')
        {
            if(!isset($date_end))
            {
                $this->uri = 'https://api.covid19tracking.narrativa.com/api/'.$this->date_begin;
            }else{
                $this->uri = 'https://api.covid19tracking.narrativa.com/api?date_from='.$this->date_begin.'&date_to='.$this->date_end;
            }
            
        }else{
            if(!isset($date_end))
            {
                $this->uri = 'https://api.covid19tracking.narrativa.com/api/'.$this->date_begin.'/country/'.$country;
            }else{
                $this->uri = 'https://api.covid19tracking.narrativa.com/api/country/'.$country.'?date_from='.$this->date_begin.'&date_to='.$this->date_end;
            }
           
        }
        
        $this->cl = new \GuzzleHttp\Client();

    }


    public function getDataByDate()
        {        
            $rs = $this->cl->request('GET',$this->uri,['Content-type' => 'application/json']);
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