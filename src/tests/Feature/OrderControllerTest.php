<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCategoryIndex(): void
    {
        $response = $this->get(route('category.index'));
        $response->assertOk();
    }

    public function testCategoryCreate()
    {
        $category = Order::first();

        $response = $this->actingAs(User::first())->get(route('category.create'));
        $response->assertOk();

        $response = $this->get(route('category.create'));
        $response->assertRedirect('http://cheesy.test/login');
    }
}
