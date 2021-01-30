<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Api\Classes;
use PHPUnit\Framework\TestCase;

/**
 * Class ClassesTest
 * @package Darkgoldblade01\Dnd5eApi\Tests
 */
class ClassesTest extends TestCase
{
    /** @test */
    public function get_all()
    {
        $model = new Classes();
        $items = $model->all();

        $this->assertIsArray($items);

        foreach($items AS $item) {
            $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Classes::class));
        }
    }

    /** @test */
    public function model_creation()
    {
        $model = new Classes();
        $item = $model->barbarian();

        $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Classes::class));
    }

    /** @test */
    public function model_check()
    {
        $required_attributes = [
            'index',
            'name',
            'hit_die',
            'proficiency_choices',
            'proficiencies',
            'saving_throws',
            'starting_equipment',
            'class_levels',
            'subclasses',
        ];
        $model = new Classes();
        $item = $model->barbarian();

        foreach($required_attributes AS $required_attribute) {
            $this->assertObjectHasAttribute($required_attribute, $item);
        }
    }
}
