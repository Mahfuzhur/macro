<?php 

namespace App\Mixins;
use Illuminate\Support\Str;

class StrMixins {
    public function partNumber(){
        return function($part){
            return 'AB-'.substr($part,0,3).'-'.substr($part,3);
        };
    }

    public function prefix(){
        return function($string, $prefix = 'ab-'){
            return $prefix.$string;
        };
    }
}