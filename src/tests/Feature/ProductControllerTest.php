<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCategoryIndex(): void
    {
        $response = $this->get(route('product.index'));
        $response->assertOk();
    }

    public function testCategoryCreate()
    {
        $category = Product::first();

        $response = $this->actingAs(User::first())->get(route('product.create'));
        $response->assertOk();

        $response = $this->get(route('product.create'));
        $response->assertRedirect('http://cheesy.test/login');
    }
}
