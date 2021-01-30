<?php

namespace Darkgoldblade01\Dnd5eApi\Api;

use Darkgoldblade01\Dnd5eApi\Dnd5eApi;
use Darkgoldblade01\Dnd5eApi\Models\AbilityScores as AbilityScoresModel;
use Darkgoldblade01\Dnd5eApi\NotFoundException;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class AbilityScores
 * @package Darkgoldblade01\Dnd5eApi\Api
 */
class AbilityScores extends Dnd5eApi
{

    /**
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/ability-scores/';

    /**
     * @return array
     * @throws GuzzleException|NotFoundException
     */
    public function all(): array
    {
        $response = [];
        $items = $this->get('');
        foreach($items['results'] AS $item) {
            $response[] = (new AbilityScoresModel())->fill($this->get($item['index']));
        }
        return $response;
    }

    /**
     * @param $name
     * @param $arguments
     * @return AbilityScoresModel
     * @throws GuzzleException|NotFoundException
     */
    public function __call($name, $arguments): AbilityScoresModel
    {
        $response = $this->get($name);
        return (new AbilityScoresModel())->fill($response);
    }


}
