<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Api\Proficiencies;
use PHPUnit\Framework\TestCase;

/**
 * Class SkillsTest
 * @package Darkgoldblade01\Dnd5eApi\Tests
 */
class ProficienciesTest extends TestCase
{
    /** @test */
    public function get_all()
    {
        $model = new Proficiencies();
        $items = $model->all();

        $this->assertIsArray($items);

        foreach($items AS $item) {
            $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Proficiencies::class));
        }
    }

    /** @test */
    public function model_creation()
    {
        $model = new Proficiencies();
        $item = $model->alchemists_supplies();

        $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Proficiencies::class));
    }

    /** @test */
    public function model_check()
    {
        $required_attributes = [
            'index',
            'type',
            'name',
            'classes',
            'races',
            'references'
        ];
        $model = new Proficiencies();
        $item = $model->alchemists_supplies();

        foreach($required_attributes AS $required_attribute) {
            $this->assertObjectHasAttribute($required_attribute, $item);
        }
    }
}
