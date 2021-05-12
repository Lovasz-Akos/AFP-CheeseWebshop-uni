<?php

namespace Tests\Database;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class OrderDbTest extends TestCase
{
    public function testOrderDatabaseConnection(): void
    {
        try{
            $result = Order::all();
            self::assertNotNull($result);
        }catch (\Exception $exception){
            self::fail($exception->getMessage());
        }
    }

    public function testOrderStructure(): void
    {
        $subject = Order::random();

        self::assertNotNull($subject->brand);
        
    }

    public function testOrderModelConnections(): void
    {
        $subject = Order::random();

        self::assertNotNull($subject->order);

        self::assertInstanceOf(BelongsTo::class, $subject->order());
    }
}
