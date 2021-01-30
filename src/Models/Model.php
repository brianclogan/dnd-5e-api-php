<?php

namespace Darkgoldblade01\Dnd5eApi\Models;

class Model extends \Illuminate\Database\Eloquent\Model
{

    /**
     * Fill the Model with
     * the data from the array.
     *
     * @param array $data
     *
     * @return Model
     */
    public function fill(array $data) {
        foreach($data AS $key => $value) {
            if($key === 'url') {
                continue;
            }
            $this->{$key} = $value;
        }
        return $this;
    }

}
