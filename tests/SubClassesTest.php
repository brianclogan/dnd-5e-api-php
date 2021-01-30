<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Api\SubClasses;
use PHPUnit\Framework\TestCase;

/**
 * Class SubClassesTest
 * @package Darkgoldblade01\Dnd5eApi\Tests
 */
class SubClassesTest extends TestCase
{
    /** @test */
    public function get_all()
    {
        $model = new SubClasses();
        $items = $model->all();

        $this->assertIsArray($items);

        foreach($items AS $item) {
            $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\SubClasses::class));
        }
    }

    /** @test */
    public function model_creation()
    {
        $model = new SubClasses();
        $item = $model->berserker();

        $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\SubClasses::class));
    }

    /** @test */
    public function model_check()
    {
        $required_attributes = [
            'index',
            'class',
            'name',
            'subclass_flavor',
            'desc',
            'subclass_levels',
        ];
        $model = new SubClasses();
        $item = $model->berserker();

        foreach($required_attributes AS $required_attribute) {
            $this->assertObjectHasAttribute($required_attribute, $item);
        }
    }
}
