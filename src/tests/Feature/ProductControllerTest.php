<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testProductIndex(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('product.index'));
        $response->assertOk();
    }

    public function testProductCreate(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs(User::first())->get(route('product.create'));
        $response->assertOk();

        $response = $this->get(route('product.create'));
        $response->assertRedirect();
    }

    public function testProductShow(): void{
        $this->withoutExceptionHandling();

        $product = Product::random();

        $response = $this->actingAs(User::first())->get(route('product.show', [$product->id]));
        $response->assertOk();

        $response = $this->get(route('product.show', [$product->id]));
        $response->assertOk();
    }

    public function testProductStore(): void{
        $this->withoutExceptionHandling();

        $product = Product::factory()->make([
            'name' => Str::random(32)
          ]);

        $response = $this->actingAs(User::first())->post(route('product.store'), $product->toArray());
        $response->assertCreated();

        $response = $this->post(route('product.store'), $product->toArray());
        $response->assertRedirect();
    }
}