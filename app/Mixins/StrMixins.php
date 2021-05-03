<?php


namespace App\Mixins;


class StrMixins
{
    public function showName(){
      return function($name = 'huy'){
            return $name.'-replace one';
        };
    }

    public function prefix(){
      return function($prefix, $name = 'huy'){
          return $prefix.'-'.$name;
        };
    }

    public function suffix(){
      return function($suffix, $name = 'huy'){
          return $name.'-'.$suffix;
        };
    }

}
