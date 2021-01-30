<?php

namespace Darkgoldblade01\Dnd5eApi\Api;

use Darkgoldblade01\Dnd5eApi\Dnd5eApi;
use Darkgoldblade01\Dnd5eApi\Models\Classes as ClassesModel;
use Darkgoldblade01\Dnd5eApi\NotFoundException;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Classes
 * @package Darkgoldblade01\Dnd5eApi\Api
 */
class Classes extends Dnd5eApi
{

    /**
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/classes/';

    /**
     * @return array
     * @throws GuzzleException|NotFoundException
     */
    public function all(): array
    {
        $response = [];
        $items = $this->get('');
        foreach($items['results'] AS $item) {
            $response[] = (new ClassesModel())->fill($this->get($item['index']));
        }
        return $response;
    }

    /**
     * @param $name
     * @param $arguments
     * @return ClassesModel
     * @throws GuzzleException|NotFoundException
     */
    public function __call($name, $arguments): ClassesModel
    {
        $response = $this->get($name);
        return (new ClassesModel())->fill($response);
    }


}
