<?php

namespace Darkgoldblade01\Dnd5eApi;

use Darkgoldblade01\Dnd5eApi\Api\AbilityScores;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

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

    public function __construct() {
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
     * @return AbilityScores
     */
    protected function ability_skills(): AbilityScores
    {
        return new AbilityScores();
    }

    /**
     * @param null $endpoint
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($endpoint = null) {
        try {
            $response = $this->client->get($endpoint);
        } catch (BadResponseException $e) {
            if($e->getCode() === '404') {
                throw new NotFoundException('The ability skill ID of `' . $endpoint .'` does not exist.');
            } else {
                throw new \Exception($e);
            }
        }
        return json_decode($response->getBody()->getContents(), true);
    }
}
