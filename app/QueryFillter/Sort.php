<?php


namespace App\QueryFillter;


class Sort extends Filter
{

    protected function applyFilter($builder)
    {
        // TODO: Implement applyFilter() method.
        return $builder->orderBy('name', request($this->fieldName()));
    }
}
