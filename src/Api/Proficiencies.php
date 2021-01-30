<?php

namespace Darkgoldblade01\Dnd5eApi\Api;

use Darkgoldblade01\Dnd5eApi\Dnd5eApi;
use Darkgoldblade01\Dnd5eApi\Models\Proficiencies as ProficienciesModel;
use Darkgoldblade01\Dnd5eApi\NotFoundException;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Skills
 * @package Darkgoldblade01\Dnd5eApi\Api
 */
class Proficiencies extends Dnd5eApi
{

    /**
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/proficiencies/';

    /**
     * @return array
     * @throws GuzzleException|NotFoundException
     */
    public function all(): array
    {
        $response = [];
        $items = $this->get('');
        foreach($items['results'] AS $item) {
            $response[] = (new ProficienciesModel())->fill($this->get($item['index']));
        }
        return $response;
    }

    /**
     * @param $name
     * @param $arguments
     * @return ProficienciesModel
     * @throws GuzzleException|NotFoundException
     */
    public function __call($name, $arguments): ProficienciesModel
    {
        $response = $this->get($name);
        return (new ProficienciesModel())->fill($response);
    }


}
