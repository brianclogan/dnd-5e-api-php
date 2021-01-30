<?php

namespace Darkgoldblade01\Dnd5eApi\Api;

use Darkgoldblade01\Dnd5eApi\Dnd5eApi;
use Darkgoldblade01\Dnd5eApi\Models\Skills as SkillsModel;

/**
 * Class Skills
 * @package Darkgoldblade01\Dnd5eApi\Api
 */
class Skills extends Dnd5eApi
{

    /**
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/skills/';

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function all(): array
    {
        $response = [];
        $items = $this->get('');
        foreach($items['results'] AS $item) {
            $response[] = (new SkillsModel())->fill($this->get($item['index']));
        }
        return $response;
    }

    /**
     * @param $name
     * @param $arguments
     * @return SkillsModel
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __call($name, $arguments): SkillsModel
    {
        $response = $this->get($name);
        return (new SkillsModel())->fill($response);
    }


}
