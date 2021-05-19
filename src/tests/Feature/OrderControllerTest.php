<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOrderIndex(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('order.index'));
        $response->assertOk();
    }

    public function testOrderCreate(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs(User::first())->get(route('order.create'));
        $response->assertOk();

        $response = $this->get(route('order.create'));
        $response->assertRedirect();
    }

    public function testOrderShow(): void{
        $this->withoutExceptionHandling();

        $order = Order::random();

        $response = $this->actingAs(User::first())->get(route('order.show', [$order->id]));
        $response->assertOk();

        $response = $this->get(route('category.show', [$order->id]));
        $response->assertOk();
    }

    public function testOrderStore(): void{
        $this->withoutExceptionHandling();

        $order = Order::factory()->make([
            'name' => Str::random(32)
          ]);

        $response = $this->actingAs(User::first())->post(route('order.store'), $order->toArray());
        $response->assertCreated();

        $response = $this->post(route('order.store'), $order->toArray());
        $response->assertRedirect();
    }
}