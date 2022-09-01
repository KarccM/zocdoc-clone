<?php

namespace App\Helpers;

class ApiCalls {
    private $api; 
    private $client;

    private function __construct(){
        $this->client = new \GuzzleHttp\Client();
    }
    
    public static function getInstance(){
        if(!isset($api)){
            $api = new ApiCalls();
            return $api;
        }
        else return $api;
    }
    public function fetchData($type,$url){
        $response = $this->client->request($type, $url);
        $data = json_decode($response->getBody());
        return $data->data;
    }
}

?>