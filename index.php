<?php
require 'vendor/vendor/autoload.php';
require_once('controller/init.php');
//print_r($paramurl);
//print_r($paramurl);
//$str_arr = explode (".", $paramurl1);
//$paramurl1=$str_arr[1];

$paramurl1=$paramurl[1];
//$paramurl3=$paramurl[3];
if(isset($paramurl1) && !empty($paramurl1)){
  
   // Routes::Changepageurl($paramurl1);
 //$paramurl1=$paramurl[1];
 //$paramurl3=$paramurl[3];


$str_arr = explode (".", $paramurl1);
$paramurl1t=$str_arr[0];
 $page=Routes::Changepageurl($paramurl1t);
 //$page3=Routes::Changepageurl($paramurl3);
 

if (file_exists($page)){
    
   // require_once(HEADER);
            require_once($page);
   // require_once(FOOTER);
           
        }elseif($paramurl1==='admin.login'){
           redirect_to('/admon');
        }
        else {
//print_r($paramurl);
         include_once(NOTFOUND);
    
        }

    }else{
     
        include_once(DEFAULT1);
        

}
?>