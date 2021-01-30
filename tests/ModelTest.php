<?php

namespace Darkgoldblade01\Dnd5eApi\Tests;

use Darkgoldblade01\Dnd5eApi\Models\Model;
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    protected $data = [
        'test' => 'yes',
        'test_2' => 'no'
    ];

    /** @test */
    public function fill()
    {
        $model = new Model();
        $model->fill($this->data);
        foreach($this->data AS $key => $value) {
            $this->assertSame($model->{$key}, $value);
        }
    }

    /** @test */
    public function to_array()
    {
        $model = new Model();
        $model->fill($this->data);
        $this->assertIsArray($model->toArray());
        $this->assertSame($this->data, $model->toArray());
    }
}
