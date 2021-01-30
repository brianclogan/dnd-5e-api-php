<?php

namespace Darkgoldblade01\Dnd5eApi\Api;

use Darkgoldblade01\Dnd5eApi\Dnd5eApi;

/**
 * Class AbilitySkills
 * @package Darkgoldblade01\Dnd5eApi\Api
 */
class AbilitySkills extends Dnd5eApi
{

    /**
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/ability-scores/';

    public function __call($name, $arguments)
    {
        $response = $this->get($name);
        dd($response);
    }


}
