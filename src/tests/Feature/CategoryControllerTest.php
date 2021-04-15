<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
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
        $category = Category::first();

        $response = $this->actingAs(User::first())->get(route('category.create'));
        $response->assertOk();

        $response = $this->get(route('category.create'));
        $response->assertRedirect('http://cheesy.test/login');
    }
}