<?php
/*
 * @license  MIT License
 * @author  José Luis Olivares <joseluis_503@yahoo.com>
 * @description: Class to get url parameters
 * */
class OlivaresUrlParam
{
    function get_url_param($param_name=0){

        try {
            $param_value=$_GET[strval($param_name)] ?? null;
            if(isset($param_value)){
                return $param_value; 
            }
            return 0; 
        } catch (\Throwable $th) {
            return 0 ;
        }
        
    }
}
         
?>
