<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
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
        $this->withoutExceptionHandling();

        $response = $this->get(route('category.index'));
        $response->assertOk();
    }

    public function testCategoryCreate(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs(User::first())->get(route('category.create'));
        $response->assertOk();

        $response = $this->get(route('category.create'));
        $response->assertRedirect();
    }

    public function testCategoryShow(): void{
        $this->withoutExceptionHandling();

        $category = Category::random();

        $response = $this->actingAs(User::first())->get(route('category.show', [$category->id]));
        $response->assertOk();

        $response = $this->get(route('category.show', [$category->id]));
        $response->assertOk();
    }

    public function testCategoryStore(): void{
        $this->withoutExceptionHandling();

        $category = Category::factory()->make([
            'name' => Str::random(32)
          ]);

        $response = $this->actingAs(User::first())->post(route('category.store'), $category->toArray());
        $response->assertCreated();

        $response = $this->post(route('category.store'), $category->toArray());
        $response->assertRedirect();
    }
}