<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Api\Languages;
use PHPUnit\Framework\TestCase;

/**
 * Class LanguagesTest
 * @package Darkgoldblade01\Dnd5eApi\Tests
 */
class LanguagesTest extends TestCase
{
    /** @test */
    public function get_all()
    {
        $model = new Languages();
        $items = $model->all();

        $this->assertIsArray($items);

        foreach($items AS $item) {
            $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Languages::class));
        }
    }

    /** @test */
    public function model_creation()
    {
        $model = new Languages();
        $item = $model->abyssal();

        $this->assertTrue(is_a($item, \Darkgoldblade01\Dnd5eApi\Models\Languages::class));
    }

    /** @test */
    public function model_check()
    {
        $required_attributes = [
            'index',
            'name',
            'type',
            'typical_speakers',
            'script',
        ];
        $model = new Languages();
        $item = $model->abyssal();

        foreach($required_attributes AS $required_attribute) {
            $this->assertObjectHasAttribute($required_attribute, $item);
        }
    }
}
