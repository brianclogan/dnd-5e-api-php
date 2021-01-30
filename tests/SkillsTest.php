<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Api\Skills;
use PHPUnit\Framework\TestCase;

/**
 * Class SkillsTest
 * @package Darkgoldblade01\Dnd5eApi\Tests
 */
class SkillsTest extends TestCase
{
    /** @test */
    public function get_all()
    {
        $model = new Skills();
        $items = $model->all();

        $this->assertIsArray($items);

        foreach($items AS $item) {
            $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Skills::class));
        }
    }

    /** @test */
    public function model_creation()
    {
        $model = new Skills();
        $item = $model->acrobatics();

        $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Skills::class));
    }

    /** @test */
    public function model_check()
    {
        $required_attributes = [
            'index',
            'name',
            'desc',
            'ability_score',
        ];
        $model = new Skills();
        $item = $model->acrobatics();

        foreach($required_attributes AS $required_attribute) {
            $this->assertObjectHasAttribute($required_attribute, $item);
        }
    }
}
