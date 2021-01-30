<?php

namespace Darkgoldblade01\Dnd5eApi;

use Darkgoldblade01\Dnd5eApi\Api\AbilitySkills;
use GuzzleHttp\Client;

class Dnd5eApi
{

    /**
     * Base URI
     *
     * The base URI for the API.
     *
     * @var string
     */
    protected $base_uri = 'https://www.dnd5eapi.co/api/';

    /**
     * @var Client
     */
    private $client;

    public function __construct($base = '') {
        $this->client = new Client([
            "base_uri" => $this->base_uri,
        ]);
    }

    /**
     * Ability Skills
     *
     * Return a new instance of the DND API
     * under the Ability Skills.
     * 
     * @return AbilitySkills
     */
    public function ability_skills(): AbilitySkills
    {
        return new AbilitySkills();
    }

    /**
     * @param null $endpoint
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($endpoint = null) {
        try {
            $response = $this->client->get($endpoint);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        return json_decode($response->getBody()->getContents(), true);
    }
}
