<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Api\AbilityScores;
use PHPUnit\Framework\TestCase;

/**
 * Class AbilityScoresTest
 * @package Darkgoldblade01\Dnd5eApi\Tests
 */
class AbilityScoresTest extends TestCase
{
    /** @test */
    public function get_all()
    {
        $model = new AbilityScores();
        $items = $model->all();

        $this->assertIsArray($items);

        foreach($items AS $item) {
            $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\AbilityScores::class));
        }
    }

    /** @test */
    public function model_creation()
    {
        $model = new AbilityScores();
        $item = $model->cha();

        $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\AbilityScores::class));
    }

    /** @test */
    public function model_check()
    {
        $required_attributes = [
            'index',
            'name',
            'full_name',
            'desc',
            'skills',
        ];
        $model = new AbilityScores();
        $item = $model->cha();

        foreach($required_attributes AS $required_attribute) {
            $this->assertObjectHasAttribute($required_attribute, $item);
        }
    }
}
