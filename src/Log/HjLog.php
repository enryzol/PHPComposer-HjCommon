<?php
namespace HjCommon\Log;


use Analog\Analog;

class HjLog{
    static function info($message,$channel='Hj'){
        $path = '';
        if(!empty( LOG_PATH ) ){
            $path = LOG_PATH;
        }
        
        Analog::handler(AnaLogFile::init ($path.date('Y-m-d').'-'.$channel.'.log'));
        if(is_array($message)){
            $message = print_r($message,true);
        }
        Analog::info($message);
    }
}