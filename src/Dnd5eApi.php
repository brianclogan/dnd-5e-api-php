<?php

namespace Darkgoldblade01\Dnd5eApi;

use Darkgoldblade01\Dnd5eApi\Api\AbilityScores;
use Darkgoldblade01\Dnd5eApi\Api\Skills;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;

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
     * Ability Scores
     *
     * Return a new instance of the DND API
     * under the Ability Scores.
     *
     * @return AbilityScores
     */
    protected function ability_scores(): AbilityScores
    {
        return new AbilityScores();
    }

    /**
     * Skills
     *
     * Return a new instance of the DND API
     * under the Skills.
     *
     * @return Skills
     */
    protected function skills(): Skills
    {
        return new Skills();
    }

    /**
     * @param null $endpoint
     * @return mixed
     * @throws GuzzleException|NotFoundException
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
