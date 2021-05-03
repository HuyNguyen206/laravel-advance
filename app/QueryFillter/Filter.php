<?php


namespace App\QueryFillter;




use Illuminate\Support\Str;

abstract class Filter
{

    public function handle($request, \Closure $next){
        if(!request()->has($this->fieldName())){
            return $next($request);
        }
        return $this->applyFilter($next($request));
    }

    protected abstract function applyFilter($builder);

    protected function fieldName(){
        return Str::snake(class_basename($this));
    }
}
