<?php


namespace App;


class UploadServiceFacade
{

//    public static function upload(){
//        dd('Upload success');
//    }
    public static function resolveFacade($name){
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        self::resolveFacade('upload')->$method(...$arguments);
    }
}
