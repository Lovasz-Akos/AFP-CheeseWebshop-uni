<?php

namespace Tests\Database;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductDbTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testProductModel()
    {
        $model = Product::create([
             'brand' => 'Test Brand',
             'name' => 'Test Name',
             'price' => 100,
             'in_stock' => 200,
             'description' => 'Test Description',
             'short_description' => 'Test Short Description'
         ]);

        $model->refresh();

        self::assertNotNull($model->id);
        self::assertEquals('Test Brand', $model->brand);
    }
}
