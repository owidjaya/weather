<?php
namespace Controller;

use Interop\Container\ContainerInterface;

class WeatherController {
    
    public function __construct(ContainerInterface $ci) {
        $this->ci = $ci;
    }
    public function index($request, $response, $args) {
        
        return $this->ci['view']->render($response, "weatherIndex.html", []);
    }
    public function query($request, $response, $args) {
        $queryParams = $request->getQueryParams();
        $yahooURL =  $this->ci['settings']['yahooURL'] ;
        $yqlQuery = sprintf($this->ci['settings']['yqlQuery'], $queryParams['zipCode'].",us");
        $yahooClientKey = $this->ci['settings']['yahooClientKey'];
        $yahooClientSecret = $this->ci['settings']['yahooClientSecret'];
        $params = array( 
            "q" => $yqlQuery,
            "format" => "json"
        );
        $defaults = array(
            CURLOPT_URL => $yahooURL."?".http_build_query($params),
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
        );
        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
        $output = curl_exec($ch);
        return  $response->getBody()->write($output);
        
    }
}