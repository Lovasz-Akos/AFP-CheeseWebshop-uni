<?php

namespace Tests\Database;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class ProductDbTest extends TestCase
{
    public function testProductDatabaseConnection(): void
    {
        try{
            $result = Product::all();
            self::assertNotNull($result);
        }catch (\Exception $exception){
            self::fail($exception->getMessage());
        }
    }

    public function testProductStructure(): void
    {
        $subject = Product::random();

        self::assertNotNull($subject->brand);
        
    }

    public function testProductModelConnections(): void
    {
        $subject = Product::random();

        self::assertNotNull($subject->product);

        self::assertInstanceOf(BelongsTo::class, $subject->product());
    }
}
