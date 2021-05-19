<?php


namespace Tests\Database;


use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class ProductDbTest extends TestCase
{
    public function testProductDatabaseConnection(): void{
        try{
            $result = Product::all();
            self::assertNotNull($result);
        }catch (\Exception $e){
            self::fail($e->getMessage());
        }
    }

    public function testProductStructure(): void{
        $subject = Product::random();

        self::assertNotNull($subject->id);
        self::assertNotNull($subject->brand);
        self::assertNotNull($subject->name);
        self::assertNotNull($subject->price);
        self::assertNotNull($subject->in_stock);
        self::assertNotNull($subject->description);
        self::assertNotNull($subject->short_description);
        self::assertNotNull($subject->created_at);
        self::assertNotNull($subject->updated_at);
    }

    public function testProductModelConnections(): void{
        $subject = Product::random();

        self::assertNotNull($subject->category);
        self::assertInstanceOf(BelongsTo::class, $subject->category());
    }
}