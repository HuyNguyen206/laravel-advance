<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MacroController extends Controller
{
    //
    public function macro(){
       $name = Str::showName('Andy');
       $prefix = Str::prefix('Nguyen');
       $suffix = Str::suffix('huy', 'le');
       dump($name, $prefix, $suffix);
    }

}
