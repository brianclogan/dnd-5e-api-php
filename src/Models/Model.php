<?php

namespace Darkgoldblade01\Dnd5eApi\Models;

/**
 * Class Model
 * @package Darkgoldblade01\Dnd5eApi\Models
 */
class Model
{

    /**
     * Fill the Model with
     * the data from the array.
     *
     * @param array $data
     *
     * @return Model
     */
    public function fill(array $data): Model
    {
        foreach($data AS $key => $value) {
            if($key === 'url') {
                continue;
            }
            $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * Convert the Model to an array
     *
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this;
    }

}
