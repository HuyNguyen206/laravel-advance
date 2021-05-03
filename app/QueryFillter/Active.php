<?php


namespace App\QueryFillter;


use Closure;

class Active extends Filter
{

    protected function applyFilter($builder)
    {
        // TODO: Implement applyFilter() method.
        return $builder->where($this->fieldName(), request($this->fieldName()));
    }
}
