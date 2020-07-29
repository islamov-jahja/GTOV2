<?php

namespace App\Filter;
abstract class Filter implements FilterInterface
{
    public function toArray(): array
    {
        $fields = $this->getFieldsInArray();

        $filters = [];
        foreach ($fields as $fieldKey => $fieldValue){
            if ($fieldValue !== null){
                $filters[$fieldKey] = $fieldValue;
            }
        }

        return $filters;
    }

    protected function getFieldsInArray(): array { return []; }
}