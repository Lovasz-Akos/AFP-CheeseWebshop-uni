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

        self::assertNotNull($subject->id);

        self::assertNotNull($subject->first_name);
        self::assertNotNull($subject->last_name);
        self::assertNotNull($subject->address);
        self::assertNotNull($subject->zip_code);
        self::assertNotNull($subject->city);
        self::assertNotNull($subject->country);
        self::assertNotNull($subject->complete);
        self::assertNotNull($subject->order_time);

        self::assertNotNull($subject->created_at);
        self::assertNotNull($subject->updated_at);
        
    }

    public function testOrderModelConnections(): void
    {
        $subject = Order::random();

        self::assertNotNull($subject->products);

        self::assertInstanceOf(BelongsToMany::class, $subject->products());
    }
}
