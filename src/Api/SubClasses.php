<?php

namespace Darkgoldblade01\Dnd5eApi\Api;

use Darkgoldblade01\Dnd5eApi\Dnd5eApi;
use Darkgoldblade01\Dnd5eApi\Models\SubClasses as SubClassesModel;
use Darkgoldblade01\Dnd5eApi\NotFoundException;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class SubClasses
 * @package Darkgoldblade01\Dnd5eApi\Api
 */
class SubClasses extends Dnd5eApi
{

    /**
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/subclasses/';

    /**
     * @return array
     * @throws GuzzleException|NotFoundException
     */
    public function all(): array
    {
        $response = [];
        $items = $this->get('');
        foreach($items['results'] AS $item) {
            $response[] = (new SubClassesModel())->fill($this->get($item['index']));
        }
        return $response;
    }

    /**
     * @param $name
     * @param $arguments
     * @return SubClassesModel
     * @throws GuzzleException|NotFoundException
     */
    public function __call($name, $arguments): SubClassesModel
    {
        $response = $this->get($name);
        return (new SubClassesModel())->fill($response);
    }


}
